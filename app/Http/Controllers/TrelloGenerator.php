<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class TrelloGenerator extends Controller
{
    private $aliasesList = [
        "start" =>      ["{s}", "!s", "/s", "start",    "начал"],
        "pause" =>      ["{p}", "!p", "/p", "pause",    "пауза",     "{р}", "!р", "/р"],
        "continue" =>   ["{c}", "!c", "/c", "continue", "продолжил", "{с}", "!с", "/с"],
        "end" =>        ["{e}", "!e", "/e", "end",      "закончил",  "{е}", "!е", "/е"],
    ];

    public function generateTrelloReportPreview(Request $request){
        $workers = User::whereNotNull('trello_id')->get();

        $dateFrom = (new Carbon($request->dateFrom))->toIso8601ZuluString();
        $since = (new Carbon($dateFrom))->subMonth()->toIso8601ZuluString();

        $before = (new Carbon($request->dateTo));
        $before->hour = 23;
        $before->minute = 59;
        $before->second = 59;
        $before = $before->toIso8601ZuluString();

        $state = 0;

        $groupedArray = [];
        foreach ($workers as $worker){
            $actions = self::getUsersActions($worker->trello_id, $since, $before);
            foreach ($actions as $action) {
                if(self::getCommentCommand($action['data']['text'])) {
                    $groupedArray[$worker->name][$action['data']['board']['name']][$action['data']['card']['name']][] = ['text' => $action['data']['text'], 'date' => $action['date']];
                }
            }
        }

        $resultArray = null;
        foreach($groupedArray as $worker => $actions){
            foreach ($actions as $board => $tasks){
                foreach ($tasks as $task => $comments){
                    $currentTimePaused = 0;
                    $currentTimeSpend = 0;
                    foreach ($comments as $comment){
                        $command = $this->getCommentCommand($comment['text']);
                        switch($state){
                            case 0:
                                if($command === 'end' && (new Carbon($comment['date']))>=(new Carbon($dateFrom))){
                                    $currentTimeSpend += (new Carbon($comment['date']))->timestamp;
                                    $currentCompleteDate = $comment['date'];
                                    $state = 1;
                                }
                                elseif((new Carbon($comment['date']))<(new Carbon($dateFrom))){

                                }
                                else{
                                    $resultArray['errors'][] = ['text' => 'В стейте "' . $state . '", нет пары у комментария = "' . $comment['text'] . '", от даты - ' . $comment['date'] . ', таска - ' . $task];
                                }
                                break;
                            case 1:
                                if($command === 'continue'){
                                    $state = 2;
                                    $currentTimePaused += (new Carbon($comment['date']))->timestamp;
                                }
                                elseif($command === 'start'){
                                    $currentTimeSpend -= (new Carbon($comment['date']))->timestamp;
                                    $spendedMinutes = self::getRoundedTime(intval(round(($currentTimeSpend - $currentTimePaused) / 60)));
                                    if($spendedMinutes) {
                                        $resultArray[$board][] = ['text' => $task, 'date' => $currentCompleteDate ?? null, 'time' => self::getRoundedTime($spendedMinutes)];
                                    }
                                    $state = 0;
                                }
                                else{
                                    $resultArray['errors'][] = ['text' => 'Ошибка стейта - ' . $state . ', комментария = "' . $comment['text'] . '", от даты - ' . $comment['date'] . ', таска - ' . $task];
                                }
                                break;
                            case 2:
                                if($command === 'pause'){
                                    $state = 1;
                                    $currentTimePaused -= (new Carbon($comment['date']))->timestamp;
                                }
                                else{
                                    $resultArray['errors'][] = ['text' => 'Ошибка стейта - ' . $state . ', комментария = "' . $comment['text'] . '", от даты - ' . $comment['date'] . ', таска - ' . $task];
                                }
                                break;

                            default: break;
                        }
                    }
                }
            }
        }
        $lateActions = self::getLateComments(env('TRELLO_LATE_BOARD_ID'));
        foreach ($lateActions as $action){
            if( (new Carbon($action['date']))->between(new Carbon($dateFrom), new Carbon($before))){
                $resultArray[$action['board']][] = ['text' => $action['task'], 'date' => $action['date'], 'time' => self::getRoundedTime($action['time'])];
            }
        }
        return view('v1.pages.admin-pages.trello-report-preview')->with(compact('resultArray'));
    }

    private function getUsersActions($userId, $since = '', $before = ''){
        $getActionsByUserPerMonthUrl = env('TRELLO_HOST') . 'members/' . $userId . '/actions?filter=commentCard&fields=id,data,date&key=' . env('TRELLO_KEY') . '&token=' . env('TRELLO_TOKEN') . '&since=' . $since . '&before=' . $before . '&memberCreator=false';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $getActionsByUserPerMonthUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);

        return $response;
    }

    private function getLateComments($boardId){
        $getActionsByLateBoardUrl = env('TRELLO_HOST') .'boards/'. $boardId . '/actions?key=' . env('TRELLO_KEY') . '&token=' . env('TRELLO_TOKEN') . '&filter=commentCard&fields=id,data,date&memberCreator=false';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $getActionsByLateBoardUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);

        foreach ($response as $key => $action){
            $result[$key]['date'] = (new Carbon(explode(';', $action['data']['text'])[0]))->toIso8601ZuluString();
            $result[$key]['time'] = explode(';', $action['data']['text'])[1];
            $result[$key]['board'] = $action['data']['list']['name'];
            $result[$key]['task'] = $action['data']['card']['name'];
        }

        return $result;
    }

    public function generateTrelloReportDownload(Request $request){

        File::delete(File::allfiles(storage_path('app/uploads/')));

        $template_path = storage_path('app/template/') . 'report template.docx';

        $report = [];
        foreach ($request->request as $name => $values){
            switch ($name){
                case '_token': break;
                case 'reporter-name':
                    $report['reporterName'] = $values;
                    break;
                case 'report-date':
                    $report['reportDate'] = $values;
                    break;
                case 'report-start':
                    $report['reportStart'] = $values;
                    break;
                case 'report-end':
                    $report['reportEnd'] = $values;
                    break;
                default:
                    $report['tasks'][$name] = $values;
                    break;
            }
        }

        foreach ($report['tasks'] as $company => $tasks){

            $minutes_summary = array_sum(array_column($tasks, 'minutes'));
            $hours_summary = $minutes_summary / 60;

            $TBS = new \clsTinyButStrong();
            $TBS->Plugin(TBS_INSTALL, \clsOpenTBS::class);

            $TBS->LoadTemplate($template_path);

            $TBS->SetOption('charset', false);
            $TBS->SetOption('render', TBS_OUTPUT);

            $TBS->MergeField('project_name', str_replace('_', '.', $company));
            $TBS->MergeField('reporter', $report['reporterName']);
            $TBS->MergeField('report_date', $report['reportDate']);
            $TBS->MergeField('week_start', $report['reportStart']);
            $TBS->MergeField('week_end', $report['reportEnd']);
            $TBS->MergeField('minutes_summary', $minutes_summary);
            $TBS->MergeField('hours_summary', $hours_summary);
            $TBS->MergeBlock('a', $tasks);

            $doc_title = 'Отчет ' . str_replace('_', '.', $company) . ' ' . date_format(date_create($report['reportStart']), 'd.m.Y') . '.docx';


            $TBS->Show(OPENTBS_FILE, storage_path('app/uploads/') . $doc_title);
        }

        $phar = new \PharData(storage_path('app/uploads/') . 'Отчеты ' . date("d.m.Y") . '.tar.gz');
        $phar->buildFromDirectory(storage_path('app/uploads/'), '/\.docx$/');

        return response()->download(storage_path('app/uploads/') .'Отчеты ' . date("d.m.Y") . '.tar.gz');
    }

    private function getCommentCommand($str) {
        foreach ($this->aliasesList as $key => $aliases) {
            if(in_array($str, $aliases)) {
                return $key;
            }
        }
        return 0;
    }

    private function getRoundedTime($minutes){
        if($minutes % 5 == 0){
            return $minutes;
        }

        $rounded = round($minutes / 10) * 10;

        return $rounded < $minutes ? intval($rounded + 5) : intval($rounded);
    }
}
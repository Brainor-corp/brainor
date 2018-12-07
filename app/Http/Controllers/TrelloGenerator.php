<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TrelloGenerator extends Controller
{
    private $host = 'https://api.trello.com/1/';
    private $key = '7b558af4d32e2b1e567482305e812033';
    private $token = '604655c36dc2adf64b921b48fd9d1a4ef77a46daeb4929c8626a68e0cba4ff9d';
    private $aliasesList = [
        "start" => ["{s}"],
        "pause" => ["{p}"],
        "continue" => ["{c}"],
        "end" => ["{e}"],
    ];

    public function generateTrelloReportPreview(Request $request){
        $workers = User::whereNotNull('trello_id')->get();
        $dateFrom = (new Carbon($request->dateFrom))->toIso8601ZuluString();
        $since = (new Carbon($dateFrom))->subMonth()->toIso8601ZuluString();
        $before = (new Carbon($request->dateTo))->toIso8601ZuluString();
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

        $resultArray = [];
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
                                else{
                                    $resultArray['errors'][] = ['text' => 'У стейта "' . $state . '" нет пары, ИЛИ мы просто отсекли его по дате , комментария = "' . $comment['text'] . '", от даты - ' . $comment['date'] . ', таска - ' . $task];
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
        return view('v1.pages.admin-pages.trello-report-preview')->with(compact('resultArray'));
    }

    private function getUsersActions($userId, $since = '', $before = ''){
        $getActionsByUserPerMonthUrl = $this->host . 'members/' . $userId . '/actions?filter=commentCard&fields=id,data,date&key=' . $this->key . '&token=' . $this->token . '&since=' . $since . '&before=' . $before . '&memberCreator=false';

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
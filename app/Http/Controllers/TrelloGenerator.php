<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    public function generateTrelloReport(Request $request){
        $workers = User::whereNotNull('trello_id')->get();
        $dateFrom = (new Carbon($request->dateFrom))->toIso8601ZuluString();
        $since = (new Carbon($dateFrom))->subMonth()->toIso8601ZuluString();
        $before = (new Carbon($request->dateTo))->toIso8601ZuluString();
        $state = 0;

        $groupedArray = [];
        foreach ($workers as $worker){
            $actions = $this->getUsersActions($worker->trello_id, $since, $before);
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
                    foreach ($comments as $comment){
                        $currentTaskName = null;
                        $currentTimeSpend = null;
                        $currentCompleteDate = null;
                        switch($state){
                            case 0:
                                $state = 1;
                                break;
                            case 1:

                                break;
                            case 2:
                                $state = 0;
                                break;
                            case 3:
                                $state = 1;
                                break;
                        }
                    }
                }
            }
        }
        dd($groupedArray);
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

    public function getCommentCommand($str) {
        foreach ($this->aliasesList as $key => $aliases) {
            if(in_array($str, $aliases)) {
                return $key;
            }
        }
        return 0;
    }
}

//switch($state){
//    case 0:
//        $state = 1;
//
//        break;
//    case 1:
//        if($action['data']['text'] === '{s}'){
//            $state = 2;
//        }
//        elseif($action['data']['text'] === '{c}'){
//            $state = 3;
//        }
//        break;
//    case 2:
//        $state = 0;
//        break;
//    case 3:
//        $state = 1;
//        break;
//}

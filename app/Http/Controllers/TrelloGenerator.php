<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TrelloGenerator extends Controller
{
    public function generateTrelloReport(){
        $workers = User::whereNotNull('trello_id')->get();
        foreach ($workers as $worker){
            $actions = $this->getUsersActions($worker->trello_id, '2018-11-05T09:41:58.281Z', '2018-12-05T13:41:58.281Z');
            dd($actions);
        }
    }

    private function getUsersActions($userId, $since, $before){

//_________defines___________//

        $host = 'https://api.trello.com/1/';
        $key = '7b558af4d32e2b1e567482305e812033';
        $token = '604655c36dc2adf64b921b48fd9d1a4ef77a46daeb4929c8626a68e0cba4ff9d';
        $getActionsByUserUrl = $host . 'members/' . $userId . '/actions?filter=commentCard&fields=id,data,date&key=' . $key . '&token=' . $token . '&since=' . $since . '&before=' . $before . '&memberCreator=false';

//_________end defines_______//

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $getActionsByUserUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = array_reverse(json_decode(curl_exec($curl), true));
        curl_close($curl);
        return $response;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 11.01.2019
 * Time: 11:49
 */

namespace App\Http\Helpers\Api;


use App\ApiSession;
use App\User;

class Generate
{
    public static function uniqueUserToken() {
        do {
            $token = md5(rand(1, 10) . microtime());
        } while (User::where("api_token", $token)->first() instanceof User);

        return $token;
    }

    public static function uniqueUserSession() {
        do {
            $session = md5(rand(1, 10) . microtime());
        } while (ApiSession::where("key", $session)->first() instanceof ApiSession);

        return $session;
    }
}
<?php

namespace App\Http\Controllers\Api\v1;

use App\ApiSession;
use App\Http\Helpers\Api\Generate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class LoginController
{
    private $errors;

    public function execute(Request $request){
        $validation = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validation->fails()) {
            $this->errors['validate'] = $validation->errors();
            return Response::json($this->errors, 400);
        }

        $user = User::where('email', $request->email)->first();

        if(!$user) {
            $this->errors['user'] = 'user_not_found';
            return Response::json($this->errors, 400);
        }

        if(!Hash::check($request->password, $user->password)) {
            $this->errors['user'] = 'wrong_password';
            return Response::json($this->errors, 400);
        }

        if(!$user->api_token) {
            $user->api_token = Generate::uniqueUserToken();
            $user->save();
        }

        ApiSession::where('user_id', $user->id)->delete();

        $session = new ApiSession([
            'user_id' => $user->id,
            'key' => Generate::uniqueUserSession(),
            'expire' => Carbon::now()->addMinutes(Config::get('constants.api.session_expire')),
        ]);

        $session->save();

        return Response::json([
            'token' => $user->api_token,
            'session' => $session->key
        ], 200);
    }
}

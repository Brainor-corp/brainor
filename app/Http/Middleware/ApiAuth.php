<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ApiAuth
{
    private $errors;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $validation = Validator::make($request->headers->all(),[
            'http-token' => 'required',
            'http-session' => 'required',
        ]);

        if($validation->fails()) {
            $this->errors['validate'] = $validation->errors();
            return Response::json($this->errors, 401);
        }

        if(
            !($USER = User::where('api_token', $request->header('http-token'))->with('apiSession')->first())) {
            $this->errors['auth'] = ['user_not_found'];
            return Response::json($this->errors, 401);
        }

        if(!$USER->apiSession) {
            $this->errors['auth'] = ['session_do_not_exist'];
            return Response::json($this->errors, 401);
        }

        if(Carbon::now()->lt($USER->apiSession->expire)) {
            $this->errors['auth'] = ['session_expired'];
            return Response::json($this->errors, 401);
        }

        app()->instance(User::class, $USER);
        return $next($request);
    }
}

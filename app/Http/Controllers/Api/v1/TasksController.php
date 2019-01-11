<?php

namespace App\Http\Controllers\Api\v1;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TasksController
{
    private $errors;

    public function execute(Request $request, User $USER){

        // todo
        return Response::json([
            $USER->apiSession
        ], 200);
    }
}

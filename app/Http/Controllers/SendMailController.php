<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SendMailController extends Controller
{

    public function SendMail(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'tel'=>$request->tel,
            'text'=>$request->text,
        );

        Mail::send('emails/price-mail', $data, function ($message) use($request) {
            $message->to('awebstudio34@gmail.com')->subject('Alt Support');
        });

       return Response::json(['status' => 'success', 'text' => 'Ваше сообщение успешно отправлено.'], 200);

    }

}

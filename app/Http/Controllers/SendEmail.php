<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class SendEmail extends Controller
{

    public function actionSendEmail(Request $request)
    {
        $email = $request->email;
        Mail::send('email.sendEmail', ['nome' => $request->nome, 'assunto' => $request->subject, 'mensagem' => $request->message, 'email' => $request->email], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Contato');
        });
        return view('pageContact');
    }
}

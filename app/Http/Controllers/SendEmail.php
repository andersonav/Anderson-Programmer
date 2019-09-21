<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class SendEmail extends Controller {

    public function actionSendEmail(Request $request) {
        Mail::send('email.sendEmail', ['nome' => $request->nome, 'assunto' => $request->subject, 'mensagem' => $request->message, 'email' => $request->email], function ($message) {
            $message->to('anderson.alvesprogrammer@gmail.com');
            $message->subject('Contato EDEV');
        });
        return response()->json(array('success' => true));
    }

}

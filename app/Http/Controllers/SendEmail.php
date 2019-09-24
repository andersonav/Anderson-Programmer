<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Cliente;
use Nexmo\Laravel\Facade\Nexmo;

class SendEmail extends Controller
{

    public function actionSendEmail(Request $request)
    {
        $email = $request->email;
        $this->validateForm($request);

        Mail::send('email.sendEmailToClient', ['nome' => $request->name, 'assunto' => $request->subject], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Contato');
        });

        Mail::send('email.sendEmailToMe', ['nome' => $request->name, 'assunto' => $request->subject, 'mensagem' => $request->message, 'telefone' => $request->phone, 'email' => $request->email], function ($message) use ($email) {
            $message->to('andersonalves.dev@gmail.com');
            $message->subject('Contato');
        });

        $this->actionSendSMS($request);

        return view('pageContact');
    }

    public function actionSendSMS(Request $request)
    {
        $cliente = $request->name;
        $telefone = $request->phone;
        $assunto = $request->subject;
        $email = $request->email;

        $mensagem = "Anderson, entre em contato com o cliente " . $cliente . " pelo numero " . $telefone . ".";
        Nexmo::message()->send([
            'to'   => '5585988355751',
            'from' => 'Nexmo',
            'text' => $mensagem,
            // 'type' => 'unicode'
        ]);
    }


    public function validateForm(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:cliente',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;

class SendmailController extends Controller
{
    //
    function sendmail(Request $request){

        $postData = $request->post();
        ///return $postData['recipient']; //$request->request->all();

        $subject = $postData['subject'];
        $recipient =  $postData['recipient'];
       //$sender = 'no-reply@mailer.com';

        $body = $postData['body'];
        $cc = 'ade@gmail.com';
        $bcc = 'bola@gmail.com';

        $detail =[
            'subject'=>$subject,
            'body' => $body,
            //'cc' => $cc,
           // 'bcc' => $bcc
        ];

        //$send =  \Mail::to($recipient)->send(new \App\Mail\SendMail($detail));

        \Mail::to($recipient)
                ->cc($cc)
                ->bcc($bcc)
                ->send(new \App\Mail\SendMail($detail));

            $message = [
                'status' => 'success',
                'data' => [
                    'message' => 'mail sent successully'
                    ]
                ];
            return $message;

    }
}

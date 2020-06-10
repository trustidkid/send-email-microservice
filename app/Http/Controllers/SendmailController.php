<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;

class SendmailController extends Controller
{
    //
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function sendmail(Request $request){

        $postData = $request->post();
        ///return $postData['recipient']; //$request->request->all();

        $subject = $postData['subject'];
        $recipient =  $postData['recipient'];
       //$sender = 'no-reply@mailer.com';

        $body = $postData['body'];

        $detail =[
            'subject'=>$subject,
            'body' => $body,
        ];

        $cc = "";
        $bcc = "";
        if(!$postData['cc'] == "" || !$postData['bcc'] == ""){
            $cc = $postData['cc'];
            $bcc = $postData['bcc'];
        }

        if(!htmlspecialchars($subject) == "" || !htmlspecialchars($recipient) == "" || !htmlspecialchars($body) == ""){

            $pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
            //validate email
            if(!\preg_match($pattern,$recipient)){
                $message = [
                    'status' => 'failure',
                    'data' => [
                        'message' => 'Invalid Email'
                        ]
                    ];
                return $message;
            }

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
        }else{
            $message = [
                'status' => 'failure',
                'data' => [
                    'message' => 'All fields must be entered'
                    ]
                ];
            return $message;
        }


        //$send =  \Mail::to($recipient)->send(new \App\Mail\SendMail($detail));


    }
}

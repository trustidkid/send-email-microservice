<?php


	//send mail here 
$json = file_get_contents("php://input");

$data = json_decode($json);

$receipent = $data->receipent;
$sender = $data->sender;
$subject = $data->subject;
$body = $data->body;
$cc = $data->cc;
$bcc = $data->bcc;



	
	$mail_success = true;

	if ($mail_success) {
		response("success","mail sent successfully");
	} else {
		response("fail", "mail not sent");
	}

function response($status,$message){
	$response['status'] = $status;
	$response['message'] = $message;
	
	$json_response = json_encode($response);
	echo $json_response;
}



?>




<?php


header("Content-Type:application/json");

$receipent = $_POST['receipent'];
$sender = $_POST['sender'];
$subject = $_POST['subject'];
$body = $_POST['body'];
$cc = $_POST['cc'];
$bcc = $_POST['bcc'];



		$curl = curl_init();


	 curl_setopt_array($curl, array(
	 	CURLOPT_URL => "http://localhost/email/api.php",
	 	CURLOPT_RETURNTRANSFER => true,
	 	CURLOPT_CUSTOMREQUEST => "POST",
	 	CURLOPT_POSTFIELDS => json_encode([
	 	'receipent'=>$receipent,
        'sender'=>$sender,
        'subject'=>$subject,
        'body'=>$body,
        'cc'=>$cc,
        'bcc'=>$bcc
    ]),
	 	CURLOPT_HTTPHEADER => [
	 		"content-type: application/json",
	 		"cache-control: no-cache"],
	 ));

	 $response = curl_exec($curl);
	 $err = curl_error($curl);

	 if($err){
	 	die('curl returned error: '.$err);
	 }

	
	echo $response;

    ?>
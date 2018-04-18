<?php
	//Check for empty values
	foreach($_GET as $key=>$value){
		if(empty($value))
			die(json_encode(["success"=>0,"message"=>"$key not provided"]));
	}
	require 'email.php';
	//Set who the message is to be sent from
	$mail->setFrom('website@sfitengg.org', 'ITSA Committee');

	//Set who the message is to be sent to
	$mail->addAddress($email);	//Send at our email-id
	//Set the subject line
	$mail->Subject = 'New response from website...';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$msg= sprintf("<b>Name</b>: %s<br><b>Email</b>: <b>%s</b><br><b>Message</b>:%s",$_GET['name'],$_GET['email'],$_GET['message']);
	$mail->msgHTML($msg);
	
	//send the message, check for errors
	if (!$mail->send()) {
	    die(json_encode(['success'=>0,'message'=>'Mail not sent.. => '.$mail->ErrorInfo]));
	} else {
	    die(json_encode(['success'=>1]));
	}
?>
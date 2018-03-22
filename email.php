<?php
	require "PHPMailer.php";

	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = getenv('EMAIL');
	//Password to use for SMTP authentication
	$mail->Password = getenv('PASS');
	//Set who the message is to be sent from
	$mail->setFrom('itsa@sfitengg.org', 'ITSA Committee');

	//Set who the message is to be sent to
	$mail->addAddress($_GET['email']);
	//Set the subject line
	$mail->Subject = 'Registration successful..';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$msg= sprintf("Hello <b>%s %s</b>,\n Thank you for registering with itsa.",$_GET['fname'],$_GET['lname']);
	$mail->msgHTML($msg);
	
	//send the message, check for errors
	if (!$mail->send()) {
	    die(json_encode(['success'=>0,'message'=>'Mail not sent..']));
	} else {
	    die(json_encode(['success'=>1]));
	}
?>
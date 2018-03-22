<?php
	$msg= sprintf("Hello <b>%s %s</b>,\n Thank you for registering with itsa.",$_GET['fname'],$_GET['lname']);
	mail($_GET['email'],'Registration successful',$msg);

	die(json_encode(['success'=>1]));
?>
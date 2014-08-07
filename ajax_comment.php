<?php
	if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['blog']) && isset($_GET['comment_data'])){
		$from = $_GET["email"]; // sender
	    $blog = $_GET["blog"];
	    $subject = "Blog Comment ".$blog;
	    $message = $_GET['name']", ".$_GET["comment_data"];

	    $message = wordwrap($message, 70);
	    mail("paliwal.ck@gmail.com",$subject,$message,"From: $from\n");
?>
<?php
	$email = $_REQUEST['email'] ;
	$from = "From:"." ".$_REQUEST['email']." ";
	$message = "Message:"." ".$_REQUEST['message']." ";
	$content = $from.$message;
	mail( "andrew.tapp@gmail.com", "Personal Website Contact Form", $content, "From: $email" );
	header("Location: http://www.andrewtapp.com/index.html");
	?>
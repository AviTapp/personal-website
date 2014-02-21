<?php
	$email = $_REQUEST['email'] ;
	$message = $_REQUEST['message'] ;
	mail( "andrew.tapp@gmail.com", "Feedback Form Results",    $message, "From: $email" );
	?>
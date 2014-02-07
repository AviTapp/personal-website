<?php
	$name = $_REQUEST['name'];
	$wrapInside = $_REQUEST['wrapInside'];
	$wrapOutside = $_REQUEST['wrapOutside'];
	$howMany = $_REQUEST['howMany'];
	$drink = $_REQUEST['drink'];
	$details = $_REQUEST['details'];
	$balance = $_REQUEST['balance'];
	$payment = $_REQUEST['payment'];
	$contact = $_REQUEST['contact'];
	$message = "You have received a new Wednesday Wrap order. ".$name." would like ".$howMany." wraps, ".$wrapInside." style using a ".$wrapOutside." wrap. If thirsty, ".$name." wants ".$drink.". ".$name." owes ".$balance." and wants to pay with ".$payment.". If you have any questions, you can email or call ".$name." at ".$contact.". ".$details;

	mail( "andrew.tapp@gmail.com", "WWW.OrderForm.com", $message, "From: HPCatering@gmail.com" );
	?>
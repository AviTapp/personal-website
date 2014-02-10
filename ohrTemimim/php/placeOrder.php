<!DOCTYPE html>
<html>
	<head>
		<title>Thank You!</title>
		<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="../css/wOF.css">
	</head>
	<body>
		<div class="container_12">
			<div class="prefix_3 grid_6 suffix_3" id="thankYou">
				<?php
					$name = $_REQUEST['name'];
					$wrapInside = $_REQUEST['wrapInside'];
					$wrapOutside = $_REQUEST['wrapOutside'];
					$howMany = $_REQUEST['howMany'];
					$drinkName = $_REQUEST['drinkName'];
					if ($drinkName=="Water Bottle") {
						$drinkCost = 0.75;
					} elseif ($drinkName=="Snapple") {
						$drinkCost = 1.00;
					} else {
						$drinkCost = 0.00;
					}
					$details = $_REQUEST['details'];
					if ($wrapInside=="Garden Vegetable Wrap") {
						$balance = 3.50;
					} elseif ($wrapInside=="California Veggie Wrap") {
						$balance = 3.50;
					} elseif ($wrapInside=="Tuna Wrap") {
						$balance = 4.50;
					} else {
						$balance = 5.00;
					}

					$subTotal = ($balance * $howMany);
					$total = ($subTotal + $drinkCost);
					$total = number_format($total, 2);

					$payment = $_REQUEST['payment'];
					$contact = $_REQUEST['contact'];
					$message = "You have received a new Wednesday Wrap order. ".$name." would like ".$howMany." wraps, ".$wrapInside." style using a ".$wrapOutside." wrap. If thirsty, ".$name." wants a ".$drinkName.". ".$name." owes $".$total." and wants to pay with ".$payment.". If you have any questions, you can email or call ".$name." at ".$contact.". ".$details;
					mail( "andrew.tapp@gmail.com", "WWW.OrderForm.com", $message, "From: HPCatering@gmail.com" );
					$thankYou = "Your total balance is \$$total. Thank you for placing your order. It will be available at Ohr Temimim School on Wednesday morning.";
					print $thankYou;
				?>
			<a href="../wrapOrderForm.html" class="button">Place a new order</a>
			</div>
		</div>
	</body>
</html>
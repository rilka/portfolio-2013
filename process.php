<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	
	$to      = "angelaconstanceli@gmail.com";
	$subject = "A message for you! :)";
	$message = $name . " | " . $email . "\n\n" . $message;
	$headers = "From: angela.li";

	mail($to, $subject, $message, $headers);
?>
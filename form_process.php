<?php

	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['mail'];
	$message = $_POST['message'];
	$to = "myemail@email.com";
	$subject = "subject";

	mail($to, $subject, $message, "From" . $firstname . $lastname);
	echo "Your message has ben sent";
?>
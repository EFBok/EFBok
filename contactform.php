<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$subject = $_POST['email'];

	$mailTo = "elijahbok21@protonmail.com"
	$headers = "From: ".$email;
	$txt = "You recieved an email from" .$name.".\n\n" .$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}
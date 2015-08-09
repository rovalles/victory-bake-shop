<?php
	$to = 'crissy@victorybakeshop.com';
	$headers = 'From: ' . filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$subject = 'Inquiry From victorybakeshop.com!';
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
	$message = $message . '\nDate Needed:\n' . filter_var($_POST['due-date'], FILTER_SANITIZE_STRING);

	if ($_POST['extra']) {
		return false;
	} else {
		mail($to, $subject, $message, $headers);
		echo('Message sent. Thanks for contacting me. I\'ll be in touch soon!');
		return true;
	}
?>
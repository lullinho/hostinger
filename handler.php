<?php
	
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];


	$email_form = 'felipe@lullinhogames.com.br';

	$email_subject = "formulario";

	$email_body = "User Name: $name.\n".
				   "User email: $visitor_email.\n".
				   "User Message: $message.\n";

	$to = "felipelullio@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("Location: index.html");



?>
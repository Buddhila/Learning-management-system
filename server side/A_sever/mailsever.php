<?php 
	

	
		$fullname	= $_POST['name'];
		$email		= $_POST['email'];
		$subject	= $_POST['subject'];
		$message	= $_POST['message'];

		$to	 		  = 'Buddhilabhanu@gmail.com';
		$mail_subject = 'Message from Website';
		$email_body   = "Message from Contact Us Page of the Website: <br>";
		$email_body   .= "<b>From:</b> {$fullname} <br>";
		$email_body   .= "<b>Subject:</b> {$subject} <br>";
		$email_body   .= "<b>Message:</b><br>" . nl2br(strip_tags($message));

		$header       = "From: {$email}\r\nContent-Type: text/html;";

		$send_mail_result = mail($to, $mail_subject, $email_body, $header);

		if ( $send_mail_result ) {
			echo "Message Sent.";
		} else {
			echo "Message Not Sent.";
		}
 ?>

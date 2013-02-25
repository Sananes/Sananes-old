<?php

// Change your@mail.com to your own
$contactformRecipient = 'aasananes@gmail.com';

// Change the string
// This is the title that will show up as a title in the e-mail
$contactformTitle = 'Work Inquiry';


if($_POST) {
		$contactName = addslashes( $_POST['contactName'] );
		$contactEmail = addslashes( $_POST['contactEmail'] );
		$contactMessage = addslashes( $_POST['contactMessage'] );
		

		$message = '';
		$message .= 'Name: ' . $contactName . '<br />';
		$message .= 'Email: ' . $contactEmail . '<br />';
		if( isset($contactMessage) ) { $message .= 'Message: ' . $contactMessage . '<br />'; }


		// Email Headers
		$headers = "From: " . $contactEmail . "\r\n";
		$headers .= "Reply-To: ". $contactEmail . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		

		// send mail
		// mail( to, subject, message, headers, parameters)
		mail( $contactformRecipient, $contactformTitle + ' ' + $contactName, $message, $headers );
}

?>
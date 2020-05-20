<?php
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
	//Server settings
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
	$mail->isSMTP();                                            // Send using SMTP
	$mail->Host       = 'mail.tourgoapp.com';                    // Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	$mail->Username   = 'company@tourgoapp.com';                     // SMTP username
	$mail->Password   = '4gcBjf5cTP';                               // SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	$mail->Port       = 995;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	//Recipients
	$mail->setFrom('company@tourgoapp.com', 'TOURGOLTD');
	$mail->addAddress($u_email);     // Add a recipient
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	// Attachments
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	// Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Test mail';
	$mail->Body    = '<h1>WELCOME TO TOURGO!!!!!</h1>';
	$mail->AltBody = 'Boi u suck';

	$mail->send();
    echo 'Message has been sent';
    //header("location: https://docs.google.com/forms/d/e/1FAIpQLSdsjUgnHmWLVST8QgSkfMc_OaMQIzpx9xhM2J1pgoLh58amyQ/viewform");
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
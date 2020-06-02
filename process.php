<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$u_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)) {;
		echo "<script type='text/javascript'>alert('Please enter a valid email address!');</script>";
		exit;
	}

	//mysql credentials
	$mysql_host = "localhost";
	$mysql_username = "site";
	$mysql_password = "`xE3pp<Pq7u&L@U-";
	$mysql_database = "tourgoapp";

	$con = mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}

	// Perform query
	if (isset($_POST['likeToCompete'])) {
		if ($result = mysqli_query($con, "INSERT INTO emails VALUES ('$u_email', true)")) {
			mysqli_free_result($result);
			mailer($u_email);
			//header("location: https://docs.google.com/forms/d/e/1FAIpQLSdsjUgnHmWLVST8QgSkfMc_OaMQIzpx9xhM2J1pgoLh58amyQ/viewform");
		}
	} else {
		if ($result = mysqli_query($con, "INSERT INTO emails VALUES ('$u_email', false)")) {
			mysqli_free_result($result);
		}
	}
	mysqli_close($con);
}

function mailer($user_email)
{
	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer;

	//Server settings
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
	//$mail->isSMTP();                                            // Send using SMTP
	$mail->Host       = 'mail.tourgoapp.com';                    // Set the SMTP server to send through
	$mail->SMTPAuth   = false;                                   // Enable SMTP authentication
	$mail->Username   = 'company';                     // SMTP username
	$mail->Password   = '4gcBjf5cTP';                               // SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	$mail->Port       = 995;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	//Recipients
	$mail->setFrom('company@tourgoapp.com', 'TOURGO LTD');
	$mail->addAddress($user_email);     // Add a recipient
	//$mail->addAddress('marcella.vincenzo2@gmail.com');


	// Attachments
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	// Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'WELCOME TO TOURGO';
	$mail->Body    = '<body style="background-color: #fafafa;">
	<table class="container" style="
	width: 600px;
	margin-left: auto;
	margin-right: auto;
	background-color: #ffffff;   
	border-spacing: 0;   
	border-collapse: separate;
	">
	  <tbody>
		<tr class="headerRow"
		style="
		width: 100%;
		background-color: #00609B;
		"
		>
		  <td height="200">
			<table class="innerTable" style="
			width: 100%;
			height: 100%;
			border-spacing: 0;   
			border-collapse: separate;
			">
			  <tbody>
				<tr>
				  <td style="padding: 40px">
					<table class="innerTable" style="
					width: 100%;
					height: 100%;
					border-spacing: 0;   
					border-collapse: separate;
					">
					  <tbody>
						<tr>
						  <td height="100" 
						  style="
						  background-image: url("./email-img/MainLOGO@2x.png");
						  background-position: left;
						  background-repeat: no-repeat;
						  background-size: contain;
						  ">
						  </td>
						</tr>
						<tr>
						  <td height="50" style="
							font-size: 18px; 
							font-family: "Montserrat", sans-serif; 
							font-weight: 400; color: #ffffff; 
							text-align: left; vertical-align: bottom;
							padding-left: 10px;
							">
							A BIG HELLO AND
						  </td>
						</tr>
						<tr>
						  <td height="50" style="
							font-size: 35px; 
							font-family: "Montserrat", sans-serif; 
							font-weight: 800; color: #ffffff; 
							text-align: left; 
							vertical-align: top;
							padding-left: 10px;
							line-height: 28px;
							">
							WELCOME!
						  </td>
						</tr>
  
					  </tbody>
					</table>
				  </td>
				  <td class="illustration" 
				  style="
				  padding-right: 40px; 
				  text-align: right;
				  vertical-align: bottom;
				  width: 40%;
				  ">
					<p style="
					background-image: url("./email-img/tourgoers.png");
					background-position: bottom right;
					background-repeat: no-repeat;
					background-size: contain;
					display: block; 
					width: 100%; 
					height:100%; 
					margin-bottom: -40px;"></p>
				  </td>
				</tr>
			  </tbody>
			</table>
		  </td>
		</tr>
		<tr height="50"></tr>
		<tr class="contentRow">
		  <td>
			<table class="innerTable" style="
			width: 100%;
			height: 100%;
			padding: 40px; padding-top: 30px;
			border-spacing: 0;   
			border-collapse: separate;
			">
  
			  <tr>
				<td style="
				font-size: 14px; 
				font-family: "Montserrat", sans-serif; 
				font-weight: 200; color: #000000; 
				text-align: left; vertical-align: center;
				">
				  We’re so happy you are one of the first <span style="font-weight: 600;">TOURGOers</span> to join us on
				  this journey! With you on our side, we’ll revolutionise the way we see, explore and experience our
				  cities - starting with the UK’s capital, <span>London</span>!💪😎
				</td>
			  </tr>
  
			  <tr>
				<td>
				  <table style="
				  border-spacing: 0;   
				  border-collapse: separate;
				  ">
					<tbody>
					  <tr>
						<td>
						  <table style="
						  border-spacing: 0;   
						  border-collapse: separate;
						  ">
							<tbody>
							  <tr>
								<td height="100" style="
								font-size: 14px; 
								font-family: "Montserrat", sans-serif; 
								font-weight: 200; color: #000000; 
								text-align: left; vertical-align: middle;
								padding-right: 40px;
								">
								  Our goal is to make TOURGO your new favourite app and shape it exactly how you would
								  like it to be. To do so,
								  we will need a little of your help…
								</td>
							  </tr>
							  <tr>
								<td height="100" style="
								font-size: 14px; 
								font-family: "Montserrat", sans-serif; 
								font-weight: 200; color: #000000; 
								text-align: left; vertical-align: middle;
								padding-right: 40px;
								">
								  Make the difference <span style="font-weight: 600;">as a founding member</span> and take
								  our short survey (2.13 minutes on average!). ✅
								</td>
							  </tr>
							</tbody>
						  </table>
						</td>
						<td style="
						height:160px; width: 160px;
						padding: 10px; padding-top: 60px; 
						text-align: right; vertical-align: middle;
						background-image: url("./email-img/london_info.png");
						background-position: center;
						background-repeat: no-repeat;
						background-size: contain;
						">
						</td>
					  </tr>
					</tbody>
				  </table>
				</td>
			  </tr>
  
  
			  <tr>
				<td height="40" style="
				text-align: center; 
				vertical-align: top;
				padding: 40px;
				">
				  <a href="https://docs.google.com/forms/d/167P-3hHJi3aR0DNAnFFHjuoVFI-dbUs1joTf0gumWuk/viewform?edit_requested=true" target="_blank" style=" 
				  font-family: "Montserrat", sans-serif; 
				  font-size: 16px; 
				  font-weight: 400;
				  font-style: italic;
				  text-align: left; vertical-align: middle;
				  text-transform: uppercase;
				  color: #ffffff;
				  background-color: #FF512F;
				  border-radius: 10px;
				  padding: 16px 40px;
				  text-decoration: none;
				  cursor: pointer;
				  ">
					Take The Survey
				  </a>
				</td>
			  </tr>
  
			  <tr>
				<td height="120" style="
				font-size: 14px; 
				font-family: "Montserrat", sans-serif; 
				font-weight: 200; color: #000000; 
				text-align: left; vertical-align: top;
				">
				  You will not only contribute in shaping the app, but you will also <span style="font-weight: 600;">gain
					your first TOURGO points</span>
				  and the chance to <span style="font-weight: 600;">win 1 of 5 JUST EAT gift cards worth £20</span> 🎯🎁
				  <a class="tandc" href="" style="
				  font-weight: 400;
				  font-style: italic;
				  color: #FF512F;
				  text-decoration: none;
				  cursor: pointer;
				  ">
					( Read terms and conditions )
				  </a>!
				</td>
			  </tr>
  
			  <tr>
				<td height="120" style="
				font-size: 14px; 
				font-family: "Montserrat", sans-serif; 
				font-weight: 200; color: #000000; 
				text-align: left; vertical-align: top;
				">
				  The launch of TOURGO, and our competition, are still pending an official date. But don’t worry,
				  <span style="font-weight: 600;">we’ll notify you</span> via email or social media when the time is fast
				  approaching.
				  In the meantime, follow and engage with us on
				  <a href="https://www.instagram.com/tourgolondon/" target="_blank" style="
				  font-weight: 400;
				  font-style: italic;
				  color: #FF512F;
				  text-decoration: none;
				  cursor: pointer;
				  ">
					Instagram
				  </a>
				  and
				  <a href="https://www.facebook.com/Tourgo-APP-108726170790774/" target="_blank" style="
				  font-weight: 400;
				  font-style: italic;
				  color: #FF512F;
				  text-decoration: none;
				  cursor: pointer;
				  ">
					Facebook
				  </a>!
				</td>
			  </tr>
  
			  <tr>
				<td height="60" style="
				font-size: 14px; 
				font-family: "Montserrat", sans-serif; 
				font-weight: 200; color: #000000; 
				text-align: left; vertical-align: bottom;
				">
				  We wish you all the best </br>with your future adventures.
				</td>
			  </tr>
  
			  <tr>
				<td height="40" style="
				font-size: 14px; 
				font-family: "Montserrat", sans-serif; 
				font-weight: 200; color: #000000; 
				text-align: left; vertical-align: bottom;
				">
				  Thank you very much for joining us,
				</td>
			  </tr>
			</table>
		  </td>
		</tr>
		<tr class="footerRow">
		  <td>
			<table style="height: 100%; width: 100%;
			  border-spacing: 0;   
			  border-collapse: separate;
			  ">
			  <tbody>
				<tr>
				  <td height="10" style="
				  background-color: #F09819; 
				  width: 50%;
				  "></td>
				  <td height="10" style="
				  background-color: #00609B;
				  width: 50%;
				  "></td>
				</tr>
				<table width="100%" style="padding: 40px; vertical-align: middle;
				  border-spacing: 0;   
				  border-collapse: separate;
				">
				  <tbody>
					<tr>
					  <td>
						<table style="border-spacing: 0;   
						border-collapse: separate;">
						  <tbody>
							<tr>
							  <td width="90" height="90" style="
							  background-color: #00609B;
							  background-image: url("./email-img/iconLogo.png");
							  background-repeat: no-repeat;
							  background-position: top left;
							  background-size: cover;
							  border-radius: 20px;
							  color: #ffffff;
							  ">
							  </td>
							  <td style="padding-left: 40px;">
								<table style="border-spacing: 0;   
								border-collapse: separate;">
								  <tbody>
									<tr>
									  <td style="
									  text-align: left;
									  padding-bottom: 5px;
									  font-size: 16px; 
									  font-family: "Montserrat", sans-serif; 
									  font-weight: 800; color: #000000; 
									  text-align: left; 
									  vertical-align: center;
									  ">
										<a>TOURGO TEAM</a>
									  </td>
									</tr>
									<tr>
									  <td style="
									  text-align: left;
									  font-size: 11px; 
									  padding-bottom: 0; 
									  font-family: "Montserrat", sans-serif; 
									  font-weight: 400;; 
									  text-align: left; 
									  vertical-align: center;
									  ">
										<a href="mailto:company@tourgoapp.com" style="
										cursor: pointer;
										text-decoration: none;
										color: #000000;
										">
										  company@tourgo.com
										</a>
									  </td>
									</tr>
									<tr>
									  <td style="
									  text-align: left;
									  font-size: 11px; 
									  padding-bottom: 0;  
									  font-family: "Montserrat", sans-serif; 
									  font-weight: 400;; 
									  text-align: left; 
									  vertical-align: center;
									  ">
										<a href="http://tourgoapp.com" target="_blank" style="
										cursor: pointer;
										text-decoration: none;
										color: #000000;
										">
										  www.tougoapp.com
										</a>
									  </td>
									</tr>
									<tr>
									  <td style="
									  text-align: left;
									  font-size: 11px; 
									  padding-bottom: 0;  
									  font-family: "Montserrat", sans-serif; 
									  font-weight: 400;; 
									  text-align: left; 
									  vertical-align: center;
									  ">
										<a href="https://www.facebook.com/Tourgo-APP-108726170790774/" target="_blank" style="
										cursor: pointer;
										text-decoration: none;
										color: #000000;
										">
										  Facebook
										</a>
										/
										<a href="https://www.instagram.com/tourgolondon/" target="_blank" style="
										cursor: pointer;
										text-decoration: none;
										color: #000000;
										">
										  Instagram
										</a>
									  </td>
									</tr>
								  </tbody>
								</table>
							  </td>
							</tr>
						  </tbody>
						</table>
					  </td>
					</tr>
  
				  </tbody>
				</table>
			  </tbody>
			</table>
		  </td>
		</tr>
	  </tbody>
	</table>
  
  </body>
  ';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if (!$mail->send()) {
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message sent!';
	}
}

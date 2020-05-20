<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$u_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)){;
		echo "<script type='text/javascript'>alert('Please enter a valid email address!');</script>";
		exit;
	}
   	echo "<p>" . $u_email . "</p>"; //DEBUG STATEMENT
	
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
	if(isset($_POST['likeToCompete'])){
		if ($result = mysqli_query($con, "INSERT INTO emails VALUES ('$u_email', true)")){
			mysqli_free_result($result);
			//header("location: https://docs.google.com/forms/d/e/1FAIpQLSdsjUgnHmWLVST8QgSkfMc_OaMQIzpx9xhM2J1pgoLh58amyQ/viewform");
		}
	} else {
		if ($result = mysqli_query($con, "INSERT INTO emails VALUES ('$u_email', false)")){
			mysqli_free_result($result);
			header("location: mailer.php")

		}
	}
	mysqli_close($con);
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$u_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)) {
		die("Please enter a valid email address!");
	}
    echo "<p>" . $u_email . "</p>"; //DEBUG STATEMENT
	//mysql credentials
	//$mysql_host = "localhost";
	//$mysql_username = "site"<
	//$mysql_password = "`xE3pp<Pq7u&L@U-";
	//$mysql_database = "tourgoapp";
}
?>
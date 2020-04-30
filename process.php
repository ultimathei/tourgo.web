<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$u_email = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	if (empty($u_email) || !filter_var($u_email, FILTER_VALIDATE_EMAIL)){
		die("Please enter a valid email address!");
	}
    echo "<p>" . $u_email . "</p>"; //DEBUG STATEMENT
	
	//mysql credentials
	$mysql_host = "localhost";
	$mysql_username = "site";
	$mysql_password = "`xE3pp<Pq7u&L@U-";
	$mysql_database = "tourgoapp";

	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);

	//Output any connection error
	if($mysqli -> connect_error){
		die('Error : (' . $mysqli->connect_errno . ') ' .  $mysqli->connect_error);
	}	
	
	//$query = "INSERT INTO tourgoapp user_email VALUES('$u_email', true)"; 

	if($result = $mysqli -> query("INSERT INTO tourgoapp user_email VALUES('$u_email', true)")){
		echo "Done!";
	}
	$result -> free_result();

	$mysqli -> close();
}
?>
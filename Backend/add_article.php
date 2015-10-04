<?php
	session_start();
	include "settings.php";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Database connection failed: " . $conn->connect_error);
	} 

	$username = $_SESSION["username"];
	$content = $_POST["content"];

	$sql = $sql= "SELECT first_name, last_name FROM PATIENTS WHERE username = '".$username."';";
	$result  = $conn->query($sql);
	$row = $result->fetch_assoc();	
	$first_name = $row["first_name"];
	$last_name = $row["last_name"];

	$sql = "INSERT INTO ARTICLES(patient_name, content, article_date) VALUES ('".$first_name." ".$last_name."', '".$content."', now());";
	$result = $conn->query($sql);

	if ($result === TRUE) {
	    echo "New article created successfully";
	    header("refresh:1;url=http://localhost/Backend/profile.php");
		exit;
	}
	else {
		echo "Error creating record, try again.	";	
	}	
	$conn->close();			

?>
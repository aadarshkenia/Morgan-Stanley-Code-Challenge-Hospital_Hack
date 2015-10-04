<?php
session_start();
include "settings.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} 


$post_username = $_POST["username"];
$post_password = $_POST["password"];
//Get disease name
$sql= "SELECT password FROM PATIENTS WHERE username = '".$post_username."';";
$result  = $conn->query($sql);
$conn->close();	

if($result->num_rows ==0){
	echo "Invalid Username, Try Again.";
	header("refresh:1;url=http://localhost/index.html");
	exit;
}
else{
	$row = $result->fetch_assoc();
	$db_password = $row["password"];



	if($db_password != $post_password){
		echo "Incorrect Password, Try Again.";
		header("refresh:1;url=http://localhost/index.html");
		exit;
	}
	else{
		//Set session variable
		$_SESSION["username"] = $post_username;
		header("refresh:1;url=http://localhost/Backend/profile.php");
	exit;
	}
}		

?>
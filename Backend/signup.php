<?php

include "settings.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} 

$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$hospital =  $_POST["hospital"];
$disease_name =  $_POST["disease_name"];
$about =  $_POST["about"];


/*
echo $username."<br>";
echo $firstname."<br>";
echo $lastname."<br>";
echo $gender."<br>";
echo $age."<br>";
echo $hospital."<br>";
echo $disease_name."<br>";
echo $about."<br>";
*/

if(is_null($username)===TRUE){
	echo "Cannot create empty record, try again.";
}
else{
	$sql = "INSERT INTO PATIENTS(username, password, first_name, last_name, gender, age, hospital, disease_name, about) VALUES ('".$username."', '".$password."', '".$firstname."', '".$lastname."', '".$gender."', '".$age."', '".$hospital."', '".$disease_name."', '".$about."');";//
	$result = $conn->query($sql);

	if ($result === TRUE) {
	    echo "New record created successfully";
	    header("refresh:1;url=http://localhost/index.html");
		exit;
	}
	else {
		echo "Error creating record, try again.	";	# code...
	}
}

$conn->close();			
?>
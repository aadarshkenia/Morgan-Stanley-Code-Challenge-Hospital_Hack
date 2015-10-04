<!DOCTYPE html>
<html>
<?php
	session_start();
	$username = $_POST["connect_username"];
	$user = strtolower($username);
	include "settings.php";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Database connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM PATIENTS WHERE username = '".$user."';";
		$result  = $conn->query($sql);
		$row = $result->fetch_assoc();
		$firstname = $row["first_name"];
		$lastname = $row["last_name"];
		$disease_name = $row["disease_name"];
		$about_me = $row["about"];

?>

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "profile.css">
	<title>profile</title>
</head>
<body>
	<div id = "Menu">

				<ul>

					<li><a href = "http://localhost/Backend/profile.php">My Profile</a></li>	

					<li><a href = "http://localhost/Backend/connect.php"> Connect</a></lu>

					<li><a href = "http://localhost/Backend/signout.php"> Sign Out</a></lu>
				</ul>

	</div>
	<table align="center">
      <tr>
        <td>
          <h1 id="lol"><?php echo $firstname, " ", $lastname."<br>";
          						echo "<h6>(Click on my name to know more!)</h6>";
					?></h1>
					<h3 id="place">Something about me: <?php echo $about_me;?></h3>
        </td>
       
      </tr>
    </table>
<i>Desease I suffer from: <?php echo $disease_name;?></i><br>
<i>Email me for more information at : <?php echo $user?> </i>


</body>
<script src="profile.js"> </script>

</html>
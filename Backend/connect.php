<!DOCTYPE>
<meta charset = UTF = "8">
<html>
<head>
	<title>Connect with others</title>
	<link rel="stylesheet" type="text/css" href="NewsFeedStylesheet.css">
</head>
	<body>
	    <div id = "Menu">
				<ul>
					<li><a href = "">My Profile</a></li>
					<li><a href = ""> Sign Out</a></lu>
				</ul>
		</div>
		<div id="Menu1">
		<h1>These are other people you can connect to on our Hospital Hack!<h1>
 		<?php 
			include "settings.php";
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);

				// Check connection
				if ($conn->connect_error) {
				    die("Database connection failed: " . $conn->connect_error);
				} 

			$sql = "SELECT username FROM PATIENTS;";
			$result  = $conn->query($sql);
			$row = $result->fetch_assoc();
			
			while($row = $result->fetch_assoc()){
				$username = $row["username"];
		?>

		<li ><i><?php echo $username; ?></i></li>			

		<?php
			}
			$conn->close();
		?>
		<form method="post" action="http://localhost/Backend/show_profile.php">
			<p> Enter a username to connect to </p>
			<input type="text" name="connect_username" />
			<input type="submit" value="Submit"	/>
		</form>
		

		</div>



	</body>

</html>
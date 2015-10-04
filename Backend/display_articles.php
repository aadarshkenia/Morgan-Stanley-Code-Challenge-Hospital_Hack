<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "articles.css">
	</head>
	<div class="title">
		<p id="articles_title"> Patient Articles </p>
	</div>
	<body>
		<div id = "Menu">

			<ul>

				<li><a href = "http://localhost/Backend/profile.php">My Profile</a></li>	

				<li><a href = "http://localhost/Backend/signout.php"> Sign Out</a></lu>

			</ul>

		</div>
		<?php
		include "settings.php";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Database connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM ARTICLES;";
		$result  = $conn->query($sql);


		while($row = $result->fetch_assoc()){
			$author = $row["patient_name"];
			$article = $row["content"];
			$article = nl2br($article);
			$article_date = $row["article_date"];
			$format_str = $author."   ".$article_date;
		?>
		<p ><b><i><?php echo $author; ?></i></b></p>
		<p ><i><?php echo $article_date; ?></i></p>
		<p><?php echo $article; ?></p>
		<hr>	

		<?php
		}
		$conn->close();
		?>		
	</body>
</html>
<!DOCTYPE html>
<html>
<?php
	session_start();
	$username = $_SESSION["username"];
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
          <h1 id="lol"><?php echo $firstname, " ", $lastname;
					?></h1>
					<h3 id="place">Something about me: <?php echo $about_me;?></h3>
        </td>
        <td>
          <textarea rows="4" cols="50">
          </textarea><input type="submit" value="something about me">
        </td>
      </tr>
    </table>
<i>Desease I suffer from: <?php echo $disease_name;?></i>

		<table align="center" border="2">
			<tr>
				<td>
  				<p>Things that I like</p>
      			<ul>
        			<li class="1"><input type="text" name="like1" size="30" maxlength="30" class="theweeknd"/><button id="1">x</button></li>
        			<li class="2"><input type="text" name="lik2" size="30" maxlength="30" class="2"/><button id="2">x</button></li>
        			<li class="3"><input type="text" size="30" maxlength="30" name="Illness[]" class="3"><button id="3">x</button></li>
        			<div id="divName" class="4">
        			</div>
      			</ul>
      				<input type="button" value="Add Input" onClick="addInput('divName');">
			</td>
			<td>
  				<p aling="left">Goals I will like to achieve</p>
      			<ul>
        			<li class="5"><input type="text" name="like1" size="30" maxlength="30" class="5"/><button id="5">x</button></li>
        			<li class="6"><input type="text" name="lik2" size="30" maxlength="30" class="6"/><button id="6">x</button></li>
        			<li class="7"><input type="text" size="30" maxlength="30" name="Illness[]" class="7"><button id="7">x</button></li>
        			<div id="divName2" class="8">
			        </div>
      			</ul>
      				<input type="button" value="Add Input" onClick="Input('divName2');">
		  </td>
		</tr>
		<tr>
			<td>
				<p>Favorite Sport</p>
					<ul>
						<li><input type="text" name="like1" size="30" maxlength="30"/></li>
					</ul>
			</td>
			<td>
				<p>What is your favorite animal?</p>
				<ul>
					<li><input type="text" size="30" maxlength="30"/></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p>Hobbies (Insert Three favorites)</p>
				<ul>
					<li><input type="text" size="30" maxlength="30"/></li>
					<li><input type="text" size="30" maxlength="30"/></li>
					<li><input type="text" size="30" maxlength="30" ></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p>What is my favorite thing to do during my free time</p>
					<ul>
						<li><input type="text" name="like1" size="30" maxlength="30"/></li>
					</ul>
			</td>
		</tr>
	</table>
	<input type="button" value="submit" align="right">

</body>
<script src="profile.js"> </script>

</html>

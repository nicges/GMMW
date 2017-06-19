<?php
	if(isset($_POST["register_button"])) {
		
		$ID = 0;
		//$ID = $_POST["ID"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		
	$mysqli = mysqli_connect("localhost", "root", "", "group_gmmw");
	$input = "INSERT INTO user (ID, username, password)"
	. "VALUES ('$ID', '$username', '$password')";

	$eintragen = mysqli_query($mysqli, $input);
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GMMW</title>
	
  </head>
  <body>
	<div>
	  <form action="register.php" method="post">
		<div>
			<label for="name">username:</label>
			<input type="text" name="username" placeholder="Muster" pattern="[A-Za-z]{0,50}" required>
		</div>
		<div>
			<label for="pwd">password:</label>
			<input type="password" name="password" placeholder="password" required>
		</div>
		<input type="submit" name="register_button" value="Registrieren">
	  </form>
	</div>
  
  
  
  
      
  </body>
</html>

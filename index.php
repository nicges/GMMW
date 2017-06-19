	
<?php
	if(isset($_POST["register_button"])) {
		
		$ID = 0;
		$IDFS = 0;
		//$ID = $_POST["ID"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$time=time();
		
	$mysqli = mysqli_connect("localhost", "root", "", "group_gmmw");
	$input = "INSERT INTO user (UserID, GroupIDFS, Username, Password)"
	. "VALUES ('$UserID', '$GroupIDFS', '$username', '$Password')";
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
		<form>
			<label for="user">Username:</label>
			<input type="text" name="username" id="username" placeholder="nacvor"/></br>   
			<label for="user">Passwort:</label>
			<input type="password" name="password" id="password" placeholder="password"/></br>
			<label for="type">Mitgliedertyp:</label>
			<select name="type" size="1">
				<option>Arbeitszeit</option>
				<option>Schule</option>
				<option>Krank</option>
				<option>Ferien</option>
			</select>
			</br>
			<button type="submit" class="btn btn-send" value="login_button">Anmelden</button>
			<button type="submit" class="btn btn-send" value="logout_button">Abmelden</button>
			</br></br>
		</form>
		<form action="register.php" method="post">
			<input type="submit" name="register_button" value="Registrieren">
		</form>

  </body>
</html>

<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'gmmw');
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	if(isset($_POST['register_button'])) {
		$GroupIDFS = 1;
		$Username = $_POST['username'];
		$Password = $_POST['password'];
		$salt = $_POST['password'];

		$sql = "INSERT INTO user (GroupIDFS, Name, Password, Salt) 
		VALUES ($GroupIDFS, '$Username', '$Password', '$salt')";
		
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
}



 
if($showFormular) {
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
	  <form  method="post">
		<div>
			<label for="name">Username:</label>
			<input type="text" name="username" placeholder="Muster" pattern="[A-Za-z]{0,50}" required>
		</div>
		<div>
			<label for="pwd">Password:</label>
			<input type="password" name="password" placeholder="password" required>
		</div>
		<input type="submit" name="register_button" value="Registrieren">
	  </form>
	</div>
  
  
  
  
<?php } ?> 
  </body>
</html>

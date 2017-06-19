<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'gmmw');

$message = "";
$badmessage = "";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	if(isset($_POST['register_button'])) {
		$GroupIDFS = 1;
		$Username = $_POST['username'];
		$Password = $_POST['password'];
		$salt = $_POST['password'];
		
		$result = $conn->query("SELECT Name FROM user WHERE Name='$Username'");

		if ($result->num_rows !== 0){
			$badmessage = "Name already in use";
		}
		else{
			$sql = "INSERT INTO user (GroupIDFS, Name, Password, Salt) 
			VALUES ($GroupIDFS, '$Username', '$Password', '$salt')";
			
			if ($conn->query($sql) === TRUE) {
				$message = "New record created successfully";
				header("location: ../index.php");
			} 
			else {
				$message = "Error: " . $sql . "<br>" . $conn->error;
			}
		}	
		$conn->close();
	}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GMMW</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/styles.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

 <div class="login">
<form action="register.php" method="post">
			<h1>Register</h1>
			<input type="text" name="username" id="username" <?php if(isset($_POST['username'])){ ?> value="<?=$_POST['username']?>" <?php } ?>" placeholder="username" required="required"/></br>   
			<input type="text" name="password" id="password" placeholder="password"/></br>
			<input type="submit" class="btn btn-primary btn-block btn-large" name="register_button" value="Registrieren">
		</form>
		<?php if($badmessage !== ""){ ?>
			<p style="color:red; text-align:center;"><?= $badmessage ?></p>
		<?php }
		else{ ?>
			<p style="color:green; text-align:center;"><?= $message ?></p>
		<?php 
		} ?>
  </div>
    <script src="js/index.js"></script>

</body>
</html>

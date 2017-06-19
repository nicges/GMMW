	
<?php
session_start();
if(isset($_POST['button_login'])){
	
}
if(isset($_POST['button_logout'])){
	
}
if(isset($_POST['button_register'])){
	
}
if(isset($_POST['day_btn'])){
	
}
if(isset($_POST['month_btn'])){
	
}
if(isset($_POST['year_btn'])){
	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GMMW</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

<div class="login">
		<form method="POST" action="index.php">
			<h1>Zeiterfassung</h1>
			<button name="more" type="submit" class="btn btn-send btn btn-block btn-primary btn-large" value="logout_button">Records</button>
			<br />
			
			<select class="btn btn-send btn btn-primary btn-block btn-large" name="type" size="1"  >
				<option selected>Timetype</option>
				<option>Worktime</option>
				<option>School</option>
				<option>Sick</option>
				<option>Holiday</option>
			</select>
			
			<br/>
			<input type="text" name="username" id="username" placeholder="username"/></br>   
			<input type="password" name="password" id="password" placeholder="password"/></br>
			<br />
			
			<button type="submit" class="btn btn-send btn  btn-primary btn-large" value="login_button">Login</button>
			<button type="submit" class="btn btn-send btn  btn-primary btn-large" value="logout_button">Logout</button>
			<button type="submit" class="btn btn-send btn btn-primary btn-large" value="register_button">Register</button>
		</form>

</div>
  
    <script src="js/index.js"></script>

</body>
</html>

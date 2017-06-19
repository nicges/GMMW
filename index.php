<?php
	if(isset($_POST["register_button"])) {
		
		$ID = 0;
		//$ID = $_POST["ID"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$time=time();
		
	$mysqli = mysqli_connect("localhost", "root", "", "group_gmmw");
	$input = "INSERT INTO user (ID, username, password, time)"
	. "VALUES ('$ID', '$username', '$password', '$time')";

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
		<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<div class="container-fluid">
			 <form action="" method="" class="register-form"> 
		      <div class="row">      
			   <div class="col-md-4 col-sm-4 col-lg-4">
			      <label for="firstName">NAME</label>
			       <input name="firstName" class="form-control" type="text">    
			   </div>            
		      </div>
		      <div class="row">
			   <div class="col-md-4 col-sm-4 col-lg-4">
			      <label for="email">EMAIL</label>
			       <input name="email" class="form-control" type="email">             
			   </div>            
		      </div>
		      <div class="row">
			   <div class="col-md-4 col-sm-4 col-lg-4">
			      <label for="password">PASSWORD</label>
			       <input name="password" class="form-control" type="password">             
			   </div>            
		      </div>
		      <hr>
		      <div class="row">
			   <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
			   <button class="btn btn-default regbutton">Register</button>

			  </div>
			  <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
			   <button class="btn btn-default logbutton">Sign up</button>           
			  </div>          
		      </div>    
		    </form>
		</div>
  	</body>
</html>

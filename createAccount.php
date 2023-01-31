<?php
if (isset($_POST['createUser'])) {
	$myfile = fopen('users.txt', 'a+');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$text = $username.":".$password."\n";

	if (strpos(file_get_contents("users.txt"),$username)!==false && empty($username)!==true  && empty($password)!==true){
		echo "<script>alert(\"This username is unavailable\")</script>";
		exit();
	  }else if
	  (strpos(file_get_contents("users.txt"),$username)==false && empty($username)!==true  && empty($password)!==true){
		fwrite($myfile, $text);
		echo "<script>alert(\"Your account has been created! You are ready to login\")</script>";
	  }
	
	  fclose ($myfile);  

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="createAccount.css">
    <link rel="stylesheet" href="mainpage.css">
    <!-- <script src="website.js"></script> -->
    <script src="myScript.js"></script>
</head>
<body onload="startTime()">
<div class="container">
    <?php include('header.php'); ?>
    <div id="mySidenav">
        <a href="main.php">Home Page</a>
        <!-- <a href="BrowseAvailablePets.php">Browse Available Pets</a> -->
        <a href="find_a_pet_form.php">Find a dog/cat</a>
        <a href="DogCare.php">Dog Care</a>
        <a href="CatCare.php">Cat Care</a>
        <a href="login.php">Have a pet to give away</a>
        <a href="ContactUs.php">Contact Us</a>
        <a href="createAccount.php">Create an account</a>
    </div>
	<div class="content">
	<div class="header">
		<h2>Create Account</h2>
	</div>
	<form id="form" class="form" method="POST">
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" placeholder="e.g.: Aurora17" name="username" id="username" onkeyup=" return validate()"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" placeholder="Password" id="password" name="password" onkeyup=" return validate()"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<!-- <div class="form-control">
			<label for="username">Password check</label>
			<input type="password" placeholder="Password" id="password2"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div> -->
		<button name="createUser">Submit</button>
		<ul>
			<li id='special'>Username and Password must not contain special characters</li>
			<li id='number'>Password must contain at least one digit and letters only</li>
			<li id='leng'>Password must be at least 4 characters long</li>
		</ul>
	</form>
	</div>
</div>
<script>
	var form = document.getElementById('form');
	var username = document.getElementById('username');
	var email = document.getElementById('email');
	var password = document.getElementById('password');
	var password2 = document.getElementById('password2');
	var num = document.getElementById('number');
	var length = document.getElementById('leng');

	function validate() {
		if (password.value.match(/[0-9]/)) {
			num.style.color = 'green';
		}
		else {
			num.style.color = 'red';
		}

		if (username.value.match(/[!\@\#\$\%\^\&\*\(\)\_\-\+\=\?\>\<\.\,]/)) {
			special.style.color = 'red';
		}
		else {
			special.style.color = 'green';
		}

		if (password.value.length < 4) {
			leng.style.color = 'red';
		}
		else {
			leng.style.color = 'green';
		}

		if (password.value.match(/[!\@\#\$\%\^\&\*\(\)\_\-\+\=\?\>\<\.\,]/)) {
			special.style.color = 'red';
		}
		else {
			special.style.color = 'gree';
		}

	}
</script>
</body>
</html>
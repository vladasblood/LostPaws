<?php

@include 'Config.php';
session_start();

if (isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	
	$select = "SELECT * FROM users WHERE Username = '$username' && Password = '$password'";
	$result = mysqli_query($mysqli, $select);
	
	if(mysqli_num_rows($result) > 0){
		$error[] = 'Sorry, User already exists!';
	
	} else {
		$insert = "INSERT INTO users(Username, Password, First_Name, Last_Name, Users_role) VALUES ('$username','$password','$firstname','$lastname', 1)"; //Insert new user
		mysqli_query($mysqli, $insert);
		$_SESSION['Username'] = $username;
		header('location: Home.php');
	}
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign up</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSS -->
	<style>
	</style>
</head>


<!-- Webpage Body Start -->
<body>
	<!-- Header -->
	
	<!-- Main Body -->
	
	<!-- Test Case -->
	<h2>Sign up Test:</h2>
	<form action="Signup.php" method="post">
		</br>
		<label for="user"><b>Username</b></label>
		<input type="text" placeholder="Username" name="user" required>
		<label for="pass"><b>Password</b></label>
		<input type="password" placeholder="Password" name="pass" required>
		<label for="user"><b>First_Name</b></label>
		<input type="text" placeholder="First Name" name="fname" required>
		<label for="user"><b>Last_name</b></label>
		<input type="text" placeholder="Last Name" name="lname" required>
		<input type="submit" name="submit" value="Sign up" class="form-btn">
		<?php
			if(isset($error)){
				foreach($error as $error){
					echo '<span class="error-msg">'.$error.'</span>';
				};
			};
		?>
	</form>
	
	<!-- Footer -->
	<footer></footer>
</body>
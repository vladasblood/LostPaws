<?php

@include 'Config.php';
session_start();

if (isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$select = "SELECT * FROM users WHERE Username = '$username' && Password = '$password'";
	$result = mysqli_query($mysqli, $select);
	
	if(mysqli_num_rows($result) > 0){
		$findRole = "SELECT Users_role FROM users WHERE Username = '$username' && Password = '$password'";
		$queryResult = mysqli_query($mysqli,$findRole);
		$roleResult = $queryResult -> fetch_array()[0];
		//echo $roleResult;
		
		if ($roleResult == '0'){
			//echo 'Admin';
			$_SESSION['Admin'] = $username;
			header('location: Home.php');
		} else if ($roleResult == '1'){
			echo 'User';
			$_SESSION['User'] = $username;
			header('location: Home.php');
		}
	
	} else {
		$error[] = 'Incorrect username or password.';
	}
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
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
	<h2>Login Test:</h2>
	<form action="Login.php" method="post">
		</br>
		<label for="user"><b>Username</b></label>
		<input type="text" placeholder="Username" name="user" required>
		<label for="pass"><b>Password</b></label>
		<input type="password" placeholder="Password" name="pass" required>
		<input type="submit" name="submit" value="Login" class="form-btn">
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
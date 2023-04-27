<?php

@include 'Config.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
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
	
	
	<div>
		<ul>
		<?php
		if(isset($_SESSION['Admin'])){
			echo '<h2>Admin</h2>';
			echo '<li><a href="Lost.php">Lost Pets</a></li>';
			echo '<li><a href="Found.php">Found Pets</a></li>';
			echo '<li><a href="Adoption.php">Adoption</a></li>';
			echo '<li><a href="Logout.php">Logout</a></li>';
		}
		else if(isset($_SESSION['User'])){
			echo '<h2>User</h2>';
			echo '<li><a href="Lost.php">Lost Pets</a></li>';
			echo '<li><a href="Found.php">Found Pets</a></li>';
			echo '<li><a href="Adoption.php">Adoption</a></li>';
			echo '<li><a href="Logout.php">Logout</a></li>';
		} else {
			echo '<h2>No Login</h2>';
			echo '<li><a href="Login.php">Login</a></li>';
			echo '<li><a href="Signup.php">Sign up</a></li>';
			echo '<li><a href="Lost.php">Lost Pets</a></li>';
			echo '<li><a href="Found.php">Found Pets</a></li>';
			echo '<li><a href="Adoption.php">Adoption</a></li>';
		}
		?>	
		</ul>
	</div>
	
	
	<!-- Footer -->
	<footer></footer>
</body>
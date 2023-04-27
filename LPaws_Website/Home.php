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
	<li><a href="Logout.php">Logout</a></li>
	
	<div>
		<ul>
		<?php
		if(isset($_SESSION['Admin'])){
			echo '<h2>Admin</h2>';
			echo '<li>Add Navigation to Admin pages here</li>';
			echo '<li>Add Navigation to Admin pages here</li>';
			echo '<li>Add Navigation to Admin pages here</li>';
		}
		else if(isset($_SESSION['User'])){
			echo '<h2>User</h2>';
			echo '<li>Add Navigation to User pages here</li>';
			echo '<li>Add Navigation to User pages here</li>';
			echo '<li>Add Navigation to User pages here</li>';
		} else {
			echo '<h2>No Login</h2>';
			echo '<li>Add Navigation to Login pages here</li>';
		}
		?>	
		</ul>
	</div>
	
	
	<!-- Footer -->
	<footer></footer>
</body>
<?php

@include 'config.php'; //Connect to server
session_start(); //starts the session

if($_SESSION['Admin']){ //checks if user is logged in
}
else{
    header("location: Home.php"); // redirects if user is not logged in
}

if(isset($_GET['moveid']))
{
    $moveid = $_GET['moveid'];
	
	$moveQuery = mysqli_query($mysqli, "SELECT * FROM found_pets WHERE Find_Pets_id='$moveid'");
	$getQuery = mysqli_fetch_array($moveQuery);
	
	$moveType = $getQuery['Type'];
	$moveBreed = $getQuery['Breed'];
	$moveGender = $getQuery['Gender'];
	$moveColor = $getQuery['Color'];
	$moveRoles = $getQuery['Roles_Found_Pets'];
	
	
	mysqli_query($mysqli, "INSERT INTO adopt_pets VALUES('$moveid'+100, '$moveType', '$moveBreed', '$moveGender', '$moveColor', '$moveRoles')");
	mysqli_query($mysqli, "DELETE FROM found_pets WHERE Find_Pets_id='$moveid'");
	echo"<script>alert('Successfully moved')</script>";
	
    header('location:'.$_SERVER['HTTP_REFERER']);
}

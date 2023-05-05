<?php

@include 'config.php'; //Connect to server
session_start(); //starts the session

if(isset($_POST['submit'])) //Added an if to keep the page secured
{
	if (isset($_SESSION['Admin'])){
		$rolesAdopt = $_SESSION['Admin'];
	}else{
		
	}
	
	$typeAdopt = ($_POST['Type']);
	$breedAdopt = ($_POST['Breed']);
	$genderAdopt = ($_POST['Gender']);
	$colorAdopt = ($_POST['Color']);

	// SQL Query
    mysqli_query($mysqli, "INSERT INTO adopt_pets (Type, Breed, Gender, Color, Roles_Adopt_Pets) VALUES ('$typeAdopt','$breedAdopt','$genderAdopt', '$colorAdopt','$rolesAdopt')");
    header('location:'.$_SERVER['HTTP_REFERER']);
}

<?php

@include 'config.php'; //Connect to server
session_start(); //starts the session

if(isset($_POST['submit'])) //Added an if to keep the page secured
{
	if (isset($_SESSION['Admin'])){
		$rolesLost = $_SESSION['Admin'];
	}else if (isset($_SESSION['User'])){
		$rolesLost = $_SESSION['User'];
	}else{
		
	}
	
	$typeLost = ($_POST['Type']);
	$breedLost = ($_POST['Breed']);
	$nameLost = ($_POST['Name']);
	$genderLost = ($_POST['Gender']);
	$colorLost = ($_POST['Color']);
	$locationLost = ($_POST['Last_Location']);
	$dateInput = ($_POST['Last_Date']);
	$dateLost = date('Y-m-d H:i:s', strtotime($dateInput));
	$infoLost = ($_POST['Additional_Information']);
	$imageLost = ($_POST['Upload_Photo']);
	
	$chipLost = ($_POST['Microchip']);

	// SQL Query
    mysqli_query($mysqli, "INSERT INTO lost_pets (Type, Breed, Name, Gender, Color, Last_Location, DateTime_LastSeen, Additional_Information, Upload_Photo, Roles_Lost_Pets, Microchip) VALUES ('$typeLost','$breedLost', '$nameLost','$genderLost', '$colorLost','$locationLost','$dateLost', '$infoLost', '$imageLost','$rolesLost','$chipLost')");
    header('location:'.$_SERVER['HTTP_REFERER']);
}

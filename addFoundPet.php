<?php

@include 'config.php'; //Connect to server
session_start(); //starts the session

if(isset($_POST['submit'])) //Added an if to keep the page secured
{
	$typeFound = ($_POST['Type']);
	$breedFound = ($_POST['Breed']);
	$nameFound = ($_POST['Name']);
	$genderFound = ($_POST['Gender']);
	$colorFound = ($_POST['Color']);
	$locationFound = ($_POST['Location_Found']);
	$dateInput = ($_POST['Date_Found']);
	$dateFound = date('Y-m-d H:i:s', strtotime($dateInput));
	$infoFound = ($_POST['Additional_Information']);
	$imageFound = ($_POST['Upload_Photo']);
	$rolesFound = ($_POST['Roles_Found_Pets']);
	$chipFound = ($_POST['Microchip']);

	// SQL Query
    mysqli_query($mysqli, "INSERT INTO found_pets (Type, Breed, Name, Gender, Color, Location_Found, DateTime_Found, Additional_Information, Upload_Photo, Roles_Found_Pets, Microchip) VALUES ('$typeFound','$breedFound', '$nameFound','$genderFound', '$colorFound','$locationFound','$dateFound', '$infoFound', '$imageFound','$rolesFound','$chipFound')");
    header("location: ../CS155-2L/Found.php");
}

?>
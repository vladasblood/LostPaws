<?php

@include 'config.php'; //Connect to server
session_start(); //starts the session

if($_SESSION['Admin']){ //checks if user is logged in
}
else{
    header("location: Home.php"); // redirects if user is not logged in
}

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    mysqli_query($mysqli, "DELETE FROM adopt_pets WHERE Adopt_Pets_id='$id'");
    header('location:'.$_SERVER['HTTP_REFERER']);
}

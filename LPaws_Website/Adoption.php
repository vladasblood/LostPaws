<?php

@include 'Config.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Strays Adoption</title>
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
<h2>Test:</h2>
	<?php
	// Database file
	require_once 'Config.php';
	
	//Select Query request
	$sql = "SELECT * FROM adopt_pets";
	if($result = $mysqli->query($sql)){
		if($result->num_rows < 1){
			// Data from Database shown unless empty
			echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
		} else {
			//Table Head
			echo '<table>';
                echo "<thead>";
                  echo "<tr>";
                    echo '<th>Pet ID</th>';
                    echo "<th>Type</th>";
                    echo "<th>Breed</th>";
                    echo "<th>Gender</th>";
                    echo "<th>Color</th>";
                    echo "<th>Posted By</th>";
                  echo "</tr>";
                echo "</thead>";
			//Table Body
			
				echo "<tbody>";
					while($row = $result -> fetch_array()){
						$updateID = $row['Adopt_Pets_id'];
						echo "<tr>";
							echo "<td>". $row['Adopt_Pets_id']. "</td>";
							echo "<td>". $row['Type']. "</td>";
							echo "<td>". $row['Breed']. "</td>";
							echo "<td>". $row['Gender']. "</td>";
							echo "<td>". $row['Gender']. "</td>";
							echo "<td>". $row['Color']. "</td>";
							echo "<td>". $row['Roles_Adopt_Pets']. "</td>";
						if (isset($_SESSION['Admin'])){
							echo "<td><button class='delete'><a href='deleteAdopt.php?deleteid=".$row['Adopt_Pets_id']."'>Delete</a></button></td>";
						}
						echo "</tr>";
					}
				echo "</tbody>";
			echo "</table>";
			//Free result set 
			$result -> free();
		}
	} else {
		echo "Oops! Something went wrong. Please try again later.";
	}
	//Close Database connection 
	$mysqli -> close();
	?>
	
	</br>
	
	<?php
	if (isset($_SESSION['Admin'])){?>
	<div class="form-container" id="form-container-2">
		<form action="adminAddAdoptPet.php" method="post">
			<h4>Input Pet Adoption Information</h4>
			<input type="text" placeholder="Type" name="Type" required></br>
			<input type="text" placeholder="Breed" name="Breed" required></br>
			<select placeholder="Gender" name="Gender" required>
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select></br>
			<input type="text" placeholder="Color" name="Color" required></br>
			<input type="submit" name="submit" value="Add" class="form-btn"></br>
		</form>
	</div>
		
	<?php
	} else {
		
	}?>
	<!-- Footer -->
	<footer></footer>
</body>
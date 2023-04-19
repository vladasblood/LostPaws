<?php

@include 'Config.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Missing Pets</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSS -->
	<style>
	body { 
		margin: 5;
		background-color: #FFFFFF;
		font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
	}

	#form-container-2 {
		width: 400px; 
	}
	
	.body .form-container{ 
	  padding: 50px; 
	  box-shadow: 10px 10px 10px rgba(0,0,0,.5); 
	  background: #ffd4c4; 
	  width: 1000px; 
	  display: inline-block;
	  margin-left: 20px;
	}
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
	$sql = "SELECT * FROM lost_pets";
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
                    echo "<th>Name</th>";
                    echo "<th>Gender</th>";
                    echo "<th>Color</th>";
                    echo "<th>Last Location</th>";
                    echo "<th>Time Last Seen</th>";
                    echo "<th>Additional Information</th>";
                    echo "<th>Photo</th>";
                    echo "<th>Microchip</th>";
                  echo "</tr>";
                echo "</thead>";
			//Table Body
			
				echo "<tbody>";
					while($row = $result -> fetch_array()){
						$updateID = $row['lost_pets_id'];
						echo "<tr>";
							echo "<td>". $row['lost_pets_id']. "</td>";
							echo "<td>". $row['Type']. "</td>";
							echo "<td>". $row['Breed']. "</td>";
							echo "<td>". $row['Name']. "</td>";
							echo "<td>". $row['Gender']. "</td>";
							echo "<td>". $row['Color']. "</td>";
							echo "<td>". $row['Last_Location']. "</td>";
							echo "<td>". $row['DateTime_LastSeen']. "</td>";
							echo "<td>". $row['Additional_Information']. "</td>";
							echo "<td>". $row['Upload_Photo']. "</td>";
							echo "<td>". $row['Microchip']. "</td>";
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
	
	<div class="form-container" id="form-container-2">
		<form action="addLostPet.php" method="post">
			<h4>Input Lost Pet</h4>
			<input type="text" placeholder="Type" name="Type" required></br>
			<input type="text" placeholder="Breed" name="Breed" required></br>
			<input type="text" placeholder="Name" name="Name" required></br>
			<select placeholder="Gender" name="Gender" required>
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select></br>
			<input type="text" placeholder="Color" name="Color" required></br>
			<input type="text" placeholder="Last Seen Location" name="Last_Location" required></br>
			<input type="datetime-local" placeholder="Time Last Seen" name="Last_Date" required></br>
			<textarea name="Additional_Information" rows="10" cols="30" required>Additional Information</textarea></br>
			<input type="text" placeholder="Image URL" name="Upload_Photo" required></br>
			<!-- Roles Lost Pets temporary until I fix login
				should automatically default to either Username of regular user or Admin-->
			<input type="text" placeholder="User Role" name="Roles_Lost_Pets" required></br>
			<input type="text" placeholder="Microchip Information" name="Microchip" required></br>
			<input type="submit" name="submit" value="Add" class="form-btn"></br>
		</form>
	</div>
	
	<!-- Footer -->
	<footer></footer>
</body>
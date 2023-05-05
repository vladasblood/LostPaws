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
		body {
			margin: 5;
			background-color: #FFFFFF;
			font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
		}

		#form-container-2 {
			width: 800px;
			background-color: white;
			text-align: center;
			margin: auto;
			border-radius: 20px;
			border: 1px solid #cac9c8;
		}

		.body .form-container {
			padding: 50px;
			box-shadow: 10px 10px 10px rgba(0, 0, 0, .5);
			background: #ffd4c4;
			width: 1000px;
			display: inline-block;
			margin-left: 20px;
		}
	</style>
	<style data-tag="reset-style-sheet">
		html {
			line-height: 1.15;
		}

		body {
			margin: 0;
		}

		* {
			box-sizing: border-box;
			border-width: 0;
			border-style: solid;
		}

		p,
		li,
		ul,
		pre,
		div,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		figure,
		blockquote,
		figcaption {
			margin: 0;
			padding: 0;
		}

		button {
			background-color: transparent;
		}

		button,
		input,
		optgroup,
		select,
		textarea {
			font-family: inherit;
			font-size: 100%;
			line-height: 1.15;
			margin: 0;
		}

		button,
		select {
			text-transform: none;
		}

		button,
		[type="button"],
		[type="reset"],
		[type="submit"] {
			-webkit-appearance: button;
		}

		button::-moz-focus-inner,
		[type="button"]::-moz-focus-inner,
		[type="reset"]::-moz-focus-inner,
		[type="submit"]::-moz-focus-inner {
			border-style: none;
			padding: 0;
		}

		button:-moz-focus,
		[type="button"]:-moz-focus,
		[type="reset"]:-moz-focus,
		[type="submit"]:-moz-focus {
			outline: 1px dotted ButtonText;
		}

		a {
			color: inherit;
			text-decoration: inherit;
		}

		input {
			padding: 2px 4px;
		}

		img {
			display: block;
		}

		html {
			scroll-behavior: smooth
		}
	</style>
	<style data-tag="default-style-sheet">
		html {
			font-family: Inter;
			font-size: 16px;
		}

		body {
			font-weight: 400;
			font-style: normal;
			text-decoration: none;
			text-transform: none;
			letter-spacing: normal;
			line-height: 1.15;
			color: var(--dl-color-gray-black);
			background-color: var(--dl-color-gray-white);

		}
	</style>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" data-tag="font" />
	<link rel="stylesheet" href="/LPaws_CSS_Styles/adopt-style.css" />
	<link rel="stylesheet" href="/LPaws_CSS_Styles/lost-page-style.css" />
	<link rel="stylesheet" href="/LPaws_CSS_Styles/frame2.css" />
	<link rel="stylesheet" href="/LPaws_CSS_Styles/frame4.css" />

	<style>
		body {
			margin: 5;
			background-color: #f7f5f0;
			font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
		}

		/* #form-container-2 {
		width: 400px; 
	} */

		.body .form-container {
			padding: 50px;
			box-shadow: 10px 10px 10px rgba(0, 0, 0, .5);
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
	<section>
		<section id="barnav">
			<nav class="navbar">
				<ul id="ulnavi">
					<?php
					if (isset($_SESSION['Admin'])) {
						// echo '<h2>Admin</h2>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Home.php">Home</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Lost.php">Lost Pets</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Found.php">Found Pets</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Adoption.php">Adoption</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Logout.php">Logout</a></li></div>';
					} else if (isset($_SESSION['User'])) {
						// echo '<h2>User</h2>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Home.php">Home</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Lost.php">Lost Pets</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Found.php">Found Pets</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Adoption.php">Adoption</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Logout.php">Logout</a></li></div>';
					} else {
						// echo '<h2>No Login</h2>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Home.php">Home</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Login.php">Login</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Signup.php">Sign up</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Lost.php">Lost Pets</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Found.php">Found Pets</a></li></div>';
						echo '<div id="nav-item-home-container"><li class="nav-item" id="nav-item-home"><a href="Adoption.php">Adoption</a></li></div>';
					}
					?>
				</ul>
			</nav>
		</section>
	</section>

	<div class="frame1-container">
		
			<img src="/LPaws_Images/Adoption1.png" alt="adopt_pet_cover" class="frame2-rectangle8" />

			<div class="frame2-group37">
				<span class="frame4-text008"><span>Adopt Pets</span></span>
			</div>
		
	</div>

	<!-- Main Body -->
	<div id='table-style'>

		<!-- Test Case -->
		<!-- <h2>Test:</h2> -->
		<?php
		// Database file
		require_once 'Config.php';

		//Select Query request
		$sql = "SELECT * FROM adopt_pets";
		if ($result = $mysqli->query($sql)) {
			if ($result->num_rows < 1) {
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
				while ($row = $result->fetch_array()) {
					$updateID = $row['Adopt_Pets_id'];
					echo "<tr>";
					echo "<td>" . $row['Adopt_Pets_id'] . "</td>";
					echo "<td>" . $row['Type'] . "</td>";
					echo "<td>" . $row['Breed'] . "</td>";
					echo "<td>" . $row['Gender'] . "</td>";
					echo "<td>" . $row['Gender'] . "</td>";
					echo "<td>" . $row['Color'] . "</td>";
					echo "<td>" . $row['Roles_Adopt_Pets'] . "</td>";
					if (isset($_SESSION['Admin'])) {
						echo "<td><button class='delete'><a href='deleteAdopt.php?deleteid=" . $row['Adopt_Pets_id'] . "'>Delete</a></button></td>";
					}
					echo "</tr>";
				}
				echo "</tbody>";
				echo "</table>";
				//Free result set 
				$result->free();
			}
		} else {
			echo "Oops! Something went wrong. Please try again later.";
		}
		//Close Database connection 
		$mysqli->close();
		?>

	</div>


	</br>






	<?php
	if (isset($_SESSION['Admin'])) { ?>

		<div class="form-container" id="form-container-2">
			<form action="adminAddAdoptPet.php" method="post">
				<h4>Adopt Pet Form</h4>
				<div class="flex-container">
					<div class="flex-child">
						<h5>Type</h5>
						<input type="text" placeholder="Type" name="Type" required></br>

						<h5>Breed</h5>
						<input type="text" placeholder="Breed" name="Breed" required></br>
					</div>

					<div class="flex-child">
						<h5>Gender</h5>
						<select placeholder="Gender" name="Gender" required>
							<option value="M">Male</option>
							<option value="F">Female</option>
						</select></br>

						<h5>Color</h5>
						<input type="text" placeholder="Color" name="Color" required></br>

					</div>
				</div>
				<br>
				<br>
				<input type="submit" name="submit" value="Add" class="form-btn" id="add-bttn"></br>

			</form>
		</div>



	<?php
	} else {
	} ?>
	<!-- Footer -->
	<footer></footer>
</body>
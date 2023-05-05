<?php

@include 'Config.php';
session_start();

if (isset($_POST['submit'])) {
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];

	$select = "SELECT * FROM users WHERE Username = '$username' && Password = '$password'";
	$result = mysqli_query($mysqli, $select);

	if (mysqli_num_rows($result) > 0) {
		$error[] = 'Sorry, User already exists!';
	} else {
		$insert = "INSERT INTO users(Username, Password, First_Name, Last_Name, Users_role) VALUES ('$username','$password','$firstname','$lastname', 1)"; //Insert new user
		mysqli_query($mysqli, $insert);
		$_SESSION['Username'] = $username;
		header('location: Home.php');
	}
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign up</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
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
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" data-tag="font" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
	<link rel="stylesheet" href="../LPaws_CSS_Styles/style.css" />
	<link rel="stylesheet" href="/LPaws_CSS_Styles/login-signup-style.css" />
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

	<!-- Main Body -->
	<form action="Signup.php" method="post">
		<div>
			<link href="/LPaws_CSS_Styles/sign-up.css" rel="stylesheet" />

			<div class="sign-up-container">
				<div class="sign-up-sign-up">
					<div class="sign-up-frame1">
						<img src="/LPaws_Images/background2689-jqzb-2000w.png" alt="Background2689" class="sign-up-background" />
						<img src="/LPaws_Images/rectangle72689-4c4k-500h.png" alt="Rectangle72689" class="sign-up-rectangle7" />
					</div>
					<div class="sign-up-group46">

						<span class="sign-up-text14"><span>Sign Up</span></span>

						<div class="sign-up-color-group">
							<img src="/LPaws_Images/rectangle162681-2h33-200h.png" alt="Rectangle162681" class="sign-up-rectangle161" />
							<span class="sign-up-text06"><span>Username</span></span>
							<span class="sign-up-text08"><input type="text" placeholder="Username" name="user" required></span>

						</div>
						<div class="sign-up-group39">
							<img src="/LPaws_Images/rectangle162681-jy6w-200h.png" alt="Rectangle162681" class="sign-up-rectangle162" />
							<span class="sign-up-text10"><span>First Name</span></span>
							<span class="sign-up-text08"><input type="text" placeholder="First Name" name="fname" required></span>
						</div>

						<div class="sign-up-group40">
							<img src="/LPaws_Images/rectangle162681-jy6w-200h.png" alt="Rectangle162681" class="sign-up-rectangle162" />
							<span class="sign-up-text10"><span>Last Name</span></span>
							<span class="sign-up-text08"><input type="text" placeholder="Last Name" name="lname" required></span>
						</div>

						<div class="sign-up-name-group">
							<img src="/LPaws_Images/rectangle162681-hqw5-200h.png" alt="Rectangle162681" class="sign-up-rectangle16" />
							<span class="sign-up-text02"><span>Password</span></span>
							<span class="sign-up-text08"><input type="password" placeholder="Password" name="pass" required></span>
						</div>

						<div class="sign-up-group16">
							<span class="sign-up-text"><input type="submit" name="submit" value="Sign up" class="form-btn"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- Test Case -->
	<h2>Sign up Test:</h2>
	<form action="Signup.php" method="post">
		</br>
		<label for="user"><b>Username</b></label>
		<input type="text" placeholder="Username" name="user" required>
		<label for="pass"><b>Password</b></label>
		<input type="password" placeholder="Password" name="pass" required>
		<label for="user"><b>First_Name</b></label>
		<input type="text" placeholder="First Name" name="fname" required>
		<label for="user"><b>Last_name</b></label>
		<input type="text" placeholder="Last Name" name="lname" required>
		<input type="submit" name="submit" value="Sign up" class="form-btn">
		<?php
		if (isset($error)) {
			foreach ($error as $error) {
				echo '<span class="error-msg">' . $error . '</span>';
			};
		};
		?>
	</form>

	<!-- Footer -->
	<footer></footer>
</body>
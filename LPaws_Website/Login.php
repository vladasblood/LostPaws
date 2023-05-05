<?php

@include 'Config.php';
session_start();

if (isset($_POST['submit'])) {
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$select = "SELECT * FROM users WHERE Username = '$username' && Password = '$password'";
	$result = mysqli_query($mysqli, $select);

	if (mysqli_num_rows($result) > 0) {
		$findRole = "SELECT Users_role FROM users WHERE Username = '$username' && Password = '$password'";
		$queryResult = mysqli_query($mysqli, $findRole);
		$roleResult = $queryResult->fetch_array()[0];
		//echo $roleResult;

		if ($roleResult == '0') {
			//echo 'Admin';
			$_SESSION['Admin'] = $username;
			header('location: Home.php');
		} else if ($roleResult == '1') {
			echo 'User';
			$_SESSION['User'] = $username;
			header('location: Home.php');
		}
	} else {
		$error[] = 'Incorrect username or password.';
	}
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
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
	<link rel="stylesheet" href="../LPaws_CSS_Styles/login-signup-style.css" />
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
	<div>
		<link href="/LPaws_CSS_Styles/login-form.css" rel="stylesheet" />

		<div class="login-form-container">
			<div class="login-form-login-form">
				<div class="login-form-frame1">
					<img src="/LPaws_Images/background2684-9g78-2000w.png" alt="Background2684" class="login-form-background" />
					<img src="/LPaws_Images/rectangle72685-6h45-500h.png" alt="Rectangle72685" class="login-form-rectangle7" />
				</div>
				<div class="login-form-group46">
					<span class="login-form-text12"><span>Log in</span></span>
					<div class="login-form-name-group">
						<img src="/LPaws_Images/rectangle162682-t4ys-200h.png" alt="Rectangle162682" class="login-form-rectangle16" />
						<span class="login-form-text02"><span>Password</span></span>
					</div>
					<form action="Login.php" method="post">
						<div class="login-form-color-group">
							<img src="/LPaws_Images/rectangle162683-255i-200h.png" alt="Rectangle162683" class="login-form-rectangle161" />
							<span class="login-form-text04"><span>Username</span></span>
							<span class="login-form-text06"><input type="text" placeholder="Username" name="user" required></span>
							<span class="login-form-text08"><span>Password</span></span>
							<span class="login-form-text08"><span><input type="password" placeholder="Password" name="pass" required></span></span>
						</div>
						<div class="login-form-group16">
							<span class="login-form-text"><input type="submit" name="submit" value="Login" class="form-btn"></span>
						</div>
						<?php
						if (isset($error)) {
							foreach ($error as $error) {
								echo '<span class="error-msg">' . $error . '</span>';
							};
						};
						?>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Test Case -->
	<!-- <h2>Login Test:</h2>
	<form action="Login.php" method="post">
		</br>
		<label for="user"><b>Username</b></label>
		<input type="text" placeholder="Username" name="user" required>
		<label for="pass"><b>Password</b></label>
		<input type="password" placeholder="Password" name="pass" required>
		<input type="submit" name="submit" value="Login" class="form-btn">
		<?php
		// if (isset($error)) {
		// 	foreach ($error as $error) {
		// 		echo '<span class="error-msg">' . $error . '</span>';
		// 	};
		// };
		?>
	</form> -->

	<!-- Footer -->
	<footer></footer>
</body>
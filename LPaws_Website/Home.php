<?php

@include 'Config.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
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
		<link href="../LPaws_CSS_Styles/frame1.css" rel="stylesheet" />

		<div class="frame1-container">
			<div class="frame1-frame1">
				<img src="../LPaws_Images/background1535-598a.svg" alt="Background1535" class="frame1-background" />
				<img src="../LPaws_Images/rectangle82016-yzlh-2000w.png" alt="Rectangle82016" class="frame1-rectangle8" />
				<img src="../LPaws_Images/rectangle71537-7dsn-500h.png" alt="Rectangle71537" class="frame1-rectangle7" />
				<img src="../LPaws_Images/image11538-ffjg-800h.png" alt="image11538" class="frame1-image1" />
				<div class="frame1-group7">
					<img src="../LPaws_Images/image21531-flad-700h.png" alt="image21531" class="frame1-image2" />
					<div class="frame1-group4">
						<span class="frame1-text">
							<span>
								Are you ready to add a new furry family member to your
								household? Our Adoption Page is the perfect place to find your
								perfect pet match. Each pet on our page has a comprehensive
								profile, including its name, breed, age, and personality
								traits. With our user-friendly search and filtering system,
								you can easily browse all the pets available for adoption and
								find the one that melts your heart. By adopting from our
								center, you will bring joy and love into your home and give
								these deserving pets a second chance at a happy life.
							</span>
						</span>
						<span class="frame1-text02"><span>Adoption</span></span>
						<div class="frame1-group3">
							<span class="frame1-text04"><span>Learn More</span></span>
						</div>
					</div>
					<div class="frame1-group5">
						<span class="frame1-text06">
							<span>
								Are you trying to find your lost pet? Look no further than our
								“Found Pets” page! This page showcases all the adorable cats
								and dogs currently residing at the site, waiting to be
								reunited with their owners. Each pet is listed with their
								characteristics like name, color, breed, making it easy to
								find your lost pet here. Please help us give these furry
								friends their own loving homes.
							</span>
						</span>
						<span class="frame1-text08"><span>Found Pets</span></span>
						<div class="frame1-group2">
							<span class="frame1-text10"><span>Learn More</span></span>
						</div>
					</div>
					<div class="frame1-group6">
						<span class="frame1-text12">
							<span>
								If your beloved pet has gone missing, our “Lost Pets” page is
								where to turn for help. Here, you’ll find a comprehensive list
								of all the pets reported missing by our community of devoted
								pet owners. You can quickly scan the list to check if your pet
								is among them or lend a helping hand by sharing information
								about a lost pet. Our “Lost Pets” page is vital in reuniting
								pets with their owners and comforting anxious pet parents.
							</span>
						</span>
						<span class="frame1-text14"><span>Lost Pets</span></span>
						<div class="frame1-group1">
							<span class="frame1-text16"><span>Learn More</span></span>
						</div>
					</div>
				</div>
				<div class="frame1-about-us">
					<span class="frame1-text18"><span>ABOUT US</span></span>
					<span class="frame1-text20">
						<span class="frame1-text21">
							<span>
								Welcome to Lost Paws, your go-to online platform for lost and
								found pets! Our mission is to help reunite missing pets with
								their loving owners and provide a safe haven for those who are
								lost and without a home. We are a team of passionate pets
								lovers who believe that every pet deserves a chance to be with
								their family and to live a happy and healthy life. With our
								dedication and commitment, we have created a website that
								offers a unique and effective way to find lost pets and
								provide a new home for those in need.
							</span>
							<br />
							<span></span>
							<br />
							<span>
								We also provide a safe and secure environment for pet owners
								to post information about their lost pets and for those who
								have found a pet to report it on our website. At LostPaws, we
								understand the love and bond between a pet and their owner,
								and we will do everything we can to help them find their way
								back home. Join us in our mission to create a world where no
								pet is left behind, and every lost pet can find its way back
								home.
							</span>
							<br />
							<span></span>
							<br />
							<span></span>
						</span>
					</span>
				</div>
				<div class="frame1-logo">
					<img src="../LPaws_Images/logo1532-33r9.svg" alt="Logo1532" class="frame1-logo1" />
					<img src="../LPaws_Images/text1532-hsui-200h.png" alt="Text1532" class="frame1-text31" />
				</div>
				<div class="frame1-margin">
					<img src="../LPaws_Images/line11539-5sfq.svg" alt="Line11539" class="frame1-line1" />
					<img src="../LPaws_Images/line21531-rhsr.svg" alt="Line21531" class="frame1-line2" />
				</div>
			</div>
		</div>
	</div>

	<!-- Test Case -->
	<!-- <div>
		<ul>
			<?php
			// if (isset($_SESSION['Admin'])) {
			// 	echo '<h2>Admin</h2>';
			// 	echo '<li><a href="Lost.php">Lost Pets</a></li>';
			// 	echo '<li><a href="Found.php">Found Pets</a></li>';
			// 	echo '<li><a href="Adoption.php">Adoption</a></li>';
			// 	echo '<li><a href="Logout.php">Logout</a></li>';
			// } else if (isset($_SESSION['User'])) {
			// 	echo '<h2>User</h2>';
			// 	echo '<li><a href="Lost.php">Lost Pets</a></li>';
			// 	echo '<li><a href="Found.php">Found Pets</a></li>';
			// 	echo '<li><a href="Adoption.php">Adoption</a></li>';
			// 	echo '<li><a href="Logout.php">Logout</a></li>';
			// } else {
			// 	echo '<h2>No Login</h2>';
			// 	echo '<li><a href="Login.php">Login</a></li>';
			// 	echo '<li><a href="Signup.php">Sign up</a></li>';
			// 	echo '<li><a href="Lost.php">Lost Pets</a></li>';
			// 	echo '<li><a href="Found.php">Found Pets</a></li>';
			// 	echo '<li><a href="Adoption.php">Adoption</a></li>';
			// }
			?>
		</ul>
	</div> -->


	<!-- Footer -->
	<footer></footer>
</body>
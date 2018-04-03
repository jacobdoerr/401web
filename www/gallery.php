<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();
?>

<html>
	<head>
		<title> JTD edits </title>
		<link href="style.css" rel="stylesheet" />
		<link rel="shortcut icon" type="image/png" href="images/favicon1.png" />
	</head>

	<body>
		<div class="banner">
			<div >
				<img class="logo" src="images/jtdeditsLogo.png" />
			</div>
			<div class="navbar">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="purchasing.php">Purchasing</a>
					</li>
					<li>
						<a id="currentPage" href="gallery.php">Gallery</a>
					</li>
					<li>
						<a href="login.php">Log In</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div id="pageTitle">
				Gallery
			</div>
			<div id="gallerycontent">
				<img class="edits" src="images/gallery/Kobe.jpg"/>
				<img class="edits" src="images/gallery/KendrickLamar.jpg"/>
				<img class="edits" src="images/gallery/ThoseWhoDontJump.jpg"/>
				<img class="edits" src="images/gallery/Mayweather.jpg"/>
				<img class="edits" src="images/gallery/EatSleepRideRepeat.jpg"/>
				<img class="edits" src="images/gallery/ZenCowboySlim.jpg"/>
			</div>
		</div>
		<div id="footer">
			<li class="first">&#169;2018 Jacob Doerr</li>
			<li>Web Development 401</li>
			<li>jacobdoerr@u.boisestate.edu</li>
		</div>

	</body>
</html>

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
			<div class="logo">
				<img class="logo" src="images/jtdeditsLogo.png" />
			</div>
			<div class = "navbar">
				<ul>
					<li>
						<a id="currentPage"  href="index.php">Home</a>
					</li>
					<li>
						<a href="purchasing.php">Purchasing</a>
					</li>
					<li>
						<a href="gallery.php">Gallery</a>
					</li>
					<li>
						<a href="login.php">Log In</a>
					</li>
				</ul>
			</div>
			<div class="loggedin" >
				<div>Currently Logged In </div>
				<div>Username </div>
			</div>
		</div>
		<div class="content">
			<div id="pageTitle">
				Home
			</div>
			<div>
				This Page will inlcude information about what the website is for and about the author in the future.
			</div>
		</div>
		<div id="footer">
			<li class="first">&#169;2018 Jacob Doerr</li>
			<li>Web Development 401</li>
			<li>jacobdoerr@u.boisestate.edu</li>
		</div>

	</body>
</html>

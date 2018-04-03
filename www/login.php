<?php
session_start();
require_once 'Dao.php';
$dao= new Dao();
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
			<div class ="navbar">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="purchasing.php">Purchasing</a>
					</li>
					<li>
						<a href="gallery.php">Gallery</a>
					</li>
					<li>
						<a id="currentPage" href="login.php">Log In</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div id="pageTitle">
				Log In
			</div>
			<?php
				if (isset($_SESSION['messages'])){
					foreach($_SESSION['messages'] as $message){
						echo "<div> $message </div>";
					}
				}
				unset($_SESSION['presets']);
				unset($_SESSION['messages']);
			?>
			<form action="loginhandler.php" method="POST">
				<div>Username</div>
				<div><input type="text" name="username"/></div>
				<div>Password</div>
				<div><input type="text" name="password"/></div>
				<div><input type="submit" value="Submit"></div>
			</form>
			<div>Don't Have An Account? Register Below!</div>
			<form action="registration.php">
				<div><input type="submit" value="Register" href="registration.php"/></div>
			</form>
		</div>
		<div id="footer">
			<li class="first">&#169;2018 Jacob Doerr</li>
			<li>Web Development 401</li>
			<li>jacobdoerr@u.boisestate.edu</li>
		</div>

	</body>
</html>

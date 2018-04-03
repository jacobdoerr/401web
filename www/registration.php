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
						<a href="login.php">Log In</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div id="pageTitle">
				User Registration
			</div>
			<?php
				if(isset($_SESSION['messages'])){
					foreach($_SESSION['messages'] as $message){
						echo "<div> $message </div>";
					}
				}
				$presets = array();
				if (isset($_SESSION['presets'])){
					$presets = array_shift($_SESSION['presets']);
				}
				unset($_SESSION['presets']);
				unset($_SESSION['messages']);
			?>
			<form action="registrationhandler.php" method="POST">
				<div>Choose A Username</div>
				<div><input value="<?php echo isset($presets['username']) ? $presets['username'] : ''; ?>" type="text" name="username"/></div>
				<div>Choose A Password</div>
				<div><input value="<?php echo isset($presets['password']) ? $presets['password'] : ''; ?>" type="text" name="password"/></div>
				<div>Email Address</div>
				<div><input value="<?php echo isset($presets['email']) ? $presets['email'] : ''; ?>" type="text" name="email"/></div>
				<div><input type="submit" value="submit"></div>
			</form>
		</div>
		<div id="footer">
			<li class="first">&#169;2018 Jacob Doerr</li>
			<li>Web Development 401</li>
			<li>jacobdoerr@u.boisestate.edu</li>
		</div>

	</body>
</html>

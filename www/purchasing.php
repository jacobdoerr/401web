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
						<a href="index.php">Home</a>
					</li>
					<li>
						<a id="currentPage" href="purchasing.php">Purchasing</a>
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
				Purchasing
			</div>
			<?php
				if(isset($_SESSION['messages'])){
					foreach($_SESSION['messages'] as $message){
						echo "<div> $message </div>";
					}
				}
				$presets = array();
				if(isset($_SESSION['presets'])){
					$presets = array_shift($_SESSION['presets']);
				}
				unset($_SESSION['presets']);
				unset($_SESSION['messages']);
			?>
			<form action="orderhandler.php" method="POST">
				<div>
					Customer Type:
				</div>
				<div>
					<input type="radio" name="customerType" value="1">
						Personal
					</input>
				</div>
				<div>
					<input type="radio" name="customerType" value="2">
						Buisness
					</input>
				</div>
				<div>
				</div>
				<div>
					Upload Picture
				</div>
				<div>
					<input type="file" value="Uplaod File"/>
				</div>
				<div>
					Picture Description
				</div>
				<div>
					<input value="<?php echo isset($presets['picD']) ? $presets['picD'] : ''; ?>" type="text" name="picD"/>
				</div>
				<div>
					Requested Editing Description
				</div>
				<div>
					<input value="<?php echo isset($presets['editD']) ? $presets['editD'] : ''; ?>" type="text" name="editD"/>
				</div>
				<div>
					<input type="submit" value="submit"/>
				</div>
			</form>
		</div>
		<div id="footer">
			<li class="first">&#169;2018 Jacob Doerr</li>
			<li>Web Development 401</li>
			<li>jacobdoerr@u.boisestate.edu</li>
		</div>

	</body>
</html>

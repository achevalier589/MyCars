<?php 
// Must be called first to have an access to any session data
session_start();

// "Import" functions   (like it was typed all here)
require('functions.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<title>My Teams</title>
	</head>
	<body>
		<div id="wrapper" class="container">
			<header>
				<?php include('layout/header.php')?>
			</header>
			<nav>
				<?php include('layout/nav.php')?>
			</nav>
			<section>
				<?php include('layout/main.php')?>
			</section>
			<footer>
				<?php include('layout/footer.php')?>
			</footer>
		</div>
	</body>
</html>
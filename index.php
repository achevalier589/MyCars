<?php 

/*Import functions
require('functions.php');*/
?>
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<head>
</head>

<body>
		<div id="wrapper" class="container">
			
			<header>
				<?php require("layout/header.php")?>
			</header>
			<nav>
				<?php require("layout/nav.php")?>
			</nav>
			<section role="main">
				<?php require("layout/main.php")?>
			</section>
		</div>
		
		<div>
		<footer>
				<?php require("layout/footer.php")?>
		</footer>
		</div>
</body>

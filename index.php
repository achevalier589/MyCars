<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<head>
	<link href="css/jimgMenu.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
	<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
</head>

<body>
		<div id="wrapper" class="container">
			<header>
				<?php include('layout/header.php')?>
			</header>
			<nav>
				<?php include('layout/nav.php')?>
			</nav>
			<section role="main">
				<?php include('layout/main.php')?>
			</section>
		</div>
		
		<nav>
		<div class="jimgMenu">
  			<ul>
    			<li class="home"><a href="./">MyCars</a></li>
   				<li class="team"><a href="#">Favorites</a></li>
    			<li class="roster"><a href="#">Brands</a></li>
    			<li class="schedule"><a href="#">Specs</a></li>
    			<li class="add"><a href="#">Add</a></li>
  			</ul>
		</div>
		</nav>
		
		<div>
		<footer>
				<?php include('layout/footer.php')?> <!-- All content in the file listed -->
		</footer>
		</div>
</body>


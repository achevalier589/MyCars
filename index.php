
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<head>
</head>

<body>
		<ul class=navigation-bar>
  			 <li><a href="./">MyCars</a></li>
  			 <li><a href="#">Favorites</a></li>
 			 <li><a href="#">Brands</a></li>
 			 <li><a href="#">Specs</a></li>
   			 <li><a href="#">Add</a></li>
		</ul><div id="wrapper" class="container">
			
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
		
		<div>
		<footer>
				<?php include('layout/footer.php')?>
		</footer>
		</div>
</body>


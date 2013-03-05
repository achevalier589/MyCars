<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<head>
	<link href="css/jimgMenu.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
	<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
</head>

<body>
	<h2>Nebraska Cornhuskers</h2>
		<nav>
		<div class="jimgMenu">
  			<ul>
    			<li class="home"><a href="./">Nebraska Cornhuskers</a></li>
   				<li class="team"><a href="#">Team Info.</a></li>
    			<li class="roster"><a href="#">Roster</a></li>
    			<li class="schedule"><a href="#">Schedule</a></li>
    			<li class="add"><a href="#">Add</a></li>
  			</ul>
		</div>

		</nav>
		
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
			<footer>
				<?php include('layout/footer.php')?> <!-- All content in the file listed -->
			</footer>
		</div>
</body>


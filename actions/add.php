<?php session_start(); ?>
<pre><?php print_r($_POST) ?></pre>
<?php 
require('../config/db.php');
$required = array(
	'car_name',	
	'car_model',
	'car_price'
);



<pre>$_POST <?php print_r($_POST) ?></pre>
<pre>$_GET <?php print_r($_GET) ?></pre>

<?php 
session_start();

// Read file into array
$lines = file('../data/cars.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['car_name']},{$_POST['car_brand']},{$_POST['car_speed']}";

// Create the string to write to the file
$data_string = implode("\n",$lines);

// Write the string to the file, overwriting the current contents\
$f = fopen('../data/cars.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Your car has been edited.',
		'type' => 'info'
);

// Redirect to the main page\
header('location:../?p=list_cars');

?>
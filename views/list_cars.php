<h2>All Cars</h2>
<table class="table table-hover">
	<tr>
		<th>Car Name</th>
		<th>Brand</th>
		<th>Speed</th>
	</tr>
<?php 
// Read all lines of the CSV file into an array
$lines = file('data/cars.csv',FILE_IGNORE_NEW_LINES);

// Counter variable for line number
	$i = 0;

// Iterate over the array of lines
foreach($lines as $line) {
	$parts = explode(',',$line); // $parts is an array of 3 parts
	$name = $parts[0];
	$brand = $parts[1];
	$speed = $parts[2];
	echo '<tr>';
	echo "<td>$name</td>";
	echo "<td>$brand</td>";
	echo "<td>$speed</td>";
	$onclick = "return confirm('Are you sure you want to delete $name?')";
	echo "<td><a href=\"./?p=form_edit_team&team=$i\" class=\"btn btn-warning\"><i class=\"icon-edit icon-white\"></i></a> 
		  <a onclick=\"return confirm('Are you sure you want to delete $name\" href=\"./actions/delete_team.php?linenum=$i\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i></td>";
	echo'</tr>';
	
	$i++; // Increment line number
}
?>
</table>
<!-- The file function in PHP returns an array of all the lines that are listed -->
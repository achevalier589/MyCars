<h2>Add a Car</h2>
<form class="form-horizontal" action="actions/add_Car.php" method="post">
	<div class="control-group">
		<label class="control-label" for="car_name">Car Name</label>
		<div class="controls">
			<?php echo input('car_name','Add a Car') ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="car_brand">Brand</label>
		<div class="controls">
			<?php echo input('car_brand','Brand') ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="car_speed">Speed</label>
		<div class="controls">
			<?php echo input('car_speed','Speed') ?>
		</div>
		<div class="form-actions">
		  <button type="submit" class="btn btn-primary">Add to List</button>
		  <button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
		</div>
	</div>
</form>

<!-- FORM SUBMISSION METHODS
Use get or host
Use get when submitting wont result in a change to the server state
Use host when submitting and it WILL result in a change to the server state (E.G. Alter Data File) -->
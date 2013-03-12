<h2>Add a Team</h2>
<form class="form-horizontal" action="actions/add_team.php" method="post">
	<div class="control-group">
		<label class="control-label" for="team_name">Team Name</label>
		<div class="controls">
			<?php echo input('team_name','Add a Team') ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="team_record">Record</label>
		<div class="controls">
			<?php echo input('team_record','Win/Lose Record') ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="team_ranking">Ranking</label>
		<div class="controls">
			<?php echo input('team_ranking','Ranking') ?>
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
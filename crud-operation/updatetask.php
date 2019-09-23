<?php 



	
?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div class="form-group">
		<label>task name</label>
		<input type="text" name="taskname" class="form-control" value="<?php echo($row['']); ?>">
	</div>
	<div class="form-group">
		<label>task desc</label>
		<input type="text" name="taskdesc" class="form-control" value="<?php echo($row['']); ?>">
	</div>
	<div class="form-group">
		<label>start time</label>
		<input type="time" name="stime" class="form-control" value="<?php echo($row['']); ?>">
	</div>
	<div class="form-group">
		<label>end time</label>
		<input type="time" name="etime" class="form-control" value="<?php echo($row['']);  ?>">
	</div>
</form>
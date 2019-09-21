<!DOCTYPE html>
<html>
<?php include "commoncomponents/header.php"; ?>
<body>
<div class="container">
  <div class="row">
	<div class="col-6 offset-3">
	   <form  method="post" action="inserttask.php" class="mt-5">
		<div class="form-group">
			<label>task name</label>
			<input type="text" name="taskname" id="taskname" class="form-control">
		</div>
		<div class="form-group">
			<label>task description</label>
			<input type="text" name="taskdesc" id="taskdesc" class="form-control">
		</div>
		<div class="form-group">
			<label>start time</label>
			<input type="time" name="starttime" id="starttime" class="form-control">
		</div>
		<div class="form-group">
			<label>end time</label>
			<input type="time" name="endtime" id="endtime" class="form-control">
		</div>
		<button type="submit" class="btn-success  pl-5 pr-5">Save</button>
	  </form>
    </div>
   </div>
</div>
</body>
</html>
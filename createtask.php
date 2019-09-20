<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form  method="post" action="inserttask.php">
		<div class="form-group">
			<label>task name</label>
			<input type="text" name="taskname" id="taskname" class="form-control">
		</div>
		<div class="form-group">
			<label>task description</label>
			<input type="text" name="taskdesc" id="taskdesc" class="form-control">
		</div>
		<div class="form-group">
			<label>start date</label>
		</div>
		<div class="form-group">
			<label>start time</label>
			<input type="time" name="starttime" id="starttime" class="form-control">
		</div>
		<div class="form-group">
			<label>end time</label>
			<input type="time" name="endtime" id="endtime" class="form-control">
		</div>
		<button type="submit" class="btn-success">Save</button>
	</form>
</body>
</html>
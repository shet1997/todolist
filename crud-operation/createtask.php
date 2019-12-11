<!DOCTYPE html>
<html>
<?php include "../common-components/header1.php";
	  include "../common-components/navbar.php";
 ?>
<body>
<div class="bac_image">	
<div class="container">
  <div class="row">
	<div class="col-4 offset-4">
		<div class="card card_bdr mt-5">
			<div class="card-body">
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
					<div class="d-flex justify-content-center">
					<button type="submit" class="submit_btn">Save</button>
					</div>
	  </form>
			</div>
		</div>
    </div>
   </div>
</div>
</div>
</body>
</html>
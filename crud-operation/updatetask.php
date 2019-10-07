<?php 

session_start();


if(isset($_SESSION){
	header("location: ../login.php");
})

	$id = $_GET["id"];

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["taskname"];
		// print_r($name);
		$desc = $_POST["taskdesc"];
		// print_r($desc);
		$stime = $_POST["stime"];
		// print_r($stime);
		$etime = $_POST["etime"];
		// print_r($etime);
		// die();
	}

$updatequery = "update task set name='$name', description='$desc', stime='$stime' etime='$etime' where id='$id'";

 $queryex = mysqli_query($conn,$updatequery);

mysqli_number_rows($queryex == 1) {
	echo "updated successfully";
	header("location: edittask.php");
}else{
	echo "failed to update".mysqli_connect_error();
}


	
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
	<button type="submit" class="btn-primary">update</button>
</form>
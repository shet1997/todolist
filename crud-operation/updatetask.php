<?php 

session_start();


if(empty($_SESSION['email'])){
	header("location: ../login.php");
}


	include "../common-components/connection.php";

	$id = $_GET["id"];

	$task_value = "select * from task where uid = '$id' ";

	$task_value_exec = mysqli_query($conn, $task_value);

	// print_r($task_value_exec);
	// die();

	$row =	mysqli_fetch_assoc($task_value_exec);


if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$name = $_POST["taskname"];
		// print_r($name);
		$desc = $_POST["taskdesc"];
		// print_r($desc);
		$stime = $_POST["stime"];
		// print_r($stime);
		$etime = $_POST["etime"];
		// print_r($etime);
		// 	die();

$updatequery = "UPDATE  task SET  name = '$name', description = '$desc', stime = '$stime', etime = '$etime' WHERE uid = '$id'";


 $queryex = mysqli_query($conn, $updatequery);


 if($queryex == 1) {
 	header("location: editask.php");
 }else{
	echo "failed to update".mysqli_connect_error();
}

}

	
?>

<!DOCTYPE html>
<html>
<?php include "../common-components/header1.php"; ?>
<body>
	<div class="bac_image">
		<div class="container">
			<div class="row">
			<div class="col-6 offset-3">
			<div class="card card_bdr mt-5">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=".$row['uid']; ?>">
					<div class="form-group">
						<label>task name</label>
						<input type="text" name="taskname" class="form-control" value="<?php echo ($row['name']); ?>">
					</div>
					<div class="form-group">
						<label>task desc</label>
						<input type="text" name="taskdesc" class="form-control" value="<?php echo ($row['description']); ?>">
					</div>
					<div class="form-group">
						<label>start time</label>
						<input type="time" name="stime" class="form-control" value="<?php echo ($row['stime']); ?>">
					</div>
					<div class="form-group">
						<label>end time</label>
						<input type="time" name="etime" class="form-control" value="<?php echo ($row['etime']); ?>">
					</div>
					<div class="d-flex justify-content-center">
					<button type="submit" class="submit_btn">update</button>
					</div>
				</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

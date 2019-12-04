<?php 

include "common-components/connection.php";

if($_SERVER["REQUEST_METHOD"] == "GET") {

	$email = $_GET["email"];
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

	 $confirm_password = $_POST["cpwd"];
	 $confirm_password = md5($confirm_password);
}

$update = "update userdata set password = '$confirm_password' where email = '$email' ";

$updateex = mysqli_query($conn,$updateex);
	

?>


<!DOCTYPE html>	
<html>
<?php include "common-components/header.php"; ?>
<body>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<div class="form-group">
			<label>new password</label>
			<input type="password" name="npwd" class="form-control" id="npwd">
		</div>
		<div>
			<label>confirm password</label>
			<input type="password" name="cpwd" class="form-control" id="cpwd" onkeyup="checkletters(this);">
			<div id="pwderr"></div>
		</div>
		<button type="submit">submit</button>
	</form>
</body>
<?php include "common-components/script.php";
?>
</html>
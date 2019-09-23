<?php 
session_start();


$email = $_SESSION['email'];

if($_SERVER["REQUEST_METHOD"] == "POST") {

	 $newpassword = $_POST["npwd"];
	 $newpassword = md5($newpassword);

}

include "connection.php";

$update = "update userdata set password='$newpassword' where email='$email' ";

$updateex = mysqli_query($conn,$updateex);

?>



<!DOCTYPE html>
<html>
<?php include "common-components/header.php"; ?>
<body>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<div class="form-group">
			<label>new password</label>
			<input type="text" name="npwd" class="form-control" id="npwd">
		</div>
		<div>
			<label>confirm password</label>
			<input type="text" name="cpwd" class="form-control" id="cpwd" onkeyup="checkletters(this);">
			<div id="pwderr"></div>
		</div>
		<button type="submit"></button>
	</form>
</body>
<?php include "common-components/script.php";
      include "assets/js/common.js";
?>
</html>
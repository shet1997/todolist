<?php 
session_start();

if(empty($_SESSION)){
	header("location: login.php")
}

$email = $_SESSION['email'];

if($_SERVER["REQUEST_METHOD"] == "POST") {

	 $newpassword = $_POST["npwd"];
	 $newpassword = md5($newpassword);

}

include "data.php";

$update = "update datastore set password='$newpassword' where email='$email' ";

$updateex = mysqli_query($conn,$updateex);

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<div class="form-group">
			<label>new password</label>
			<input type="text" name="npwd" class="form-control">
		</div>
		<div>
			<label>confirm password</label>
			<input type="text" name="cpwd" class="form-control" onkeyup="checkletters(this);">
		</div>
		<button type="submit"></button>
	</form>
</body>
</html>
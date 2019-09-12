<?php 
session_start();

$email = $_SESSION["email"];
$_SESSION["logged"] = true;

if(empty($_SESSION)) {
	header("location: login.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$password = md5($password);
}

include "data.php";	

$select = "select email='$email' && password='$password' from datastore";

$selectex = mysqli_query($conn,$select);

if(mysqli_num_rows($selectex) == 1) {
	header("location: dashboard.php");
	exit();
}
else{
	header("location: register.php");
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-4 offset-4 ">
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
			<div class="form-group">
				<label for>Email</label>
				<input class="form-control" type="email" name="email" onfocusout="checkEmail();">
			</div>
			<div class="form-group">
				<label for>Password</label>
				<input class="form-control" type="text" name="password">
			</div>
			<a href="resetpassword.php">forgot password</a>
			<button type="submit" value="submit" id="submit">submit</button>
			<a href="register.php">signup</a>

		</form>
</div>
</div>
	   </div>
</body>
</html>
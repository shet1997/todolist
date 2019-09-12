<?php 
include "data.php"
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$sql = "select email from todolist where email='$email'";
	$exec = mysqli_query($conn,$sql);
	if(mysqli_num_rows($exec) == 1) {
		header("location: forgotpwd.php")
	}
	else{
		echo "email does noxt exists";
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<style type="text/css">
		.pad_mar {
			padding: 200px;
			text-align: center;
		}
	</style>
</head>
<body>
	<form onsubmit="return validation();" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="pad_mar ">
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" id="email" onfocusout="checkEmail(this); ">
		</div>
		<button type="submit" value="submit" class="btn-success">submit</button>
	</form>
</body>
</html>
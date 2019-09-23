<?php 
include "connection.php";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	$emailid = $_POST['email'];
	$sql = "select email from userdata where email='$emailid'";
	$exec = mysqli_query($conn,$sql);
	if(mysqli_num_rows($exec) == 1) {
		// header("location: forgotpwd.php")
		include "email/sendemail.php";
		include "email/resetemail.php";
		sendEmail($emailid,$template3);
		$message = "email link has been sent";
	}
	else{
		echo "email does noxt exists";
	}

}
?>


<!DOCTYPE html>
<html>
<?php include "commoncomponents/header.php";
	  include "assets/css/common.css";
?>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="pad_mar ">
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" id="email" onfocusout="checkEmail(this); ">
			<div>
			<?php echo @$message ?>
			</div>
		</div>
		<button type="submit" value="submit" class="btn-success">submit</button>
	</form>
</body>
</html>
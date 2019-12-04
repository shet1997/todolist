<?php 
include "common-components/connection.php";

	$a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$token = str_shuffle($a);

	// print_r($token);
	// die();	


if($_SERVER["REQUEST_METHOD"] == "GET") {
	$message = $_GET["message"];
}

   if($_SERVER["REQUEST_METHOD"] == "POST") {
	$emailid = $_POST['email'];
	$sql = "select email from userdata where email='$emailid'";
	$exec = mysqli_query($conn,$sql); 
	if(mysqli_num_rows($exec) == 1) {
		// header("location: forgotpwd.php")
		// echo "hello";
		// die();	
		include "email/sendemail.php";
		include "email/resetemail.php";
		sendEmail($emailid,$template3,$token);

		$token_expiry_insert = "insert into password_reovery(email,token,expiring_time) values('$emailid', '$token', date_add(NOW(), INTERVAL 10 MINUTE) )";
		$token_expiry_insert_exe = mysqli_query($conn, $token_expiry_insert);

		// print_r($token_expiry_insert_exe );
		// die();

		$message = "email link has been sent";
	}
	else{
		echo "email does noxt exists";
	}

}
?>


<!DOCTYPE html>
<html>
<?php include "common-components/header.php";
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
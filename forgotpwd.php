<?php 
include "common-components/connection.php";

	$a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$token = str_shuffle($a);

	// print_r($token);
	// die();	


if($_SERVER["REQUEST_METHOD"] == "GET") {
	$message = $_GET['message'];
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

		$token_expiry_insert = "insert into password_reovery(email,token,expiring_time) values('$emailid', '$token', date_add(NOW(), INTERVAL 20 MINUTE) )";
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
	<div class="bac_image">
		<div class="container">
			<div class="row">
				<div class="col-4 offset-4">
					<div class="card card_bdr mt-5">
						<div class="card-body mt-3">
							<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="text-center">
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" id="email" onfocusout="checkEmail(this); ">
								<div>
								<?php echo @$message ?>
								</div>
								</div>
								<div class="d-flex justify-content-center">
								<button type="submit" value="submit" class="submit_btn">submit</button>
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
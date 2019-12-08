<!DOCTYPE html>
<html>
<?php include "common-components/header.php"; ?>
<?php include "common-components/font-family.php"; ?>
<body>
<div class="bac_image">	
<div class="container">
	<div class="row">
		<div class="col-4 offset-4 ">
		<div class="card card_bdr mt-5">
		<div class="card-body">
		<form method="post" action="controller/loginvalidation.php" class="mt-5">
			<div class="form-group">
				<label for>Email</label>
				<input class="form-control" type="email" name="email" onfocusout="checkEmail();">
			</div>
			<div class="form-group">
				<label for>Password</label>
				<input class="form-control" type="password" name="password">
			</div>
			<div class="log_redircts">
			<a href="forgotpwd.php">forgot password</a>
			<button type="submit" value="submit" id="submit" class="submit_btn">submit</button>
			<a href="register.php">signup</a>
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
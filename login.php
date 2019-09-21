



<!DOCTYPE html>
<html>
<?php include "commoncomponents/header.php"; ?>
<body>
<div class="container">
	<div class="row">
		<div class="col-4 offset-4 ">
		<form method="post" action="loginvalidation.php" class="mt-5">
			<div class="form-group">
				<label for>Email</label>
				<input class="form-control" type="email" name="email" onfocusout="checkEmail();">
			</div>
			<div class="form-group">
				<label for>Password</label>
				<input class="form-control" type="password" name="password">
			</div>
			<a href="resetpassword.php">forgot password</a>
			<button type="submit" value="submit" id="submit" class="btn-success pl-3 pr-3 ml-3 mr-3">submit</button>
			<a href="register.php">signup</a>

		</form>
	</div>
</div>
</div>
</body>
</html>
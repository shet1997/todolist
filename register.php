<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
		<div class="container">
			<div class="row">
			<div class="col-8 offset-2">
		<form method="post" action="registration.php" onsubmit="return validation();" class="pt-5">
			<div class="form-group">
				<label for>Name</label>
				<input class="form-control" type="text" name="name" id="name">
			</div>
			<div class="form-group">
				<label for>Email</label>
		<input class="form-control" type="email" name="email" id="email" onfocusout="checkEmail(this);">
			</div> 
			<div class="form-group">
				<label for>Password</label>
				<input class="form-control" type="password" name="password" id="password">
			</div>
			<div class="form-group">
				<label for>Mobile</label>
				<input class="form-control" type="number" name="mobile" id="mobile">
			</div>
			<div class="form-group">
				<label for>Gender</label>
				<input type="radio" name="gender" value="male">
				<input type="radio" name="gender" value="female">
			</div>
			<button type="submit" value="submit" id="submit" class="btn-success">submit</button>
		</form>
		</div>
		</div>
		</div>
</body>
</html>

<?php
include "script.php"; 
?>
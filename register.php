<!DOCTYPE html>
<html>
<?php include "common-components/header.php"; ?>
<body>
		<div class="container">
			<div class="row">
			<div class="col-8 offset-2">
		<form method="post" action="controller/registration.php" onsubmit="return validation()" class="pt-5">
			<div class="form-group">
				<label for>Name</label>
				<input class="form-control" type="text" name="name" id="name">
			</div>
			<div class="form-group">
				<label for>Email</label>
		<input class="form-control" type="email" name="email" id="email" 
		focusout="return checkEmail(this,email)">
			</div> 
			<div id="emailerr"></div>
			<div class="form-group">
				<label for>Password</label>
				<input class="form-control" type="password" name="password" id="password">
				<!-- <div id="passworderr"></div> -->
			</div>
			<div class="form-group">
				<label for>Mobile</label>
				<input class="form-control" type="number" name="mobile" id="mobile">
			</div>
			<div class="form-group">
				<label for>Gender</label>
				<input type="radio" name="gender" value="male">male
				<input type="radio" name="gender" value="female">female
			</div>
			<button type="submit" value="submit" id="submit" class="btn-success">submit</button>
		</form>
		</div>
		</div>
		</div>
</body>
</html>

<?php
include "common-components/script.php"; 
?>
<!DOCTYPE html>
<html>
<?php include "common-components/header.php"; ?>
<body>	<div class="bac_image">
		<div class="container">
			<div class="row">
			<div class="col-4 offset-4">
			<div class="card card_bdr mt-5">	
			<div class="card-body">
		<form method="post" action="controller/registration.php" onsubmit="return validation()">
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
				<input type="radio" name="gender" value="male" class="ml-2">male
				<input type="radio" name="gender" value="female" class="ml-2">female
			</div>
			<div class="d-flex justify-content-center">
			<button type="submit" value="submit" id="submit" class="submit_btn">submit</button>
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

<?php
include "common-components/script.php"; 
?>
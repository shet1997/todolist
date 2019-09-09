<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
		<form method="post" action="registration.php" onsubmit="return validation();">
			<div class="form-group">
				<label for>Name</label>
				<input class="form-control" type="text" name="name" id="name">
			</div>
			<div class="form-group">
				<label for>Email</label>
				<input class="form-control" type="email" name="email" id="email">
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
				<input type="radio" name="gender" value="females">
			</div>
			<button type="submit" value="submit" id="submit" class="btn-success">submit</button>
		</form>
</body>
</html>
<?php 
	session_start();
	if(empty($_SESSION["email"])) {
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=". $row['id'] ?>">
		
	</form>
</body>
</html>


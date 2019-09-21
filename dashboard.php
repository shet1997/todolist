<?php 
	session_start();
	// if(empty($_SESSION)) {
	// 	header("location: login.php");
	// }
?>

<!DOCTYPE html>
<html>
<?php include "commoncomponents/header.php"; ?>
<body>
	<?php include "navbar.php"; ?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=". $row['id'] ?>">
		
	</form>
</body>
</html>


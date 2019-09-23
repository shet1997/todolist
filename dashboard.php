<?php 
	session_start();
	// if(empty($_SESSION)) {
	// 	header("location: login.php");
	// }
?>

<!DOCTYPE html>
<html>
<?php include "common-components/header.php"; ?>
<body>
	<?php include "common-components/navbar.php"; ?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']."?id=". $row['id'] ?>">
		
	</form>
</body>
</html>


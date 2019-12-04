<?php 

// echo "hello";
// die();

include "common-components/connection.php";

if($_SERVER["REQUEST_METHOD"] == "GET") {

	$email = $_GET["email"];
	$token = $_GET["token"];
	// print_r($token);
	// die();
}

$token_expiry = "select email,expiring_time from password_reovery where email='$email' and expiring_time > NOW()";

$token_expiry_ex = mysqli_query($conn, $token_expiry);

$row =  mysqli_num_rows($token_expiry_ex);

// print_r($row);
// die();

if ($row == 1){
	// echo "hel";
	// die();
		header("location: reset.php?email=".$email."");
		exit();
	
} else {

	// echo "hello";
	// die();
	$message = "token is expired";
	header("location: forgotpwd.php?message=".$message);
	exit();
}


?>



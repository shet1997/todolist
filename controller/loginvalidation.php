<?php 

session_start();


include "../common-components/connection.php";		

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$emailid = $_POST["email"];
	// print_r($emailid);
	$pwd = $_POST["password"];
	$pwd = md5($pwd);
	// print_r($password);
	// die();
	}

$select = "SELECT email,password from userdata WHERE  email = '$emailid' AND password = '$pwd'";

// print_r($select);
// die();

$selectex = mysqli_query($conn,$select);


//print_r($selectex);	
// die();

$rownumber = mysqli_num_rows($selectex);
// print_r($rownumber);
// die();



if(mysqli_num_rows($selectex) == 1) {
	$row = mysqli_fetch_assoc($selectex);

	 $_SESSION["email"] = $row["email"];
	 $_SESSION["logged"] = true;

	header("location: ../dashboard.php");
	exit();
}
else{
	header("location: ../register.php");
}

?>
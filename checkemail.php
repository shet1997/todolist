<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
 $email = $_POST["email"];
}

include "connection.php";

$select = "select email from userdata where email='$email'";

$selectex = mysqli_query($conn,$select);

if(mysqli_num_rows($selectex) == 1) {
	echo json_encode(array(
		"message" => "failure"
	));
}

 ?>

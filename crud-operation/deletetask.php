<?php
session_start();
if(empty($_SESSION)){
	header("location: login.php");
}


if($_SERVER["REQUEST_METHOD"] == "GET") {
	$id = $_GET["id"]
} 

include "connection.php";

// $delete = "delete * from task where id='$id'";
$deletestask = "update task set status='1' where id = '$id'";
if(mysqli_query($conn,$deletestask)) {
	echo json_encode(array(
		"message" => "success";
	));
}
else{
	echo json_encode(array(
		"message" => "failure";
	));
}
?>
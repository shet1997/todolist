<?php
$servername = "localhost",
$username = "root",
$password = "",
$dbname ="todolist"

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {
	die("failed to connect".mysqli_connect_error());
}
 ?>


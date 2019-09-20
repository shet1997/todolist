<?php  

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["taskname"];
	$desc = $_POST["taskdesc"];
	$stime = $_POST["stime"];
	$etime = $_POST["etime"];
}

include "connection.php";

$taskinsert = "insert into task(name,description,stime,etime) values($name,$desc,$stime,$etime)";

$taskexc = mysqli_query($conn,$taskinsert);


?>
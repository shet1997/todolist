<?php  

session_start();

include "connection.php";

$email = $_SESSION['email'];

$uidquery = "select id from userdata where email='$email'";

$uid = mysqli_query($conn,$uid);

print_r($uid);
die();


if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["taskname"];
	//print_r($name);
	$desc = $_POST["taskdesc"];
	//print_r($desc);
	$stime = $_POST["starttime"];
	print_r($stime);
	$etime = $_POST["endtime"];
	print_r($etime);
}



$taskinsert = "INSERT INTO task(name,description,stime,etime,uid) VALUES('$name','$desc','$stime','$etime','$uid')";

if(mysqli_query($conn,$taskinsert)) {
	echo "inserted successfully";
}


?>
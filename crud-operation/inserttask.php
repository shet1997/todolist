<?php  

session_start();

// print_r($_SESSION);
// die();

if(empty($_SESSION['email'])) {
	header("location: ../login.php");
}

include "../common-components/connection.php";

$email = $_SESSION["email"];

$uidquery = "select uid from userdata where email='$email'";

$uid = mysqli_query($conn,$uidquery);

 $row = mysqli_fetch_assoc($uid);
 $uids = $row["uid"];

// print_r($uids);
// die();


if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["taskname"];
	//print_r($name);
	$desc = $_POST["taskdesc"];
	//print_r($desc);
	$stime = $_POST["starttime"];
	//print_r($stime);
	$etime = $_POST["endtime"];
	// print_r($etime);
	// die();
}



$taskinsert = "INSERT INTO task(name,description,stime,etime,uid) VALUES('$name','$desc','$stime','$etime','$uids')";
// $row = mysqli_fetch_assoc($taskinsert);
// print_r($row);
// die();

if(mysqli_query($conn,$taskinsert)) {
	echo "inserted successfully";
}


?>



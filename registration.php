<?php 
	include "sendemail.php";
	

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$emailid = $_POST["email"];
		$name = $_POST["name"];
		$password = $_POST["password"];
		$password = md5($password);
		$mobile = $_POST["mobile"];
		if(isset($_POST["gender"])){
			$gender = $_POST["gender"];
		}
		
	}


	include "connection.php";


	$select = "select email from userdata where email='$emailid'";
	$selectex = mysqli_query($conn,$select);


	if(mysqli_num_rows($selectex) == 1) {

			echo "email should be unique";
		}else{
			$insert = "insert into userdata(name,email,password,mobile,gender) values('$name','$emailid','$password','$mobile','$gender')";
				  if(mysqli_query($conn,$insert)) {
				  	echo "inserted successfully";
				  }
				 include "useremail.php";
				 include "adminemail.php";
				 sendEmail("prajwalashet@gmail.com",$template1);
				 sendEmail($emailid,$template2);
				 


		}
?>
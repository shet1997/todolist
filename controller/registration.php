<?php 
	include "../email/sendemail.php";
	

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$emails = $_POST["email"];
		// print_r($emails);
		// die();
		$name = $_POST["name"];
		//print_r($name);
		$passwords = $_POST["password"];
		$passwords = md5($passwords);
		//print_r($password);
		$mobile = $_POST["mobile"];
		// print_r($mobile);

		// if(isset($_POST["gender"])){
			//$gender = $_POST["gender"];
		// }

		$gender = $_POST["gender"];
		// die();
		
	}


	include "../common-components/connection.php";


	$select = "select email from userdata where email = '$emails'";
	// print_r($select);
	// die();
	$selectex = mysqli_query($conn,$select);


	if(mysqli_num_rows($selectex) == 1) {

			echo "email should be unique";
	}else{
		$insert = "insert into userdata(name,email,password,mobile,gender) values('$name','$emails','$passwords','$mobile','$gender')";
		// print_r($insert);
		// die();
			  if(mysqli_query($conn,$insert)) {
			  	// echo "inserted successfully";
			  	header("location: ../dashboard.php");
			  	exit();
			  }
			 include "../email/useremail.php";
			 include "../email/adminemail.php";
			 sendEmail("prajwalashet@gmail.com",$template1);
			 sendEmail($emailid,$template2);
			 


	}
?>
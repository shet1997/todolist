<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $_POST["email"];
		$name = $_POST["name"];
		$password = $_POST["pasword"];
		$password = md5($password);
		$mobile = $_POST["mobile"];
		$gender = $_POST["gender"];
	}


	include "data.php";


	$select = "select email='$email' from task";
	$selectex = mysqli_query($conn,$selectex);

	if(mysqli_num_rows($selectex) == 1) {

			echo "email should be unique";
		}else{
			$insert = "insert into datastore(name,email,password,mobile,gender) values('$name','$email','$password','$mobile','$gender')";
				 $insertex = mysqli_query($conn,$insert);

		}
?>
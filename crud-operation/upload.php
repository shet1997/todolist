<?php 
session_start();


 $email = $_SESSSION["email"];

include "../common-components/connection.php"; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
	// print_r($_FILES);

	$name = $_FILES["imageupload"]["name"];

	$type = $_FILES["imageupload"]["type"];

	$tmp_name = $_FILES["imageupload"]["tmp_name"];

	$size = $_FILES["imageupload"]["size"];

	if(move_uploaded_file($tmp_name, "upload/".$name)){
		$upload = "update userdata set image = 'upload/".$name."' where email='$email' ";
	}
	else{
		echo "failed t upload".mysqli_connect_error();
	}

}

?>

<!DOCTYPE html>
<html>
<?php include "../common-components/header.php"; ?>
<body>
	<div class="bac_image">
		<div class="container">
			<div class="row">
			<div class="col-4 offset-4">
			<div class="card card_bdr mt-5">
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
		<div class="form-group">
			<label>file upload</label>
			<input type="file" name="imageupload" class="form-control" >
		</div>
		<div class="form-group">
			<input type="submit" name="submit" class="form-control" value="submit">
		</div>
	</form>
</div>
</div>
</div>
</div>
</div>
</body>
</body>
</html>
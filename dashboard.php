<?php 
	// session_start();
	

	// if(empty($_SESSION){
	// 	header("location: login.php");
	// });

	// $email = $_SESSION["email"];


?>

<!DOCTYPE html>
<html>
<?php include "common-components/header.php"; ?>
<body>
	<?php include "common-components/navbar.php"; ?>
	 <div class="container">
	 	<div class="pt-5">
	 	<div class="row">
	 		<div class="col-md-6">
	 			<?php 

	 				$pic = $row["image"];

	 				if($row["gender"] == "male") {
	 					
	 					if($pic == NULL){
	 						echo "<img src='images/boy-image.png' alt='boy image' class='rounded-circle' height='300px' width='300px'>";
	 					}
	 					else {
	 						echo "<img src='".$row['image']."' alt='boy image' class='rounded-circle' height='300px' width='300px' >";
	 					}
	 				}

	 				else{
	 					if($pic == NULL){
	 						echo "<img src='images/girl-image.jpg' alt='girl image' class='rounded-circle' height='300px' width='300px'>";
	 					}
	 					else{
	 						echo "<img src='".$row['image']."' alt='girl image'> class='rounded-circle' height='300px' width='300px'";
	 					}
	 				}

	 			?>
	 		</div>
		 		<div class="col-md-6">
		 			<div class="user_info">
		 				<?php echo ($row['name']); ?>
		 			</div>
		 			<div class="user_info">
		 				<?php echo($row['description']); ?>
		 			</div>
		 			<div class="user_info">
		 				<?php echo ($row['stime']); ?>
		 			</div>
		 			<div class="user_info">
		 			<?php echo ($row['etime']); ?>
		 			</div>
		 		</div>
		 	</div>
	 	</div>
	 </div>
</body>
</html>


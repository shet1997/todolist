 <?php 
 
 session_start();

	 if(empty($_SESSION["email"])) {
	 	header("location: login.php");
	 }

include "../common-components/connection.php";

$taskselect = "select userdata.uid,task.name,task.description,task.stime,task.etime from userdata join task on userdata.uid = task.uid where task.status = 0 ";

// print_r($taskselect);
// die();

$taskex = mysqli_query($conn,$taskselect);

// $row = mysqli_fetch_assoc($taskex);

// print_r($row);
// die();

 ?>





 <!DOCTYPE html>
 <html>
 	<?php include "../common-components/header1.php";
 		  include "../common-components/font-family.php";
 	 ?>
 <body>
 	<div class="bac_image">
		<div class="container">
 		<table class="table edit_table">
 			<tr>
 				<th>TaskName</th>
 				<th>TaskDesc</th>
 				<th>StartTime</th>
 				<th>EndTime</th>
 				<th>Actions</th>
 			</tr>
 			<?php while ($row = mysqli_fetch_assoc($taskex)) {
 			?>
 			<tr>
 				<td><?php echo($row['name']); ?></td>
 				<td><?php echo($row['description']); ?></td>
 				<td><?php echo($row['stime']); ?></td>
 				<td><?php echo($row['etime']); ?></td>
 				<td><a href="updatetask.php?id=<?php echo($row['uid']); ?>"><i class="fa fa-pencil pl-3" aria-hidden="true"></i></a>
 					<a onclick="deletetask(<?php echo($row['uid']); ?>)"><i class="fa fa-trash pl-5" aria-hidden="true"></i></a>
 				</td>
 			</tr>
 			<?php
 							}	
 			?>
 		</table>
 	</div>
 </div>
 </body>
 </html>
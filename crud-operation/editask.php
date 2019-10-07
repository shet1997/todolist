 <?php 
 
 session_start();

	 // if(empty($_SESSION["email"]) {
	 // 	header("location: login.php");
	 // });

include "../common-components/connection.php";

$taskselect = "select userdata.uid,task.name,task.description,task.stime,task.etime from userdata join on userdata.uid=task.uid where status='0' ";

print_r($taskselect);
die();

$taskex = mysqli_query($conn,$taskselect);

print_r($taskex);
die();

 ?>





 <!DOCTYPE html>
 <html>
 	<?php include "common-components/header.php";
 		  include "font-family.php";
 	 ?>
 <body>
 		<table>
 			<tr>
 				<th>TaskName</th>
 				<th>TaskDesc</th>
 				<th>StartTime</th>
 				<th>EndTime</th>
 				<th>Actions</th>
 			</tr>
 			<?php while ($row = mysqli_fetch_assoc()) {
 				# code...
 			?>
 			<tr>
 				<td><?php echo($row['']); ?></td>
 				<td><?php echo($row['']); ?></td>
 				<td><?php echo($row['']); ?></td>
 				<td><?php echo($row['']); ?></td>
 				<td><?php echo($row['']) ; ?></td>
 				<td><a href="updatetask.php?id=<?php echo($row['id']); ?>"><i class="fa fa-pencil pl-3" aria-hidden="true"></i></a>
 					<a onclick="deletetask(<?php echo($row['id']); ?>)"><i class="fa fa-trash pl-5" aria-hidden="true"></i></a>
 				</td>
 			</tr>
 			<?php
 							}	
 			?>
 		</table>
 </body>
 </html>
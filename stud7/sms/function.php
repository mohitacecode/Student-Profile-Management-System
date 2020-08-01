<?php

function showdetails($sem,$id)
{
	include('dbcon.php');
	$sql="SELECT * FROM `student` WHERE `studentId`='$id' AND `semester`='$sem' ";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		$data =mysqli_fetch_assoc($run);
		?>
		<br />
		<table id="customers">
				<tr>
					<th><?php echo $data['dob'];?></th>
				</tr>
				<tr>
					<td colspan="3">Student Details</td>
				</tr>
				<tr>
					<td>StudentId</td>
					<td><?php echo $data['studentId'];?></td>
				</tr>
				<tr>
					<td>First Name</td>
					<td><?php echo $data['fName'];?></td>
				</tr>
				<tr>
					<td>Middle Name</td>
					<td><?php echo $data['mName'];?></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><?php echo $data['lName'];?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $data['address'];?></td>
				</tr>
				<tr>
					<td>Department</td>
					<td><?php echo $data['department'];?></td>		
				</tr>
				<tr>
					<td>Semester</td>
					<td><?php echo $data['semester'];?></td>		
				</tr>			
				<tr>
					<td>Contact No.</td>
					<td><?php echo $data['mobileNumber'];?></td>		
				</tr>	
			</tr>
		</table>

		<?php
		
	}
	else
	{
		echo "<script>alert('No Student Record Found');</script>";
	}
}

  ?>
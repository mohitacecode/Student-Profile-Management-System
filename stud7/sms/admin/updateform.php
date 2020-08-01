<?php
session_start();
        if($_SESSION['uid'])
        {
        	
        }
        else
        {
        	header('location: ../login.php');
        }

?>
<?php

include('header.php');
include('titlehead.php');
include('../dbcon.php');
$sid =$_GET['sid'];
$sql ="SELECT * FROM `student` WHERE studentId='$sid'";
$run = mysqli_query($con,$sql);
$data =mysqli_fetch_assoc($run);

?>
<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table border="1"  style="line-height: 140%; width: 100%; color:black; text-align: center;font-style: italic;" >
		<tr>
			<td>Student Id</td>
			<td><input type="text" name="rollno" value=<?php echo $data['studentId'];?>> </td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstName" value=<?php echo $data['fName'];?>/> </td>
		</tr>
		<tr>
			<td>Middle Name</td>
			<td><input type="text" name="MiddleName" value=<?php echo $data['mName'];?>/> </td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="LastName" value=<?php echo $data['lName'];?>/> </td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input type="date" name="dob" value=<?php echo $data['dob'];?>> </td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type="text" name="gender" value=<?php echo $data['gender'];?>/> </td>
		</tr>
		<tr>
			<td>Father Name</td>
			<td><input type="text" name="fatherName" value=<?php echo $data['fatherName'];?>/> </td>
		</tr>
		<tr>
			<td>Mother Name</td>
			<td><input type="text" name="motherName" value=<?php echo $data['motherName'];?>/> </td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address" value=<?php echo $data['address'];?>/> </td>
		</tr>
		<tr>
			<td>Caste</td>
			<td><input type="text" name="caste" value=<?php echo $data['cast'];?>/> </td>
		</tr>
		<tr>
			<td>Religion</td>
			<td><input type="text" name="religion" value=<?php echo $data['religion'];?>/> </td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type="text" name="sem" value=<?php echo $data['semester'];?>/> </td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type="text" name="dept" value=<?php echo $data['department'];?>/> </td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type="text" name="mobile" value=<?php echo $data['mobileNumber'];?>/> </td>
		</tr>
		<tr>
			<td>Parents Mobile No.</td>
			<td><input type="text" name="parentNumber" value=<?php echo $data['parentNumber'];?>/> </td>
		</tr>
		<tr>
			<td>Email-Id</td>
			<td><input type="email" name="email" value=<?php echo $data['eMailId'];?>/> </td>
		</tr>

	</table>
	<input type="submit" value="submit" name = "submit" id = "submit">
</form>	
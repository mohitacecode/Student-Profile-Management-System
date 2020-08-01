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

?>
</div>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table border="1"  style="line-height: 140%; width: 100%; color:black; text-align: center;font-style: italic;" >
		<tr>
			<td>Student Id</td>
			<td><input type="text" name="rollno" placeholder="Enter Student ID"> </td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstName" placeholder="Enter First Name" required/> </td>
		</tr>
		<tr>
			<td>Middle Name</td>
			<td><input type="text" name="MiddleName" placeholder="Enter Middle Name" required/> </td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="LastName" placeholder="Enter Last Name" required/> </td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input type="date" name="dob" placeholder="Enter DOB" required/> </td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
			<select name="gender" id="gender">
			<option value = "male">Male</option>
			<option value = "female">Female</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Father Name</td>
			<td><input type="text" name="fatherName" placeholder="Enter Fathers Name" required/> </td>
		</tr>
		<tr>
			<td>Mother Name</td>
			<td><input type="text" name="motherName" placeholder="Enter Mothers Name" required/> </td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address" placeholder="Enter Address" required/> </td>
		</tr>
		<tr>
			<td>Caste</td>
			<td><input type="text" name="caste" placeholder="Enter Caste" required/> </td>
		</tr>
		<tr>
			<td>Religion</td>
			<td><input type="text" name="religion" placeholder="Enter Religion" required/> </td>
		</tr>
		<tr>
			<td>Semester</td>
			<td> 			
			<select name = "sem">
			<option vaue = "None">None</option>
			<option value = "1">1st</option>
			<option value = "2">2nd</option>
			<option value = "3">3rd</option>
			<option value = "4">4th</option>
			<option value = "5">5th</option>
			<option value = "6">6th</option>
			<option value = "7">7th</option>
			<option value = "8">8th</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Department</td>
			<td> 			
			<select name = "dept">
			<option vaue = "None">None</option>
			<option value = "cse">CSE</option>
			<option value = "dept">ECE</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Mobile No.</td>
			<td><input type="text" name="mobile" placeholder="Enter Mobile Number" required/> </td>
		</tr>
		<tr>
			<td>Parents Mobile No.</td>
			<td><input type="text" name="parentNumber" placeholder="Enter Parents Mobile" required/> </td>
		</tr>
		<tr>
			<td>Email-Id</td>
			<td><input type="email" name="email" placeholder="Enter Email Id" required/> </td>
		</tr>
	</table>
	<input type="submit" value="submit" name = "submit" id = "submit">	
	
</form>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
	include('../dbcon.php');
	$firstName=$_POST['firstName'];
	$MiddleName=$_POST['MiddleName'];
	$LastName=$_POST['LastName'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$fatherName=$_POST['fatherName'];
	$motherName=$_POST['motherName'];
	$address=$_POST['address'];
	$caste=$_POST['caste'];
	$religion=$_POST['religion'];
	$mobile=$_POST['mobile'];
	$parentNumber=$_POST['parentNumber'];
	$email=$_POST['email'];
	$sem=$_POST['sem'];
	$rollno=$_POST['rollno'];
	$dept=$_POST['dept'];
	$qry = "INSERT INTO `student`(`studentId`, `fName`, `mName`, `lName`, `dob`,`gender`,`fatherName`,`motherName`,`address`,`cast`,`religion`,`semester`,`department`,`mobileNumber`,`parentNumber`,`eMailId`) VALUES ('$rollno','$firstName','$MiddleName','$LastName','$dob','$gender','$fatherName','$motherName','$address','$caste','$religion','$sem','$dept','$mobile','$parentNumber','$email')";

	$run = mysqli_query($con,$qry); 
	echo $run;
	if ($run==TRUE) {
		?>

		<script>
			alert('Data Inserted Successfully.');
		</script>
		<?php
	}
	else {
		?>

		<script>
			alert('Please check the format of your details');
		</script>
		<?php
	}
?>
<?php


}
?>
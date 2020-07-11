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

<div>
<table>
<form ation="updatestudent.php" method="post">
	<tr>
		<th style="color: black">Enter Student Id</th>
		<td><input type="number" name="standerd" placeholder="standerd" required/></td>
		<th style="color: black">Enter Student First Name</th>
		<td><input type="text" name="stufname" placeholder="Enter Student First Name" required/></td>
		<th style="color: black">Enter Student Last Name</th>
		<td><input type="text" name="stulname" placeholder="Enter Student Last Name" required/></td>
		<td colspan="2"><input type="submit" name="submit" value="search"></td>
	</tr>
	
</form>
</table>
<table align="center" width="100%" border="1">
	<tr style="background-color: #000;color: #fff">
		<th>Student Id</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>DOB</th>
		<th>Gender</th>
		<th>Father Name</th>
		<th>Mother Name</th>
		<th>Address</th>
		<th>Caste</th>
		<th>Religion</th>
		<th>Semester</th>
		<th>Department</th>
		<th>Mobile No.</th>
		<th>Parents Mobile No.</th>
		<th>Email Id</th>
	</tr>
	<?php
if (isset($_POST['submit'])) {
	include('../dbcon.php');
	$standerd =$_POST['standerd'];
	$firstName =$_POST['stufname'];
	$lastName =$_POST['stulname'];
	$sql="SELECT * FROM `student` WHERE `studentId`='$standerd' AND `fName` LIKE '%$firstName%' AND `lName` LIKE '%$lastName%'";
	$run = mysqli_query($con,$sql);   
	if (mysqli_num_rows($run)<1) {
		echo "<tr><td colspan='5'>No Record Found</td></tr>";
	}
	else{
		$count=0;
		while ($data =mysqli_fetch_assoc($run)) {
			$count++;
			?>
			<tr align="center">
				<td><?php echo $count; ?></td>
				<td><?php echo $data['studentId'];?></td>
				<td><?php echo $data['fName'];?></td>
				<td><?php echo $data['mName'];?></td>
				<td><?php echo $data['studentId'];?></td>
				<td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
			</tr>

			<?php
		}
	}
}
?>

</table>
</div>
</body>
</html>

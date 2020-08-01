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
<form ation="deletestudent.php" method="post">
	<tr>
		<th style="color: black">Enter Standard</th>
		<td><input type="number" name="standerd" placeholder="standerd" required/></td>
		<th style="color: black">Student First Name</th>
		<td><input type="text" name="stufname" placeholder="Student First Name" required/></td>
		<th style="color: black">Student Last Name</th>
		<td><input type="text" name="stulname" placeholder="Student Last Name" required/></td>
		<td colspan="2"><input type="submit" name="submit" value="search"></td>
	</tr>
	
</form>
</table>
<table align="center" width="80%" border="1">
	<tr style="background-color: #000;color: #fff">
	<tr style="background-color: #000;color: #fff">
		<th>Student Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Delete</th>
	</tr>
	</tr>
	<?php
if (isset($_POST['submit'])) {
	include('../dbcon.php');
	$standerd =$_POST['standerd'];
	$fName =$_POST['stufname'];
	$lName =$_POST['stulname'];
	$sql="SELECT * FROM `student` WHERE `semester`='$standerd' AND `fName` LIKE '%$fName%' AND `lName` LIKE '%$lName%'";
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
				<td><?php echo $data['studentId'];?></td>
				<td><?php echo $data['fName'];?></td>
				<td><?php echo $data['lName'];?></td>
				<td><a href="deleteform.php?sid=<?php echo $data['studentId'];?>">Delete</a></td>
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

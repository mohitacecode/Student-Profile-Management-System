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

<div class="dashboard" style="height:1000px">
	<table style="height:100px" align="center">
		<tr>
			<td>1.</td>
			<td><a href="addstudent.php">
			<button class = "button">Insert Student</button></a></td>
		</tr>
		<tr>
			<td>2.</td>
			<td><a href="updatestudent.php"><button class = "button">Update Student</button></a></td>
		</tr>
		<tr>
			<td>3.</td>
			<td><a href="deletestudent.php">
			<button class = "button">Delete Student</button></a></td></a> </td>
		</tr>
		<tr>
			<td>3.</td>
			<td><a href="ali.php"><button class = "button">Insert Student Previous Record</button></a></td></a> </td>
		</tr>
	</table>
	
</div>

</body>
</html>
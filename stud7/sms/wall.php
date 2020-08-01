<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

textarea {
	width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
table {
  border-collapse: collapse;
  border: 1px solid white;
} 

th,td {
  border: 1px solid white;
}

table.a {
  table-layout: auto;
  width: 180px;  
}

table.b {
  table-layout: fixed;
  width: 180px;  
}

table.c {
  table-layout: auto;
  width: 100%;  
}

table.d {
  table-layout: fixed;
  width: 100%;  
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
<body>
<ul>
  <li><a href="login.php">Admin Login</a></li>
  <li><a href="index.php">HomePage</a></li>
  <li><a class="active" href="wall.php">Student Wall</a></li>
</ul>
<h1> Post on Student Wall</h1>
<form method="post" action="index.php" enctype="multipart/form-data">
	<table border="1"  style="line-height: 140%; width: 100%; color:black; text-align: center;font-style: italic;" >
		<tr>
			<td>Student Id</td>
			<td><input type="text" name="rollno" placeholder="Enter Student ID"> </td>
		</tr>
		<tr>
			<td> Name</td>
			<td><input type="text" name="Name" placeholder="Enter  Name" required/> </td>
		</tr>




		<tr>
			<td>Semester</td>
			<td>
			<select name = "sem">
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
 			   <td>Message</td>
 			   <td><textarea placeholder="contents"  name="msg" cols="40" rows="5"></textarea></td>
		  </tr>

	</table>
	<input type="submit" value="submit" name = "submit" id = "submit">

</form>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
	include('../dbcon.php');
	$Name=$_POST['Name'];
	$sem=$_POST['sem'];
	$rollno=$_POST['rollno'];
	$dept=$_POST['dept'];
	$msg="<pre>$msg</pre>";
	$qry = "INSERT INTO `student`(`studentId`, `Name`, `semester`,`department`, `msg`) VALUES ('$rollno','$Name','$sem','$dept','$msg')";

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

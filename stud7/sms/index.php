<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<style>
	#wall{
		height: 650px;
		width:50%;
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

body {
	background: linear-gradient(#141e30, #243b55);
	height: 1000px
	
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

	</style>
</head>
<body>
<ul>
  <li><a href="login.php">Admin Login</a></li>
  <li><a class="active" href="index.php">HomePage</a></li>
  <li><a href="wall.php">Student Wall</a></li>
</ul>
<div>

<h1 align="center">Welcome to Student Management System</h1>

<form method="post" action="index.php">
<table id="customers" style="width: 30%;" align="center" border="1">
	<tr>
		<td colspan="2" align="center">Student Information</td>
	</tr>
	<tr>
		<td>Choose Semester</td>
		<td>
			<select name="std">
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4th</option>
				<option value="5">5th</option>
				<option value="6">6th</option>
				<option value="7">7th</option>
				<option value="8">8th</option>
				<option value="9">9th</option>
				<option value="10">10th</option>
				<option value="11">11th</option>
				<option value="12">12th</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Enter Rollno.</td>
		<td align="left">
			<input type="text" name="rollno" required/>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info."></td>
	</tr>
</table>
</form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$standard =$_POST['std'];
	$rollno =$_POST['rollno'];
	include('dbcon.php');
	include('function.php');

	showdetails($standard,$rollno);
}
?>
</div>

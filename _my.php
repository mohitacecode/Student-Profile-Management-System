<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>	

<body>
<h1 align="center" style="margin-top: 50px">Admin Login</h1>
<form action="login.php" method="post">
<table align="center" style="margin-top:30px;">
<tr>
<td>Username</td>
<td><input type="text" name="uname"/></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="pass"/></td>

</tr>
<tr align="center"><td colspan="2"><input type="submit" name="login" value="submit"/></td></tr>

</table>
</form>

</body>
</html>

<?php
include('dbcon.php');

if(isset($_POST['login']))
{
 $username=$_POST['uname'];
 $password=$_POST['pass'];
 $qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";﻿
 
 $run= mysqli_query($con,$qry);
 $row = mysqli_num_rows($run);
 if(!$row)
 {

 	echo "Username & Password is not matched";
 }
else
{
$data=mysqli_fetch_assoc($run);
$id=$data['id'];
echo "id = ".$id;
 
}

}

?>


 <!-- <script>
  alert("username or password do not match");
  window.open('login.php','_self');
  </script>-->
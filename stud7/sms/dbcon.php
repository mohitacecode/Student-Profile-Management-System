<?php

	$con = mysqli_connect('127.0.0.1','root','root','Student');
if(!$con)
{
?>
	<h1> 'Not connected'</h1>
<?php
}
if(!mysqli_select_db($con,'sms'))
{
	// echo 'Not selected';
}

?>

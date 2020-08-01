

<html>
<body>
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
<form method="post" action="ali.php" enctype="multipart/form-data">
	<table border="1"  style="line-height: 140%; width: 100%; color:black; text-align: center;font-style: italic;" >
		<tr>
			<td>Student Id</td>
			<td><input type="text" name="rollno" placeholder="Enter Student ID"> </td>
		</tr>
		<tr>
			<td>Tenth Division</td>
			<td><input type="text" name="tenthdivision" placeholder="Enter roll number" required/> </td>
		</tr>
		<tr>
			<td>TenthObtMarks</td>
			<td><input type="text" name="tenthObtMarks" placeholder="Enter tenth obtained marks" required/> </td>
		</tr>
		<tr>
			<td>TenthTotMarks</td>
			<td><input type="text" name="tenthTotMarks" placeholder="Enter tenth total marks" required/> </td>
		</tr>
		<tr>
			<td>Tenth Percent</td>
			<td><input type="text" name="tenthPercent" placeholder="Enter tenth percentage" required/> </td>
		</tr>
		<tr>
		<td>Tenth Board</td>	
		<td><input type="text" name="tenthBoard" placeholder="Enter tenth board" required/> </td>
		</tr>
		<tr>
			<td>Tenth DOR</td>
			<td><input type="date" name="tenthDoR" placeholder="Enter tenth  Date of Registaration" required/> </td>
		</tr>
		<tr>
			<td>Twelve Deg Name</td>
			<td><input type="text" name="twelveDegName" placeholder="Enter twelve Deg Name" required/> </td>
		</tr>
		<tr>
			<td>Twelve Divison</td>
			<td><input type="text" name="twelveDivision" placeholder="Enter roll number of tweleve" required/> </td>
		</tr>
		<tr>
		<td>TwelveObtMarks</td>
			<td><input type="text" name="twelveObtMarks" placeholder="Enter twelve obtained marks" required/> </td>
		</tr>
		<tr>
		<td>TwelveTotMarks</td>
			<td><input type="text" name="twelveTotMarks" placeholder="Enter twelve total marks" required/> </td>
		</tr>
		<tr>
		<td>Twelve Percent</td>
			<td><input type="text" name="TwelvePercent" placeholder="Enter twelve percentage" required/> </td>
		</tr>
		<tr>
		<td>Twelve DOR</td>
			<td><input type="date" name="TwelveDoR" placeholder="Enter twelve  Date of Registaration" required/> </td>
		</tr>
		<tr>
			<td>jee Exam Id</td>
			<td><input type="text" name="jeeExamID" placeholder="Enter jee exam id" required/> </td>
		</tr>
		<tr>
			<td>jee Total Score</td>
			<td><input type="text" name="jeeTotalScore" placeholder="Enter jee total score" required/> </td>
		</tr>
		<tr>
			<td>jee CRL Rank</td>
			<td><input type="text" name="jeeCRLRank" placeholder="Enter jee CRL Rank" required/> </td>
		</tr>
		<tr>
			<td>jee Caste Rank</td>
			<td><input type="text" name="jeeCasteRank" placeholder="Enter jee Caste Rank" required/> </td>
		</tr>
		<tr>
			<td>jee State Code </td>
			<td><input type="text" name="jeeStateCode" placeholder="Enter jee State Code" required/> </td>
		</tr>
	    <tr>
			<td>jee DoR </td>
			<td><input type="text" name="jeeDoR" placeholder="Enter jee Date of registration" required/> </td>
		</tr>
		<tr>
			<td>otherDegName </td>
			<td><input type="text" name="otherDegName" placeholder="Enter other Designation" required/> </td>
		</tr>
		<tr>
			<td>otherDivision </td>
			<td><input type="text" name="otherDivision" placeholder="Enter other Division" required/> </td>
		</tr>
		<tr>
			<td>otherObtMarks </td>
			<td><input type="text" name="otherObtMarks" placeholder="Enter other obtained marks" required/> </td>
		</tr>
		<tr>
			<td>otherTotMarks </td>
			<td><input type="text" name="otherTotMarks" placeholder="Enter other total marks" required/> </td>
		</tr>
		<tr>
			<td>otherPercent </td>
			<td><input type="text" name="otherPercent" placeholder="Enter other percentage" required/> </td>
		</tr>
		<tr>
			<td>otherBoard </td>
			<td><input type="text" name="otherBoard" placeholder="Enter other board" required/> </td>
		</tr>
		<tr>
			<td>otherDoR </td>
			<td><input type="text" name="otherDoR" placeholder="Enter other date of registration" required/> </td>
		</tr>
	</table>
	<input type="submit" value="submit" name = "submit" id = "submit">	
	
</form>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
	include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$tenthdivision=$_POST['tenthdivision'];
	$tenthObtMarks=$_POST['tenthObtMarks'];
	$tenthTotMarks=$_POST['tenthTotMarks'];
	$tenthPercent=$_POST['tenthPercent'];
	$tenthBoard=$_POST['tenthBoard'];
	$tenthDoR=$_POST['tenthDoR'];
	$twelveDegName=$_POST['twelveDegName'];
	$twelveDivision=$_POST['twelveDivision'];
	$twelveObtMarks=$_POST['twelveObtMarks'];
	$twelveTotMarks=$_POST['twelveTotMarks'];
	$TwelvePercent=$_POST['TwelvePercent'];
	$TwelveDoR=$_POST['TwelveDoR'];
	$jeeExamID=$_POST['jeeExamID'];
	$jeeTotalScore=$_POST['jeeTotalScore'];
	$jeeCRLRank=$_POST['jeeCRLRank'];
	$jeeCasteRank=$_POST['jeeCasteRank'];
	$jeeStateCode=$_POST['jeeStateCode'];
	$jeeDoR=$_POST['jeeDoR'];
	$otherDegName=$_POST['otherDegName'];
	$otherDivision=$_POST['otherDivision'];
	$otherObtMarks=$_POST['otherObtMarks'];
	$otherTotMarks=$_POST['otherTotMarks'];
	$otherPercent=$_POST['otherPercent'];
	$otherBoard=$_POST['otherBoard'];
	$otherDoR=$_POST['otherDoR'];

	$qry = "INSERT INTO `studentPrevRecord`(`studentID`, `tenthDivision`, `tenthObtMarks`, `tenthTotMarks`, `tenthPercent`,`tenthBoard`,`tenthDoR`,`twelveDegName`,`twelveObtMarks`,`twelveTotMarks`,`TwelvePercent`,`TwelveDoR`,`jeeExamID`,`jeeTotalScore`,`jeeCRLRank`,`jeeCasteRank`,`jeeStateCode`,`jeeDoR`,`otherDegName`,`otherDivision`,`otherObtMarks`,`otherTotMarks`,`otherPercent`,`otherBoard`,`otherDoR`) VALUES ('$rollno','$tenthdivision','$tenthObtMarks','$tenthTotMarks','$tenthPercent','$tenthBoard','$tenthDoR','$tweleveDegName','$tweleveDivision','$twelveObtMarks','$tweleveTotMarks','$TwelvePercent','$TwelveDoR','$jeeExamID','$jeeTotalScore','$jeeCRLRank','$jeeCasteRank','$jeeStateCode','$jeeDoR','$otherDegName','$otherDivision','$otherObtMarks','$otherTotMarks','$otherPercent','$otherBoard','$otherDoR')";

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

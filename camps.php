<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

$Camp_Id=$POST['C_Id'];
$Emp_Id=$_POST['E_id'];
$Location=$_POST['location'];
$Name=$_POST['Name'];

$query="INSERT INTO CAMPS(ID, EMPLOYEE_ID, LOCATION, NAME) VALUES ('$Camp_Id','$Emp_Id','$Location','$Name')";
$res=mysqli_query($mysql_id,$query);
if($res>0)
	{
		echo "Successfull";
	?>
	<!-- <meta http-equiv="refresh" content="2;url=camps disp.php"/> -->
	<?php 
	}
	else
		echo "Value not inserted".$mysql_id->error;
	?>


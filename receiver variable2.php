<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

//$mysql_id=include('connection.php');
$R_Id=$_POST['R_Id'];
$Emp_Id=$_POST['E_id'];
$Quant=$_POST['quant'];
$Hospital=$_POST['h_name'];
$Blood_type=$_POST['b_type'];
$R_date=$_POST['r_date'];
$Doctor=$_POST['doctor'];
$query="INSERT INTO `RECEIVER_VARIABLE`(`RECEIVER_ID`, `EMPLOYEE_ID`, `CONSULTANT_DOCTOR`, `REQUIRED_QUANTITY`, `HOSPITAL_NAME`, `REQUIRED_BLOODGROUP`, `REQUIRED_DATE`) VALUES ('$R_Id','$Emp_Id','$Doctor','$Quant','$Hospital','$Blood_type','$R_date')";
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=receiver variable disp.php"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>


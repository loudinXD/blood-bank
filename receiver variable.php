<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

//$mysql_id=include('connection.php');
$R_Id=$_POST['R_Id'];
$Emp_Id=$_POST['E_id'];
$Quant=$_POST['quant'];
$Hospital=$_POST['h_name'];
$Blood_type=$_POST['b_type'];
$R_date=$_POST['r_date']
$Doctor=$_POST['doctor'];
$query="INSERT INTO `EMPLOYEE_INFO` (`ID`, `NAME`, `DOB`, `EMAIL`, `PHONE`, `SEX`, `DESIGNATION`, `PASSWORDS`) VALUES ('$Emp_Id', '$Name', '$DOB', '$Email', '$Mobile_No', '$Gender', '$desig', '$pswd');"
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=employee entry.html"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>


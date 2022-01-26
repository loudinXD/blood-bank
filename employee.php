<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

$Emp_Id=$_POST['Id'];
$Name=$_POST['Name'];
$Address=$_POST['Address'];
$Gender=$_POST['Gdr'];
$Mobile_No=$_POST['Mobile_no'];
$DOB=$_POST['Birth'];
$Email=$_POST['Email'];
$pswd=$_POST['Pwd'];
$desig=$_POST['Designation'];

$query="INSERT INTO EMPLOYEE_INFO (ID, NAME, DOB, EMAIL, PHONE, SEX, DESIGNATION, PASSWORDS) VALUES ('$Emp_Id', '$Name', '$DOB', '$Email', '$Mobile_No', '$Gender', '$desig', '$pswd')";
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?>
<meta http-equiv="refresh" content="2;url=employee entry.php"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>


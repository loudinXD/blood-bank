<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

$Emp_Id=$_POST['Id'];

$pswd=$_POST['Pwd'];

$query="UPDATE `EMPLOYEE_INFO` SET `PASSWORDS`='$pswd' WHERE `ID` = '$Emp_Id'";
print $query;
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=employee entry.html"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>

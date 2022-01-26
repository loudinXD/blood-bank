<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
$query="SELECT * FROM `EMPLOYEE_INFO` ;";
$res=mysqli_query($mysql_id,$query);
$Id=$_POST['delete_emp_id'];
$query="DELETE FROM `EMPLOYEE_INFO` WHERE ID = '$Id'";
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=admin.php"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>
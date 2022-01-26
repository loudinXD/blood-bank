<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

$Id=$_POST['Id'];
$Camp=$_POST['C_Id'];
$Emp_Id=$_POST['E_id'];
$Weight=$_POST['weight'];
$Last_donated=$_POST['last_donated'];
$Times=$_POST['times'];
$D_date=$_POST['d_date'];
$Issues=$_POST['issues'];
$query="INSERT INTO `DONOR_VARIABLE`(`DONOR_ID`, `CAMP_ID`, `EMPLOYEE_ID`, `HELATH_ISSUES`, `WEIGHT`, `LAST_DONATED`, `TIMES_DONATED`, `DONATED_DATE`) VALUES ('$Id','$Camp','$Emp_Id','$Issues','$Weight','$Last_donated','$Times','$D_date')";
$res=mysqli_query($mysql_id,$query);
echo "$res"; 
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=donor variable disp.php"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>

<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
//$mysql_id=include('connection.php');
$Emp_Id=$_POST['uid'];
$Password=$_POST['pswd'];

$query="select count(*) from EMPLOYEE_INFO where ID='$Emp_id' and PASSWORDS='$Password' ";


$res=mysqli_query($mysql_id,$query);
while($arr=mysqli_fetch_row($res))
{
if($arr>=1)
{
	echo "<center><h1>Successfull <h2>wait for sometimes page will be Redirected</h2></h1></center>";
?>
<meta http-equiv="refresh" content="2;url=home.php"/> 
<?php
}
else
{
	echo "<center><h1>User Id And Password Does not match<h2>wait for sometimes page will be Redirected</h2></h1></center>".$mysql_id->error;
?>
<!-- <meta http-equiv="refresh" content="2;url=employee.html"/>  -->
<?php
}
}
?>


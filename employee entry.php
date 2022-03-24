<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
$uid=$_POST['uid'];
$pswd=$_POST['pswd'];
$query="select ID from EMPLOYEE_INFO where ID='$uid' and PASSWORDS='$pswd'";
$res=mysqli_query($mysql_id,$query);
if($res->num_rows>0)
{
	echo "<center><h1>Login Successfull </br><h2>wait for sometimes page will be Redirected</h2></h1></center>s";
?><meta http-equiv="refresh" content="2;url=home.php">
<?php
}
else
{
echo "<center><h1>Login Failed</br><h2>wait for sometimes page will be Redirected</h2></h1></center>".$mysql_id->error;
?>
<center><h1>Click here to update password</br><h2>
<center><h3><a button href="up emp password.php">FORGOT PASSWORD</button></a></center>
<meta http-equiv="refresh" content="2;url=employee.html">
<?php
}
?>




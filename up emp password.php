<html>
    <head><title>BLOOD BANK</title></head>
    <!DOCTYPE html> 
    <html>
    <body>
                <center><h1>EMPLOYEE UPDATION FORM</h1></center>
                <form action="" method="post">
                        <center><b>Enter the id:<input type="text" name="Id"  required /></b></center><br />
                        <center><b>Create a new password:<input type="password" name="Pwd" required /></b></center><br />

                        <center><input type="submit" value="submit"></center>
                        <br />
                </form>
        </body>
    </html>
    <?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

$Emp_Id=$_POST['Id'];

$pswd=$_POST['Pwd'];

$query="UPDATE `EMPLOYEE_INFO` SET `PASSWORDS`='$pswd' WHERE ID = $Emp_Id";
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=employee entry.html"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>


<html>
    <head><title>BLOOD BANK</title></head>
    <!DOCTYPE html> 
    <html>
    <body>
                <center><h1>EMPLOYEE UPDATION FORM</h1></center>
                <form action="" method="post">
                        <center><b>Enter the id:<input type="text" name="Id"  required /></b></center><br />
                        <center><b>Enter your name:<input type="text" name="Name" required /></b></center><br />
                        <center><b>Enter your address:<input type="text" name="Address" required /></b></center><br />
                        <center><b>Enter your birth-date:<input type="date" name="Birth" required /></b></center>
                        <center><b><p>Enter your gender:</p></b>
                                <b><input type="radio" name="Gdr" value="male">MALE</b>
                                <b><input type="radio" name="Gdr" value="female">FEMALE</b>
                        </center></br>
                        <center><b>Enter your phone number:<input type="text" name="Mobile_no" pattern="[0-9]{10}"></b></center><br />
                        <center><b>Enter designation:<input type="text" name="Designation"></b></center><br />
                        <center><b>Enter your Email:<input type="text" name="Email" required /></b></center><br />
                        <center><b>Create a new password:<input type="password" name="Pwd" required /></b></center><br />

                        <center><input type="submit" value="submit"></center>
                        <br />
                </form>
        </body>
    </html>
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

$query="UPDATE `EMPLOYEE_INFO` SET `NAME`='$Name',`DOB`='$DOB',`EMAIL`='$Email',`PHONE`='$Mobile_No',`SEX`='$Gender',`DESIGNATION`='$desig',`PASSWORDS`='$pswd',`ADDRESS`='$Address' WHERE ID = $Emp_Id";
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?><meta http-equiv="refresh" content="2;url=up emploee.php"/>
<?php }
else
	echo "Value not inserted".$mysql_id->error;
?>


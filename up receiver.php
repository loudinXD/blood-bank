<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
$query="SELECT * FROM `RECEIVER_STATIC` ;";
$res=mysqli_query($mysql_id,$query);
?>
<table align="center" border="1px" style="width:600px; line-height:30px;">
    <tr>
        <th colspan="9">
            <h2>INVENTORY</h2>
        </th>
    </tr>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Date of birth</th>
        <th>Email</th>
        <th>Mobile number</th>
        <th>SEX</th>
        <th>Address</th>
    </tr>
    <?php
		while($rows=mysqli_fetch_assoc($res))
		{
	?>
    <tr>
        <td><?php echo $rows['ID'];?></td>
        <td><?php echo $rows['NAME'];?></td>
        <td><?php echo $rows['DOB']; ?></td>
        <td><?php echo $rows['EMAIL']; ?></td>
        <td><?php echo $rows['PHONE']; ?></td>
        <td><?php echo $rows['SEX'];?></td>
        <td><?php echo $rows['ADDRESS']; ?></td>
    </tr>
    <?php
		}
		?>
</table>
<!DOCTYPEhtml>
    <html>

    <head>
        <title>BLOOD BANK</title>
    </head>
    <!DOCTYPE html>
    <html>

    <body>
        <center>
            <h1>RECEIVER UPDATION FORM</h1>
        </center>
        <form action="" method="post">
            <center><b>Create receiver's id:<input type="text" name="Id" required /></b></center><br />
            <center><b>Enter receiver's name:<input type="text" name="Name" required /></b></center><br />
            <center><b>
                    <p>Enter gender:</p>
                </b>
                <b><input type="radio" name="gdr" value="male">MALE</b>
                <b><input type="radio" name="gdr" value="female">FEMALE</b>
            </center>
            <center><b>Enter your birth-date:<input type="date" name="birth" required /></b></center></br>
            <center><b>Enter address:<input type="text" name="Address" required /></b></center><br />
            <center><b>Enter your phone number:<input type="text" name="Mobile_no" pattern="[0-9]{10}" required></b>
            </center><br />
            <center><b>Enter your Email:<input type="text" name="Email" required /></b></center><br />
            <!-- <center><b>Create a new password:<input type="password" name="pwd" required /></b></center><br />             -->
            <!-- <center><b>Enter blood broup:<input type="text" name="bg" required /></b></center><br /> -->
            <center><input type="submit" value="submit"></center><br />
        </form>
    </body>

    </html>
    <?php
    
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");

$Id=$_POST['Id'];
$Name=$_POST['Name'];
$Address=$_POST['Address'];
$Gender=$_POST['gdr'];
$Mobile=$_POST['Mobile_no'];
$DOB=$_POST['birth'];
$Email=$_POST['Email'];
$query="UPDATE `RECEIVER_STATIC` SET `NAME`='$Name',`SEX`='$Gender',`DOB`='$DOB',`PHONE`='$Mobile',`EMAIL`='$Email',`ADDRESS`='$Address' WHERE ID = $Id";
$res=mysqli_query($mysql_id,$query);
if($res>0)
{
	echo "Successfull";
?>
    <meta http-equiv="refresh" content="2;url=up receiver.php" />
    <?php }
else
	echo "Value not inserted".$mysql_id->error;
?>
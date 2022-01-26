<center>
    <h3>Delete employee's account</h3>
</center>
<?php
		$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
		$query="SELECT * FROM `EMPLOYEE_INFO` ;";
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
        <th>Designation</th>
        <th>Passwords</th>
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
        <td><?php echo $rows['DESIGNATION']; ?></td>
        <td><?php echo $rows['PASSWORDS']; ?></td>
        <td><?php echo $rows['ADDRESS']; ?></td>
    </tr>
    <?php
		}
		?>
</table>
<center><form action="employee del.php" method="POST">
    <div class="emp">
        <label for="">Deleteing employee</label>
        <input type="text" name="delete_emp_id" class="form-control">
    </div>
    <div class="froum-group mb-3">
        <button type="submit" name="emp_delete_btn" class="btn btn-primary">Delete Data</button>
    </div>
</form></center>



<center>
    <h3>Delete donor's account</h3>
</center>
<?php
		$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
		$query="SELECT * FROM `DONOR_STATIC`; ";
		$res=mysqli_query($mysql_id,$query);
	?>
<table align="center" border="1px" style="width:600px; line-height:30px;">
    <tr>
        <th colspan="8">
            <h2>INVENTORY</h2>
        </th>
    </tr>
    <tr>
        <th>DONOR ID</th>
        <th>DONOR NAME</th>
        <th>GENDER</th>
        <th>BIRTH DATE</th>
        <th>ADDRESS</th>
        <th>MOBILE NUMBER</th>
        <th>EMAIL</th>
        <th>BLOOD GROUP</th>
    </tr>
    <?php
		while($rows=mysqli_fetch_assoc($res))
		{
	?>
    <tr>
        <td><?php echo $rows['ID']; ?></td>
        <td><?php echo $rows['NAME']; ?></td>
        <td><?php echo $rows['SEX']; ?></td>
        <td><?php echo $rows['DOB']; ?></td>
        <td><?php echo $rows['ADDRESS']; ?></td>
        <td><?php echo $rows['BLOODGROUP']; ?></td>
        <td><?php echo $rows['PHONE_NUMBER']; ?></td>
        <td><?php echo $rows['EMAIL']; ?></td>

    </tr>
    <?php
		}
		?>
</table>
<center><form action="donor del.php" method="POST">
    <div class="emp">
        <label for="">Deleteing donor</label>
        <input type="text" name="delete_don_id" class="form-control">
    </div>
    <div class="froum-group mb-3">
        <button type="submit" name="don_delete_btn" class="btn btn-primary">Delete Data</button>
    </div>
</form></center>



<center>
    <h3>Delete receiver's account</h3>
</center>
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
<center><form action="receiver del.php" method="POST">
    <div class="emp">
        <label for="">Deleteing receiver</label>
        <input type="text" name="delete_rev_id" class="form-control">
    </div>
    <div class="froum-group mb-3">
        <button type="submit" name="rev_delete_btn" class="btn btn-primary">Delete Data</button>
    </div>
</form></center>
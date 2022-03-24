<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
$query="SELECT * FROM `EMPLOYEE_INFO` ;";
$res=mysqli_query($mysql_id,$query);
if($res->num_rows>0)
{
?>
<html>
	<title><head>Fetch from database</head></title>
<body>
<link rel="stylesheet" href="common.css">
        <div class="nav">
                <div class="topnav">
                        <a class="active" href="welcome.html">Home</a>
                        <a href="contact.html">Contact</a>
                         
                </div>
        </div>
	<table align ="center" border="1px" style ="width:600px; line-height:30px;">
		<tr>
			<th colspan = "9"><h2>INVENTORY</h2></th>
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
			<td><?php echo $rows['DESGNATION']; ?></td>
            <td><?php echo $rows['PASSWORDS']; ?></td>
            <td><?php echo $rows['ADDRESS']; ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>
<?php
}
else
	echo "Empty set";
?>


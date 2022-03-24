<</p><?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
//$mysql_id=include('conn.php')


$query="SELECT * FROM `RECEIVER_VARIABLE`; ";
$res=mysqli_query($mysql_id,$query);
if($res->num_rows>0)
{
?>
<html>
<link rel="stylesheet" href="common.css">
        <div class="nav">
                <div class="topnav">
                        <a class="active" href="welcome.html">Home</a>
                        <a href="contact.html">Contact</a>
                         
                </div>
        </div>
		<style>body {
        background-image:
            url("images/8.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
	h1 {
        color: aquamarine;
        text-align: center;
        background-color: black;
        height: 50px;
        opacity:0.8;
        width :800px;

    }</style>
	<center><h1  align ="center" >Received blood data</h1></center>
<body>
	<table align ="center" border="1px"  style ="color:yellow;background-color:black;opacity:0.7; line-height:30px; line-height:30px;">
		<tr>
			<th colspan = "8"><h2>INVENTORY</h2></th>
		</tr>
		<tr>
			<th>RECEIVER ID</th>
            <th>EMPLOYEE ID</th>
            <th>CONSULTANT DOCTOR</th>
            <th>REQUIERED QUANTITY</th>
            <th>HOSPITAL NAME</th>
            <th>REQUIRED BLOODGROUP</th>
            <th>DATE OF RECEIVING</th>
		</tr>
	<?php
		while($rows=mysqli_fetch_assoc($res))
		{
	?>
			<tr>
				<td><?php echo $rows['RECEIVER_ID']; ?></td>
				<td><?php echo $rows['EMPLOYEE_ID']; ?></td>
                <td><?php echo $rows['CONSULTANT_DOCTOR']; ?></td>
                <td><?php echo $rows['REQUIRED_QUANTITY']; ?></td>
                <td><?php echo $rows['HOSPITAL_NAME']; ?></td>
                <td><?php echo $rows['REQUIRED_BLOODGROUP']; ?></td>
                <td><?php echo $rows['REQUIRED_DATE']; ?></td>
				
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








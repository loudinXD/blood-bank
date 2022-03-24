<html>
    <form action="procedure.php" method="post">
<center><h2 style='background-color:black;color:#0000ff;opacity:0.9;height:30px'>ENTER THE TYPE OF BLOOD TO SEE THE NUMBER OF DONATIONS</h1></center>
<center><select name = "search_id">
                                        <option selected>TYPE</option>
                                        <option value = "A+">A+</option>
                                        <option value = "A-">A-</option>
                                        <option value = "B+">B+</option>
                                        <option value = "B-">B-</option>
                                        <option value = "AB+">AB+</option>
                                        <option value = "AB-">AB-</option>
                                        <option value = "O+">O+</option>
                                        <option value = "O-">O-</option>
                                     </select>
<input type="submit" value="submit">
</center>
</form>
	</html>


<?php
$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
$query="SELECT `name`,`DONOR_ID`, `CAMP_ID`, `EMPLOYEE_ID`, `HELATH_ISSUES`, `WEIGHT`, `LAST_DONATED`, `TIMES_DONATED`, `DONATED_DATE`, `QUANTITY`, `BLOOD_TYPE` FROM `donor_variable` NATURAL JOIN donor_static where donor_variable.DONOR_ID=donor_static.ID; ";
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
            url("images/12.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }</style>
	<h1 align ="center">BLOOD DONATIONS</h1>
<body>
	<table align ="center" border="3x" style ="color:white;background-color:black;opacity:0.7; line-height:30px;">
		<tr>
			<th colspan = "9"><h2>INVENTORY</h2></th>
		</tr>
		<tr>
            <th>NAME </th>
			<th>DONOR ID</th>
			<th>CAMP ID</th>
            <th>EMPLOYEE ID</th>
            <th>HEALTH ISSUE</th>
            <th>WEIGHT</th>
            <th>LAST DONATED</th>
            <th>TIMES DONATED</th>
            <th>DONATED DATE</th>
            <th>QUANTITY</th>
            <th>BLOOD TYPE</th>
		</tr>
	<?php
		while($rows=mysqli_fetch_assoc($res))
		{
	?>
			<tr><td><?php echo $rows['name']; ?></td>
				<td><?php echo $rows['DONOR_ID']; ?></td>
				<td><?php echo $rows['CAMP_ID']; ?></td>
                <td><?php echo $rows['EMPLOYEE_ID']; ?></td>
                <td><?php echo $rows['HELATH_ISSUES']; ?></td>
                <td><?php echo $rows['WEIGHT']; ?></td>
                <td><?php echo $rows['LAST_DONATED']; ?></td>
                <td><?php echo $rows['TIMES_DONATED']; ?></td>
				<td><?php echo $rows['DONATED_DATE']; ?></td>
                <td><?php echo $rows['QUANTITY']; ?></td>
                <td><?php echo $rows['BLOOD_TYPE']; ?></td>
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


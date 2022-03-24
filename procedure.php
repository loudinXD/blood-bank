
<?php

$mysql_id=mysqli_connect("localhost","root","","bloodbank_db");
$search_idd=$_POST['search_id'];
$queryd = "CALL BLOOD_TYPE_COUNTER('$search_idd');";
$res=mysqli_query($mysql_id,$queryd);
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
            <th>NO OF PEOPLE WHO DONATED ARE </th>
			
		</tr>
	<?php
		while($rows=mysqli_fetch_assoc($res))
		{
	?>
			<tr><td><?php echo $rows['NUM']; ?></td>
				
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
<?php
$conn=mysqli_connect("localhost","root","","bloodbank_db");
if(mysqli_connect_error())
{
    echo "error";
	die("connection failed due to ".mysqli_connect_error());
}
else
{
	echo "";
}
?>
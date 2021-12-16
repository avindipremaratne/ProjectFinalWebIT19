<?php 

$con=mysqli_connect("localhost","root","","premco");
if(mysqli_connect_errno($con))
{
	echo"Failed to connect MYSQL:".mysqli_connect_error();
}
else
{
	//echo"Success!!!:";
}
?>

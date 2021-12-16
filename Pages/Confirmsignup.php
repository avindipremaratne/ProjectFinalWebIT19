<?php 
include ("ConnectDB.php");
?>
<?php
$_Firstname=$_POST["txtfname"];
$_Lastname=$_POST["txtlname"];
$_Email=$_POST["txtemail"];
$_Password=$_POST["txtpassword"];
$_Mobile=$_POST["txtcontact"];

	
$insertSQL = "INSERT INTO signup VALUES('".$_Firstname."','".$_Lastname."',
'".$_Email."','".$_Password."','".$_Mobile."')";
if(!mysqli_query($con,$insertSQL))
{
die("<font size='+5'color='#FF0000'>ERROR OCCURED IN SIGN UP!!!</font>".mysqli_error($con));
}
else
{;
}
echo '<script language="javascript">';
echo 'alert("YOU HAVE SIGN UP SUCCESSFULLY")';
echo '</script>';
?>



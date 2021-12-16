<?php 
include ("ConnectDB.php");
?>
<?php 
$_Name=$_POST["txturname"];
$_Email=$_POST["txturmail"];
$_Phone=$_POST["txturphone"];
$_Message=$_POST["txturmessage"];

$insertSQL = "INSERT INTO contact VALUES('".$_Name."','".$_Email."',
'".$_Phone."','".$_Message."')";
if(!mysqli_query($con,$insertSQL))
{
die("<font size='+5'color='#FF0000'>ERROR OCCURED IN ADDING DETAILS!!!</font>".mysqli_error($con));
}
else
{
echo '<script language="javascript">';
echo 'alert("DETAILS ADDED SUCCESSFULLY")';
echo '</script>';
}

?>


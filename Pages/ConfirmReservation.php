<?php 
include ("ConnectDB.php");
?>

<?php 
session_start();
?>
<?php 

$_id=$_SESSION['uid'] ;

$_userid=$_POST["txtid"];
$_name=$_POST["txtname"];
$_email=$_POST["txtemail"];
$_contactno=$_POST["txtcontact"];
$_modelno=$_POST["txtmodelno"];
$_datetime=$_POST["date"];

?>
<?php
if (strlen($_contactno) > 10)
{
	?>
   <script type="text/javascript">
    alert("Contact Number Too Long");
    window.location.href = "Home.php";
  </script>
  <?php
}


if ($_contactno==null)
{
	?>
   <script type="text/javascript">
    alert("Please Fill the Details");
    window.location.href = "Home.php";
  </script>
<?php
}
$insertSQL = "INSERT INTO reservations VALUES('0','"  .$_userid."','".$_name."','".$_email."','".$_contactno."','".$_modelno."','".$_datetime. "')";
if(!mysqli_query($con,$insertSQL))
{
die("Error!!".mysqli_error($con));
}
else
{
?>
  <script type="text/javascript">
    alert("RESERVATION SUCCESSFULL!! Your reservation will be cancelled after 2 WEEKS if you have not purchased the item from PREMCO.");
    window.location.href = "Home.php";
  </script>
<?php
}
?>


<?php 
include("ConnectDB.php");
?>
<?php 

session_start();	

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 

$_modelno=$_SESSION["model"];

$deleteSQL = "DELETE FROM stocks WHERE Model_No= '$_modelno'";
if(!mysqli_query($con,$deleteSQL))
{
	?>
	 <script language="javascript">;
      alert("Error");
      </script>;
      <?php
	   die;
}
else
{
	?>
 <script language="javascript">;
  alert("Item Deleted Successfully");
  window.location.href = "adminreservations.php"; 
  </script>;
<?php
}
?>
</body>
</html>
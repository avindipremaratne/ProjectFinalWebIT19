<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="../Images/logo1.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<?php 
include ("ConnectDB.php");
session_start();
?>
       <?php 
       $id=$_POST["txtid"];
       $password=$_POST["txtpassword"];
		
		
$_SESSION['uid']=$_POST["txtid"];

       $LoginSQL = "SELECT * FROM users WHERE Email = '$id'
       and Password = '$password'";
       $result = mysqli_query($con,$LoginSQL); 
       $row= mysqli_fetch_array($result);
       if(!empty($row['Email']) AND !empty($row['Password'])) 
       { 
      // $_SESSION['User_ID'] = $row['Password'];
       echo '<script language="javascript">';
       echo 'alert("LOGIN SUCCESSFUL")';
       echo '</script>';
       header("Location:Home.php"); 
       } 
       else{
		   ?>
	  <script type="text/javascript">
    alert("LOGIN ERROR");
    window.location.href = "Login.php";
  </script>
<?php
}
?>

       

















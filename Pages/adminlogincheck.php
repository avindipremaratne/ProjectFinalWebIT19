<?php 
session_start();
?>
<?php 
include ("ConnectDB.php");
?>
       <?php 
       $id=$_POST["txtid"];
       $password=$_POST["txtpassword"];
		
		
$_SESSION['id']=$_POST["txtid"];

       $LoginSQL = "SELECT * FROM admin WHERE Username = '$id'
       and Password = '$password'";
       $result = mysqli_query($con,$LoginSQL); 
       $row= mysqli_fetch_array($result);
       if(!empty($row['Username']) AND !empty($row['Password'])) 
       { 
      // $_SESSION['User_ID'] = $row['Password'];
       echo '<script language="javascript">';
       echo 'alert("LOGIN SUCCESSFUL")';
       echo '</script>';
       header("Location:adminreservations.php"); 
       } 
       else{
	   echo '<script language="javascript">';
       echo 'alert("SORRY...INVALID LOGIN")';
       echo '</script>';
	   }		
       ?>

















</body>
</html>
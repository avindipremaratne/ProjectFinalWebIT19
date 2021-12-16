<?php 
session_start();
?>
<?php 
include ("ConnectDB.php");
?>
       <?php 
       $id=$_POST["txtid"];
       $password=$_POST["txtpassword"];
		
		
$_SESSION['uid']=$_POST["txtid"];

       $LoginSQL = "SELECT * FROM users WHERE User_ID = '$id'
       and Password = '$password'";
       $result = mysqli_query($con,$LoginSQL); 
       $row= mysqli_fetch_array($result);
       if(!empty($row['User_ID']) AND !empty($row['Password'])) 
       { 
      // $_SESSION['User_ID'] = $row['Password'];
       echo '<script language="javascript">';
       echo 'alert("LOGIN SUCCESSFUL")';
       echo '</script>';
       header("Location:Customerbuyform.php"); 
       } 
       else{
	   echo '<script language="javascript">';
       echo 'alert("SORRY...INVALID LOGIN")';
       echo '</script>';
	   }		
       ?>

















</body>
</html>
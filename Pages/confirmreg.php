<?php 
include("ConnectDB.php");
?>

<?php 
$_name = $_POST["txtname"];
$_email = $_POST["txtemail"];
$_password = $_POST["txtpassword"];
$_cpassword = $_POST["txtconfirm"];

?>
<?php 
if ($_password != $_cpassword) {
	?>
 <script language="javascript">;
  alert("Password do not match");
   window.location.href = "Register.php";
  </script>;
<?php 
}

else if(($_name==null)&&($_email==null)&& ($_password==null) && ($_cpassword==null))
		{
			?>
		<script language="javascript">;
        alert("Please Fill the Details!");
		  window.location.href = "Register.php";
        </script>;
        <?php 
			}

else if( (!filter_var($_email, FILTER_VALIDATE_EMAIL)) && ($_email==null) )
{
	?>
	 <script language="javascript">;
      alert("Please Fill the Details!");
	    window.location.href = "Register.php";
       </script>;
       <?php
	}
	
		
else
{
$insertSQL="INSERT INTO users VALUES('0','".$_name."','".$_email."','".$_cpassword. "')";

if(!mysqli_query($con,$insertSQL))
{
	echo  "User Adding Error".mysqli_error($con)."</div>";	
	
	die ;
	
}

else
{
	 $result=mysqli_query($con,"SELECT * FROM users where Email='".$_email."'");
	 if(!$result)
{
	echo "Database query execution fail";
}
 else
		  {
			  while($row=mysqli_fetch_array($result))
			{
?>
  <script type="text/javascript">
    alert("REGISTRATION SUCCESSFULL!!");
    window.location.href = "Home.php";
  </script>
<?php
 //echo '<script language="javascript">';
        //echo 'alert("Registration Successful! Your username is""'.$row['User_ID'].'")';
       
			}
			 //echo '</script>';
		  }
}
}
?>
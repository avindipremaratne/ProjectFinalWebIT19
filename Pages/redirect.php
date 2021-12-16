<?php 
if(isset($_POST['button'])){
	foreach($_POST['button'] as $key=>$value)
	{
		if($key==1)
		{
			header("Location:adminreservations.php");
			$uid=$_COOKIE["uid"];
			
		}
		if($key==2)
		{
			
			header("Location:editdelete.php");
			$rid=$_COOKIE["rid"];
		}
		
		if($key==3)
		{
			
			
			$rid=$_COOKIE["rid"];
			header("Location:delete.php");
		}
		
	}
}
?>


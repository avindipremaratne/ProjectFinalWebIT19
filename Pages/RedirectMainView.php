<?php 
if(isset($_POST['mwbtn'])){
	foreach($_POST['mwbtn'] as $key=>$value)
	{
		if($key==1)
		{
			header("Location:Home.php");
		}
		if($key==2)
		{
			header("Location:Home.php");
		}
		if($key==3)
		{
			header("Location:About Us (2).php");
		}
		if($key==4)
		{
			header("Location:Products.php");
		}
		if($key==5)
		{
			header("Location:Register.php");
		}
		if($key==7)
		{
			header("Location:Contactus.php");
		}
		
	}
}
?>


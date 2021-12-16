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
	if(isset($_POST["btnsbutton"]))
	{
		foreach($_POST['btnsbutton'] as $key => $value)
		{
			if($key==2)
			{
				$_SESSION["id"]=$_POST["txtid"];	
							
				
				
			header("Location:reservationdelete.php");
				}
									
				if($key==2)
			{
				$_SESSION["cid"]=$_POST["txtid"];						
				
				
			header("Location:confirmcusdelete.php");
				}	
				
				if($key==3)
			{
				$_SESSION["model"]=$_POST["cmbmodel"];					
				
				
			header("Location:deleteitem.php");
				}	
										
			}
	}
?>
</body>
</html>
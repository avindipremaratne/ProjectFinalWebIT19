<?php
include ("ConnectDB.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="CSS.css">
    <link rel="stylesheet" href="confirmproductcss.css">
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 155px;
	top: 51px;
	width: 64px;
	height: 29px;
	z-index: 1;
}
</style>
</head>

<body>

  <table width="1347" height="auto" border="0" cellpadding="2px">
    <tr>
     <td width="1347" height="40">
    <?php include 'Mainheader.php'; ?>
     </td>
    </tr>
    <br />
    
    <tr>
      <td height="40">
 <?php include 'Mainheader1.php'; ?>
      </td>
    </tr>
    <?php 
$_idd=$_POST["textbb"];
if (isset($_SESSION['unamee'])) {

    // it does; output the message
	$_unamee=$_SESSION["unamee"];
    echo $_SESSION['unamee'];

    // remove the key so we don't keep outputting the message
    unset($_SESSION['unamee']);
}


//echo $_idd;
?>
      <?php 
	  
  $x = 1;
 
  
 $result=mysqli_query($con,"SELECT * FROM stocks where Model_No='".$_idd."'");
if(!$result)
{
	echo "Database query execution fail";
}
else
{ 	
  
  echo "<table border=1 width=100% height=60% cellpadding='45px' align='center' class='atable'>";
		do {
			while($row=mysqli_fetch_array($result))
				{			
				
			echo "<tr>";

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
				echo "<td>";
						
						echo "<div id=dimg align='right' style=right:200px'> <img src=". $row['Image']." width=230 hieght=250>"; 
						
						echo "</div>";
						
				
				echo "<td>";
												
							echo "<div id='dname' align='center'style=font-size:30px;'>".$row['Name'];
							echo  "</div>";
							echo "<br>";
							
							
							echo "<div id='lable' class='lable' style='font-size:18px;'>" ;echo "Brand :    ".$row['Brand'];
								
							echo  "</div>";
							echo "<br>";
							
							echo nl2br( " <div id='ddesc' class='ddesc'>".$row  ['Description' ] );
							//echo str_replace("\r",'<br/>',
							echo  "</div>";
							echo "<br>";
							echo "<div id='dprice' class='dprice'>".$row['Unit_Price'] ;
							echo  "</div>";			
														
							echo "<br>";
							//$uname = $_POST['ddd'];
							
							if (empty($_unamee)) 
							
							{
								?>
                                
                                <script type="text/javascript">
    alert("PLEASE SIGN IN TO CONTINUE RESERVATION");
    window.location.href = "Login.php";
  </script>
                                <?php
								
								}else
								{
								 echo "<form id='form1' name='form1' method='post' action='Customerbuyform.php'>";
						echo "<input type='submit' name='btnorder' value='Reserve Item'class='btnorder' id='btnorder' />" ;
						    		echo "<div id='modelno' class='modelno'>";
									echo "Model No";
									  echo nl2br("<input type='text'class='textbb' name='textbb' id='textbb' value=".$row['Model_No']." />");
									echo "</div>";
						echo "</form>";
			
							 $result1=mysqli_query($con,"SELECT COUNT(*) as total FROM reservations WHERE Model_No='".$_idd."'");
							while($row = mysqli_fetch_array($result1))
{
     echo "Number of Reservations for this Item: ".$row['total']."</br>";
}
$row = mysqli_fetch_array($result1);
{
     echo $row['total'];
}
								}echo "</td>";
				echo "</tr>";
				
				
				
				}
				
    		$x++;
				
		}
		
		 while ($x <= 4);
echo "</table>";
		
}

echo "</div>";
?>




     </td>
    </tr>
    </table>
 <?php include 'Mainfooter2.php'; ?>

</body>
</html>
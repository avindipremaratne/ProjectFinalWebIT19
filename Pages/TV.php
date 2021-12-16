<?php 
include("ConnectDB.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="../Images/logo2.png"/>
  <link rel="stylesheet" href="CSS.css">

  
<title>TV</title>
<style type="text/css">
#main {
	position: absolute;
	left: 0px;
	top: 2px;
	width: 1349px;
	height: 2448px;
	z-index: 100;
}
#apDiv1 {
	position: absolute;
	left: 186px;
	top: 231px;
	width: 206px;
	height: 67px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 587px;
	top: 570px;
	width: 232px;
	height: 28px;
	z-index: 60;
}
</style>
</head>

<body>


<div id="main" >
<div id='apDiv55551' >
  <table width="1347" height="auto" border="0" cellpadding="2px" class="maint">
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
    
     <tr>
      <td height="40">	
<!-- Start WOWSlider.com BODY section -->
<div id="background"></div>
      </td>
    </tr>
   <tr>
      <td height="40">	

<div id="heading">TELEVISION
  <hr/>
</div>

      </td>
    </tr>
  
  
    </tr>
   <tr>
      <td height="40">	

      </td>
    </tr>
  
    <tr>    
     <td>  

      <?php 
	  
  $x = 1;
 
  
 $result=mysqli_query($con,"SELECT * FROM stocks where Category= 'TV'");
if(!$result)
{
	echo "Database query execution fail";
}
else
{ 	
   
   
  echo "<table border=8 width=100% height=60% cellpadding='45px' cellspacing='5px'  align='center' class='atable'>";
		do {
			while($row=mysqli_fetch_array($result))
				{			
				
			echo "<tr>";
//   echo "<td>". include("Items.php");
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
				echo "<td>";
						
						echo "<div id=dimg align='right' style=right:200px'> <img src=". $row['Image']." width=230 hieght=250>"; 
						
						echo "</div>";
						
				
				echo "<td>";
												
							echo "<div id='dname' align='center'style=font-size:30px;'>".$row['Name'];
							echo  "</div>";
							echo "<br>";
							
							echo nl2br( " <div id='ddesc' class='ddesc'>".$row  ['Description' ] );
							//echo str_replace("\r",'<br/>',
							echo  "</div>";
							echo "<br>";
							echo "<div id='dprice' class='dprice'>".$row['Unit_Price'] ;
							echo  "</div>";			
														
							echo "<br>";
							
						 echo "<form id='form1' name='form1' method='post' action='confirm.php'>";
						echo "<input type='submit' name='btnorder' value='Order'class='btnorder' id='btnorder' />" ;
						    		echo "<div id='modelno' class='modelno'>";
									echo "Model No";
									  echo nl2br("<input type='text'class='textbb' name='textbb' id='textbb' value=".$row['Model_No']." />");
									echo "</div>";
						echo "</form>";
			
				echo "</td>";
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

</div>

</body>
</html>
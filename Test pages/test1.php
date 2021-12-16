<?php 
include("ConnectDB.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="CSS.css">
<title>Untitled Document</title>
<style type="text/css">
#main {
	position: absolute;
	left: 0px;
	top: 2px;
	width: 1366px;
	height: 2448px;
	z-index: 100;
}
</style>
</head>

<body>
<div id="main">
  <table width="1200" height="1638" border="2" cellpadding="5px">
    <tr>
     <td>
     <?php include 'Mainheader.php'; ?>

     </td>
    </tr>
    <br />
    
    <tr>
      <td>
       <?php include 'Mainheader1.php'; ?>
      </td>
    </tr>
     <tr>
     <td>
   
      <?php 
 
  $x = 1;
 
  
 $result=mysqli_query($con,"SELECT * FROM stocks");
if(!$result)
{
	echo "Database query execution fail";
}
else
{ 	
  
  echo "<table border=1 width=100% height=60% cellpadding='5px' align='center' class='atable'>";
		do {
			while($row=mysqli_fetch_array($result))
				{			
				
			echo "<tr>";
//   echo "<td>". include("Items.php");
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
				echo "<td>";
						
						echo "<div id=dimg align='center' > <img src=". $row['Image']." width=230 hieght=250>"; 
						
						echo "</div>";
						
				
				echo "<td>";
												
							echo "<div id='dname' style=font-size:30px;'>".$row['Name'];
							echo  "</div>";
							echo "<br>";
							
							echo nl2br( " <div id='ddesc'>".$row  ['Description' ] );
							//echo str_replace("\r",'<br/>',
							echo  "</div>";
							echo "<br>";
							echo "<div id='dprice' class='dprice'>".$row['Unit_Price'] ;
							echo  "</div>";
							echo "<br>";
						
						echo "<input type='submit' name='btnorder' id='btnorder' value='Order' class='btnorder'/>"  ;
				
						
			
				echo "</td>";
				echo "</tr>";
				}
				
    		$x++;
				
		}
		
		 while ($x <= 4);
echo "</table>";
		
}

?>
     </td>
    </tr>
    
    
    <tr>
    </tr>
    <tr>   
    </tr>
    
    <tr>
    </tr>
  </table>

  <?php include 'Mainfooter2.php'; ?>
</div>
</body>
</html>
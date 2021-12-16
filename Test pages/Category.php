<?php 
include("ConnectDB.php");
?>

<?php 
session_start();
?>

   <?php 
	  
 $x = 1;
 
  
$result=mysqli_query($con,"SELECT * FROM stocks where Sub_Category='".$_POST["cmb"]."'");
if(!$result)
{
	echo "Database query execution fail";
}
else
{ 	
   
   
  echo "<table border=8 width=150% height=60% cellpadding='45px' cellspacing='5px'  align='center' class='atable1'>";
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


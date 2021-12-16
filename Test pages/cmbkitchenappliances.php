<?php 
include("ConnectDB.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="CSS.css">
<title>Kitchen Appliances</title>
<style type="text/css">
#itemtable {
	position: absolute;
	left: 100px;
	top: 648px;
	width: 1200px;
	height: 1315px;
	z-index: 57;
	background-color: #f6f6f6;
	-webkit-box-shadow: 0 0 20px #000000;
	-moz-box-shadow: 0 0 20px #000000;
	box-shadow: 0 0 10px #000000;
}
#dname
{
    background-color: #f6f6f6;
	font-size:14px;
	font-family:Calibri;
	font-weight:bolder;
	color:#03C;
	right:200px;
}

#cameramainpic{

	left: 1px;
	width: 1345px;
	height: 385px;
	z-index: 20;
	background-image:url(../Images/rsz_ceec585db0f38970594903a7f0da0fb2.jpg);
}
#heading {
	
	margin-left: 70px;
	top: 559px;
	width: 435px;
	height: 45px;
	z-index: 59;
	text-align:center;
	font-family: Calibri;
	font-size: 28px;
	color: #007ff4;
	font-weight: bold;
	text-align:left;
	
}

.hr
{
	text-align:center;
	}



#apDiv1 {
	position: absolute;
	left: 492px;
	top: 181px;
	width: 470px;
	height: 21px;
	z-index: 3;
}
#apDiv2 {
	position: absolute;
	left: 827px;
	top: 571px;
	width: 40px;
	height: 19px;
	z-index: 3;
}
</style>
</head>

<body>

<div id='apDiv5555' >;
 <table width="1350" height="auto" border="0" cellpadding="2px">
    <tr>
     <td width="1350" height="40">
    <?php //include 'Mainheader.php'; ?>
     </td>
    </tr>
    <br />
    
    <tr>
      <td height="50">
 <?php //include'Mainheader1.php'; ?>
      </td>
    </tr>
    
     <tr>
      <?php
    echo "<td  width='1347' height='385'>	";
      
echo "<div id='cameramainpic'>";
echo "</div>";

     echo " </td>";
	  ?>
    </tr>
    
    <tr>
      <td height="100">
     
<div id="heading"> TELEVISION  

  <hr/>
</div>
</td>
    </tr>
    
        <tr>
      <td height="100">
      
  <form id='form2' name='form2' method='post' action='KitchenAppliances.php'>
   

<div id="apDiv2">
  <input type="submit" name="btnsearch" id="btnsearch" value="Search" />
</div>
</form>

</td>
    </tr>
        
     <tr>    
     <td>  

      <?php 
	  $_subcategory= $_POST['cmb'];
  $x = 1;

  $result=mysqli_query($con,"SELECT * FROM stocks where Sub_Category='".$_subcategory."'");
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




     </td>
    </tr>
 
   
  </table>
 <?php //include_once('Mainfooter2.php');?>

</div>
 

<?php //include_once('Mainheader.php');?>
<?php //include_once('Mainheader1.php');?>







</body>
</html>
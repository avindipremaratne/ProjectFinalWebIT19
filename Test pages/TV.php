<?php 
include("ConnectDB.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Television</title>
<style type="text/css">
#itemtable {
	position: absolute;
	left: 100px;
	top: 648px;
	width: 1146px;
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
.dprice
{
/*border-style:solid;
	border-width:thick;
	border-color:#000;
	border-radius:5px;*/
	background-color:#f6f6f6;
	font-size:24px;
	font-family:Calibri;
	font-weight:bold;
	color:#090;
}

.dprice:hover
{
	color:#090;
	font-size:26px;
	}

#ddesc
{
/*border-style:solid;
	border-width:thick;
	border-color:#000;
	border-radius:5px;*/
	background-color: #f6f6f6;
	font-family:Calibri;
}
#dimg{
	/*border-style:solid;*/
	/*border-width:thick;
	//border-color:#000;
	border-radius:5px;*/
	width:150px;
	margin:100px;
	
}
.table, th, td {
 
	border-collapse:collapse; 
	border-left-style:none;
	border-right-style:none;
	border-right-color:none;
	border-bottom-color:#FFF;

}
#cameramainpic{
	position: absolute;
	left: 1px;
	top: 123px;
	width: 1347px;
	height: 385px;
	z-index: 58;
	background-image:url(../Images/rsz_ceec585db0f38970594903a7f0da0fb2.jpg);
}
#heading {
	position: absolute;
	left: 83px;
	top: 559px;
	width: 435px;
	height: 45px;
	z-index: 59;
}
#heading {
	font-family: Calibri;
	font-size: 28px;
	color: #007ff4;
	font-weight: bold;
}
.btnorder
{
	background-color:#F60;
	color:#FFF;
	height:40px;
	width:140px;
	font-size:14px;
	cursor: pointer;
	border: 2px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight:bold;	
}

.btnorder:hover
{
	background-color:#FC3;
	color:#000;
	}
</style>
</head>

<body>
<div id="itemtable">
  <?php 
 
  $x = 1;
 
  
 $result=mysqli_query($con,"SELECT * FROM stocks where Category= 'TV'");
if(!$result)
{
	echo "Database query execution fail";
}
else
{ 	
  
  echo "<table border=1 width=100% height=60% cellpadding='5px'align='center' class='table'>";
		do {
			while($row=mysqli_fetch_array($result))
				{			
				
			echo "<tr>";
//   echo "<td>". include("Items.php");
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
				echo "<td>";
						
						echo "<div id=dimg align='center' > <img src=". $row['Image']." width=250 hieght=250>"; 
						
						echo "</div>";
						
				
				echo "<td>";
												
							echo "<div id='dname' style=font-size:24px;'>".$row['Name'];
							echo  "</div>";
							echo "<br>";
							
							echo nl2br( " <div id='ddesc'>".$row  ['Description' ] );
							//echo str_replace("\r",'<br/>',
							echo  "</div>";
							echo "<br>";
							echo "<div id='dprice'class='dprice'>".$row['Selling_Price'];
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
</div>

<div id="cameramainpic"></div>
<div id="heading"> TELEVISION
  <hr />
</div>
<?php include_once('Mainheader.php');?>
<?php include_once('Mainheader1.php');?>
<form id="form1" name="form1" method="post" action="">
</form>

</body>
</html>
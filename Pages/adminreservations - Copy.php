<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Reservations</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 130px;
	top: 213px;
	width: 1089px;
	height: 249px;
	z-index: 1;
	overflow: auto;
}
.TFtable{
	border-collapse:collapse; 
	}
	.TFtable td{ 
		border:#4e95f4 1px solid;
		padding:15px;
		font-family:"Microsoft YaHei UI"; font-size:13px;
	}
	
	.TFtable tr{
		background: #b8d1f3;
	}
	
	.TFtable tr:nth-child(odd){ 
		background: #28a428;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		
	}

	.TFtable tr:nth-child(even){
		background:  #98e698;
	}

#apDiv2 {
	position: absolute;
	left: 592px;
	top: 167px;
	width: 147px;
	height: 25px;
	z-index: 2;
}
#apDiv3 {
	position: absolute;
	left: 759px;
	top: 166px;
	width: 86px;
	height: 40px;
	z-index: 3;
}
.button1
{	
	font-size:14px;
	font-weight:bold;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	
	}
#apDiv6 {
	position: absolute;
	left: 1px;
	top: 10px;
	width: 1317px;
	height: 50px;
	z-index: 3;
	border-radius: 25px;
	background: #1F3A93;
	padding: 20px;
	background-color: #1F3A93;
}
#apDiv4 {
	position: absolute;
	left: 429px;
	top: 170px;
	width: 144px;
	height: 24px;
	z-index: 4;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:16px;
}
</style>

<script type="text/javascript">

function stDetails(x)
{

//alert("Row index is: " + x.rowIndex);
//alert(document.getElementById('myTable').rows[x.rowIndex].cells[0].innerHTML);
 //$_SESSION["editUSR"]=(document.getElementById("myTable").rows[x.rowIndex].cells[0].innerHTML);
 	var cvalue=document.getElementById('myTable').rows[x.rowIndex].cells[4].innerHTML;
		var ccvalue=document.getElementById('myTable').rows[x.rowIndex].cells[0].innerHTML;
	alert(cvalue);
	alert(ccvalue);
	
var expires=86400;
	
	var cname="uid";
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	
	var ccname="rid";
    document.cookie = ccname + "=" + ccvalue + ";" + expires + ";path=/";
	
 window.location.href = "redirect.php";
 //alert(document.getElementById("myTable").rows[x.rowIndex].cells[0].innerHTML);

}


</script>

</head>

<body bgcolor="#C5EFF7">


<h1>&nbsp;</h1>
<div id="apDiv6">
  <center>
    <font color="#FFFFFF" size="+4" face="Trebuchet MS, Arial, Helvetica, sans-serif">PREMCO PRODUCT RESERVATIONS</font>
  </center>
</div>
<div id="apDiv4">Search Reservations</div>
<form id="form1" name="form1" method="post">
<?php 
include("ConnectDB.php");
?>
<div id="apDiv2">
   <?php
  $result1=mysqli_query($con,"SELECT * FROM reservations");
if(!$result1)
{
	echo "Database query execution fail";
}
else
{
?>
    <label for="txtsearch"></label>
    <label for="cmb"></label>
    <select name="cmb" id="cmb">
      <?php
    	while($row=mysqli_fetch_array($result1))
		{	
		echo "<option>". $row["Reservation_No"]."</option>";
		}
}
	?>
    </select>
    <input type="submit" name="btnsbutton[3]" id="btnsbutton[3]" value="Search"  class="button1"/>
</div>
<div id="apDiv3">
  <input type="submit" name="btnAddItems2" id="btnAddItems2" value="Add Items" formaction="additem.php"/>
  
</div>
<input type="submit" name="btnAddItems" id="btnAddItems" value="Submit" />
 <div id="apDiv1">
   
  <?php 
//RESULT PAGE
$rid=$_COOKIE["rid"];
$result=mysqli_query($con,"SELECT * FROM reservations where Email='".$_SESSION["uid"]."'");
if(!$result)
{
	echo "Database query execution fail";
}
else
{
	
	echo "<table class='TFtable' align='center' width=100% id='myTable'>";
	echo "<tr>";
	echo "<th align='center' id='reg'> Reservation_No";
	echo "<th align='center'> User_ID";
	echo "<th align='center'> Name";
	echo "<th align='center'> Contact No";
	echo "<th align='center'> Model_No";
	
	
	echo "<th align='center'> Modification";

	echo"</tr>";
while($row=mysqli_fetch_array($result))
{	
	echo "<tr onclick='stDetails(this)'>";
	
echo "<td >". $row["Reservation_No"];
//echo "<td>".$_SESSION[$row["Registration_No"]] = $row["Registration_No"];
echo "<td>".$row["User_ID"];
echo "<td>".$row["Name"];
echo "<td>".$row["Contact_No"];
echo "<td>".$row["Model_No"];


//echo "<td> <a href='editdelete.php'>Manage Students</a>";
?>


<form id='form3' name='form3' method='post' action='redirect.php'>
<?php
//echo "<td onclick='rDetails(this)'>";

echo "<td><input name='button[2]' id='button[2]'type='submit' value='Reservations' / >";
?>
</form>

<?php 
	echo "</tr>";
}
}
	echo "</table>";

?>
   
   
 </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
 
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 

</body>
</html>
<?php 
include ("ConnectDB.php");
?>
<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="../Images/logo2.png"/>
<title>Reservation Form</title>

<style type="text/css">
#register {
	position: absolute;
	left: 352px;
	top: 218px;
	width: 683px;
	height: 641px;
	z-index: 1;
	background-color: #DADADA;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
#btnregister
{
	background-color:#3C0;
	color:#FFF;
	height:40px;
	width:140px;
	font-size:14px;
	cursor: pointer;
	border: 2px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight:bold;	
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
/*input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
*/
#logo {
	position: absolute;
	left: 557px;
	top: -33px;
	width: 246px;
	height: 178px;
	z-index: 1;
}
#imglogo {	width:190px;
	height:200px;
}
#label {
	position: absolute;
	left: 355px;
	top: 162px;
	width: 660px;
	height: 45px;
	z-index: 2;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #06F;
	font-size: 18px;
}
</style>
<script>
function myFunction() {
document.getElementById('date').value= Date();
}
</script>
</head>

<body onload="myFunction">

<?php 
$id=$_SESSION['uid'];
$_modelno=$_POST["textbb"];


$result=mysqli_query($con,"SELECT * FROM users where Email='".$id."'");
 
if(!$result)
{
	echo "Database query execution fail";
}
 else
		  {
?>
 <?php //include 'Mainheader.php'; ?>
  <?php //include 'Mainheader1.php'; ?>
<form id="form1" name="form1" method="post" action="ConfirmReservation.php">
<div id="register">
<?php 
while($row=mysqli_fetch_array($result))
			{
?>
  <table width="660" height="312" border="0" cellpadding="10" cellspacing="0">
  
    <tr>
      <td scope="row"><input type="text" name="txtid" id="txtid" placeholder="User ID" value="<?php echo $row["User_ID"]?>"/></td>
    </tr>
      <tr>
      <td scope="row"><input type="text" name="txtname" id="txtname" placeholder="Name" value="<?php echo $row["Name"]?>"/></td>     

    </tr>
    
     <tr>
      <td scope="row"><input type="text" name="txtemail" id="txtemail" placeholder="Name" value="<?php echo $row["Email"]?>"/></td>     

    </tr>
     <?php 
		}
		}
		date_default_timezone_set('Asia/Colombo');
$date = date('m/d/Y h:i:s a', time());
		?>
       <tr>
      <td scope="row"><input type="text" name="txtcontact" id="txtcontact"  size="20px" placeholder="Contact No"/></td>
    </tr>
    <tr>
      <td scope="row"><input type="text" name="txtmodelno" id="txtmodelno" placeholder="Model No"  value="<?php echo ($_modelno)?>"/></td>
    </tr>
    <tr>
       <td scope="row"><input type="text" name="date" id="date"  size="20px" placeholder="Date" value="<?php echo ($date)?>"/></td>
 </tr>
    <tr>
      <th scope="row"><input type="submit" name="btnregister" id="btnregister" value="RESERVE ITEM!" /></th>
    </tr>
  </table>
</div>
<div id="label">
<center>
  RESERVATION INFORMATION
</center>
<hr />
</div>




</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php include 'Mainfooter2.php'; ?>
<p>&nbsp;</p>
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
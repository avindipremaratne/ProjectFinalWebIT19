
<?php 

session_start();	

?>
<?php
 include("ConnectDB.php" );
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title> Update and Delete Student </title>
<style type="text/css">
#apDiv4 {
	position: absolute;
	left: 639px;
	top: 596px;
	width: 79px;
	height: 27px;
	z-index: 3;
}
</style>
<head>

<script type="text/javascript">

function abc(e)
{
if (event.which == 13 || event.keyCode == 13)
 {
        //code to execute here
      alert("done");
    }
}

</script>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 65px;
	top: 76px;
	width: 819px;
	height: 733px;
	color: #FFF;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 206px;
	top: 190px;
	width: 942px;
	height: 922px;
	z-index: 2;
	background-color: #090;
	color: #FFF;
}
#apDiv3 {
	position: absolute;
	left: 359px;
	top: 56px;
	width: 540px;
	height: 36px;
	padding: 10px 30px;
	background-color: #090;
	color: #FFF;
	font-size: 24px;
	border-radius: 15px 50px 30px 5px;
	margin: 15px 5px;
	z-index: 1;	
}

.button
{	
	font-size:14px;
	font-weight:bold;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	
	}
</style>
</head>

<body background="../Images/abstract-dark-wallpapers-pretty-green-walls.jpg">;

<?php 
$uid=$_COOKIE["rid"];
echo $uid."<br />";
 $result=mysqli_query($con,"SELECT * FROM reservations where Reservation_No='". $uid."'");
if(!$result)
{
	echo "Database query execution fail";
}
else
{			
while($row=mysqli_fetch_array($result))
			{				
?>
<form id="form1" name="form1" method="post" action="Redirectupdatedelete.php">
<div id="apDiv4">
  <input type="submit" name="btnsbutton[2]" id="btndelete" value="Delete" class="button"/>
</div>

<div id="apDiv2">
<div id="apDiv1">
  <table width="819" height="301" border="0">
    <tr>
      <th width="326" height="49" scope="row">   <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif"  color="#FFFFFF">Reservation No</font></b></th>
      <td width="328"><input type="text" name="txtid" id="txtid" value="<?php echo $row["Reservation_No"]?>" onkeypress="abc(event);"/></td>
    </tr>
    <tr>
      <th height="55" scope="row"><b><font color="#FFFFFF" face="Trebuchet MS, Arial, Helvetica, sans-serif">User ID</font></b></th>
      <td><input type="text" name="txtname" id="txtuserid" value="<?php echo $row["User_ID"]?>" /></td>
    </tr>
    <tr>
      <th height="47" scope="row"><b><font color="#FFFFFF" face="Trebuchet MS, Arial, Helvetica, sans-serif">Name</font></b></th>
      <td><input type="text" name="txtname" id="txtname" value="<?php echo $row["Name"]?>" /></td>
    </tr>
    <tr>
      <th height="49" scope="row">   <b><font color="#FFFFFF" face="Trebuchet MS, Arial, Helvetica, sans-serif">Contact No</font></th>
      <td><input type="text" name="txtcontatcno" id="txtcontactno"  value="<?php echo $row["Contact_No"]?>"/></td>
    </tr>
    <tr>
      <th height="42" scope="row">   <b><font color="#FFFFFF" face="Trebuchet MS, Arial, Helvetica, sans-serif">Model No</font><b><font face="Trebuchet MS, Arial, Helvetica, sans-serif" ></th>
      <td><input type="text" name="txtmodelno" id="txtmodelno" value="<?php echo $row["Model_No"]?>"/></td>
    </tr>
   
    <tr>
      
      <td>&nbsp;</td>
    </tr>
      <?php }}?>
  </table>
</div>
  </div>
  


  <p>
    <label for="txtid"></label>
  </p>
  <p>
    <label for="txtname"></label>
  </p>
  <p>
    <label for="txtgender"></label>
  </p>
  <div id="apDiv3">
    <center>
      <b><font face="Trebuchet MS, Arial, Helvetica, sans-serif">Manage Reservations</font></b>
    </center>
  </div>
  <p>
    <label for="txtdob"></label>
  </p>
  <p>
    <label for="txtaddress"></label>
    <label for="txtusername"></label>
  </p>
  <p>
    <label for="txtnicno"></label>
    <label for="txtpassword"></label>
  </p>
  <p>
    <label for="txtcourse"></label>
  </p>
  <p>
    <label for="txtbatch"></label>
  </p>
  <p>
    <label for="txtbatchindex"></label>
  </p>
  <p>
    <label for="txtmobile"></label>
  </p>
  <p>
    <label for="txthome"></label>
  </p>
  <p>
    <label for="txtemail"></label>
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
</form>
</body>
</html>
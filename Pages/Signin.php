<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 593px;
	top: -39px;
	width: 246px;
	height: 178px;
	z-index: 1;
}
#imglogo
{
	width:190px;
	height:200px;
}
#apDiv2 {
	position: absolute;
	left: 403px;
	top: 186px;
	width: 594px;
	height: 277px;
	z-index: 2;
	background-color: #f6f6f6;
	font-family: Calibri;
	font-size: 18px;
	text-align: left;
}
.a
{
	font-family:Calibri;
	font-size:20px;
}
.table
{
	text-align:justify;
	}
	.LoginBtn{
	margin-left:50%;
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
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="signinconfirm.php">
<div id="apDiv1">
  <input type="image" name="imglogo" id="imglogo" src="../Images/logo1.png" />
</div>
<div id="apDiv2" >
  <table width="598" height="251" border="0" cellpadding="20px">
    <tr>
      <th width="237" align="center" scope="row">User ID</th>
      <td width="235"><input type="text" name="txtid" id="txtid" />
      </td>
    </tr>
    <tr>
      <th height="64" align="center" valign="middle" scope="row">Password</th>
      <td><input type="password" name="txtpassword" id="txtpassword" /></td>
    </tr>
    <tr>
      <th scope="row" colspan="2"><input type="submit" name="btnlogin" id="btnlogin" value="Login" class="LoginBtn" /></th>
    </tr>
    
  </table>
</div>

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
<?php 
include_once("Mainfooter2.php");
?>
</body>
</html>
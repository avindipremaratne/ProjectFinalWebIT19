<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="../Images/logo2.png"/>
<title>Register</title>
<style type="text/css">
#register {
	position: absolute;
	left: 352px;
	top: 218px;
	width: 664px;
	height: 425px;
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
</head>

<body>
 <?php include 'Mainheader.php'; ?>
  <?php include 'Mainheader1.php'; ?>
<form id="form1" name="form1" method="post" action="confirmreg.php">
<div id="register">
  <table width="660" height="312" border="0" cellpadding="10" cellspacing="0">
    <tr>
      <td width="359" scope="row"><input type="text" name="txtname" id="txtname"  placeholder="Your Name"/></td>
    </tr>
    <tr>
      <td scope="row"><input type="text" name="txtemail" id="txtemail" placeholder="Your Email"/></td>
    </tr>
    <tr>
      <td scope="row"><input type="password" name="txtpassword" id="txtpassword" placeholder="Password" /></td>
    </tr>
    <tr>
      <td scope="row"><input type="password" name="txtconfirm" id="txtconfirm"  size="20px" placeholder="Confirm Password"/></td>
    </tr>
    <tr>
      <th scope="row"><input type="submit" name="btnregister" id="btnregister" value="REGISTER NOW" /></th>
    </tr>
  </table>
</div>
<div id="label">
<center> REGISTER </center>
<hr />
</div>


<div id="logo">
  <input type="image" name="imglogo" id="imglogo" src="../Images/logo1.png" />
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

</body>

</html>
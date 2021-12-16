<?php 
include ("ConnectDB.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
background-image: url(../Images/Sitemanibackgrd.jpg);
}

.btnart
{
	height:40px;
	width:280px;
	background-image: url(../Images/webbedbtn.PNG);
	border: 1px solid  #FFFFFF;
	border-radius: 25px;
	font-size: 18px;
	font-weight:bold;
	cursor: pointer;
	color:#FFF;
	
	}

.txtfart
{
	width:280px;
	height:30px;
	border: 0.5px solid #333;
	border-radius: 5px 5px 5px 5px;
	font-size:18px;
	text-align:center;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	
}


#apDiv1 {
	position: absolute;
	left: 274px;
	top: 181px;
	width: 839px;
	height: 357px;
	z-index: 1;
	background-color: #333;
	background-image: url(../Images/bottomstrip.png);
	border: 8px solid #0066FF;
	border-radius: 40px 40px 40px 40px;
}

#apDiv6 {
	position: absolute;
	left: 301px;
	top: 217px;
	width: 300px;
	height: 300px;
	z-index: 4;
}

#apDiv11 {
	position: absolute;
	left: 485px;
	top: 19px;
	width: 400px;
	height: 105px;
	z-index: 10;
}

#apDiv2 {
	position: absolute;
	left: 637px;
	top: 217px;
	width: 295px;
	height: 300px;
	z-index: 11;
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 22px;
}
#apDiv3 {
	position: absolute;
	left: 275px;
	top: 127px;
	width: 852px;
	height: 40px;
	z-index: 12;
	font-family:"Arial Black", Gadget, sans-serif;
	font-size:24px;
	color:#FFFFFF;
}
#apDiv4 {
	position: absolute;
	left: 949px;
	top: 301px;
	width: 372px;
	height: 298px;
	z-index: 13;
}
</style>
</head>



<body>
<form id="form1" name="form1" method="post" action="logincheck.php">
<div id="apDiv1"></div>
<div id="apDiv2">
  <table width="295" height="300" border="0">
    <tr>
      <th scope="row"><div align="left">USERNAME</div></th>
    </tr>
    <tr>
      <th scope="row"><label for="txtusername"></label>
        <div align="left">
          <input type="text" name="txtusername" id="txtusername" class="txtfart" />
      </div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">PASSWORD</div></th>
    </tr>
    <tr>
      <th scope="row"><label for="txtpassword"></label>
        <div align="left">
          <input type="password" name="txtpassword" id="txtpassword" class="txtfart" />
      </div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left">
        <input type="submit" name="btnlogin" id="btnlogin" value="LOGIN" class="btnart" />
      </div></th>
    </tr>
  </table>
</div>
<div id="apDiv3">
  <table width="852" height="40" border="0">
    <tr>
      <th scope="row">WELCOME - ONLINE RESERVATION SYSTEM</th>
    </tr>
  </table>
</div>
<div id="apDiv4"><img src="../Images/ActionTour_Freisteller_BlueFire_Hero.jpg.png" alt="userlog" width="372" height="298" /></div>

  <div id="apDiv6"><img src="../Images/user-login-icon.png" width="300" height="300" alt="userlog" /></div>

  <p>&nbsp;</p>
  <div id="apDiv11"><img src="../Images/coollogo_com-10787732.png" width="400" height="105" alt="userlog" /></div>
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
  <p><br>
    <br>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
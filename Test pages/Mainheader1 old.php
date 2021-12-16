<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover
 {
	 background-color: #f1f1f1;
 }

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn 
{
    background-color: #3e8e41;
}

.btnfollowlinks
{
	width:45px;
    height:45px;
	border:1px solid #CCC;
}
.btnfollowlinks:hover
{
width:50px;
height:45px;
}

.btnopt1
{
	height:40px;
	width:140px;
	font-size:14px;
	cursor: pointer;
	border: 2px;
	background-Color:transparent;
    color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-weight:bold;	
}
.btnopt1:hover
 {
	 background-color: #09F;
	 font-weight:bold;
	 color: #FFF;
	 cursor: pointer;
	 }

.btnhomeactv
{
	height:40px;
	width:140px;
	font-size:15px;
	cursor: pointer;
	border: 2px;
	background-Color: #333;
    color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-weight:bold;	
	display:block;
}

	  
	 


#apDiv1 {
	position: absolute;
	left: 48px;
	top: 75px;
	width: 1250px;
	height: 45px;
	z-index: 601;
	background-image: url(../Images/Mainbtngp.PNG);
	background-size: cover;	
	display:block;
}

#apDiv207 {
	position: absolute;
	left: -1px;
	top: 75px;
	width: 1345px;
	height: 45px;
	z-index: 600;
	background-image: url(../Images/Mainbtngp.PNG);
	background-size: cover;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
	width:250px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
    z-index: 1;
	text-align:justify;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>
</head>

<body>
<div id="apDiv207"></div>
<form id="form1" name="form1" method="post" action="RedirectMainView.php">
  <div id="apDiv1">
    <table width="1250" height="45" border="0">
    <tr>
       <th width="150" scope="row"><div align="center">
       <input type="submit" name="mwbtn[1]" id="mwbtn[1]" value="HOME" class="btnopt1" />
       </div></th>
      
       <th width="150" scope="row"><div align="center">
       <div class="dropdown">
       <input type="submit" name="mwbtn[2]" id="mwbtn[2]" value="CATEGORIES" class="btnopt1"       
       />
         <div class="dropdown-content">
    <a href="TV.php">TV</a>
    <a href="#">Washing Machines</a>
    <a href="Camera.php">Cameras and Camcorders</a>
    <a href="#">Home Appliances</a>
    <a href="#">Kitchen Appliances</a>
    <a href="#">Audio</a>
    <a href="#">Hair Care</a>
    <a href="#">Watches</a>
    
  </div>
</div>
        <th width="150" scope="row"><div align="center">
       <input type="submit" name="mwbtn[3]" id="mwbtn[3]" value="ABOUT US" class="btnopt1" />
       </div></th>
       </div></th>
       
       <th width="150" scope="row"><div align="center">
       <input type="submit" name="mwbtn[5]" id="mwbtn[5]" value="REGISTER NOW" class="btnopt1" />
       </div></th>
       <th width="150" scope="row"><div align="center">
         <input type="submit" name="mwbtn[7]2" id="mwbtn[6]" value="RESERVATION" class="btnopt1"/>
       </div></th>
       <th width="150" scope="row"><input type="submit" name="mwbtn[7]" id="mwbtn[7]" value="CONTACT US" class="btnopt1" /></th>
      </tr>
    </table>
</div>
</form>
</body>
</html>
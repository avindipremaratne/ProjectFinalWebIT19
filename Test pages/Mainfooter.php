<?php 
include("ConnectDB.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

.imagelinks
{
font-size:14px;
color: #FFF;
font-family: Arial, Helvetica, sans-serif;
font-weight:bold;
text-decoration:none;
}
.imagelinks:hover
{
	text-decoration:underline;
	cursor:pointer;
	
}

.imagedivlinks
{
	background-image: url(../Images/Mainbtngp.PNG);
	border:1px solid #FFF;
	border-radius:2px;
}

.Howeviewlinks
{
	font-size: 22px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFF;
}

.Homemaindivs
{
	border:5px solid #09F;
	border-radius:5px 20px 5px 20px;
	background-image: url(../Images/Homedivs.PNG);
	background-size:cover;
}

.footerlinks
{
	font-size:14px;
	font-family: Arial, Helvetica, sans-serif;
	color: #333;
	text-decoration:none;
}
.footerlinks:hover
{
		color: #06F;
}

.footerdivs
{
	
	background-size: cover;
	color: #007ff4;
	font-size: 12px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-weight: bold;

	
}



#apDiv6 {
	position: absolute;
	left: -1px;
	top: 2865px;
	width: 1350px;
	height: 40px;
	z-index: 6;
	color: #666;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	background-image: url(../Images/toppane.PNG);
	font-size: 12px;
	-webkit-box-shadow: 0 0 20px #000000;
	-moz-box-shadow: 0 0 20px #000000;
	box-shadow: 0 0 2px #000000;
}
#apDiv30 {
	position: absolute;
	left: 562px;
	top: 2506px;
	width: 250px;
	height: 165px;
	z-index: 11;
}


#apDiv23 {
	position: absolute;
	left: 900px;
	top: 2763px;
	width: 405px;
	height: 80px;
	z-index: 12;
	color: #333;
	font-size: 17px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}

#apDiv17 {
	position: absolute;
	left: 49px;
	top: 1484px;
	width: 1250px;
	height: 650px;
	z-index: 19;
	background-Image: url(../Images/bottomstrip.png);
	background-size: cover;
	border: 1px solid #666666;
	border-radius: 5px 5px 5px 5px;
}

#apDiv35 {
	position: absolute;
	left: 561px;
	top: 2465px;
	width: 250px;
	height: 35px;
	z-index: 24;
	font-size: 16px;
}
#apDiv36 {
	position: absolute;
	left: 1014px;
	top: 2465px;
	width: 250px;
	height: 35px;
	z-index: 25;
	font-size: 16px;
}
#apDiv37 {
	position: absolute;
	left: 1146px;
	top: 2625px;
	width: 175px;
	height: 175px;
	z-index: 26;
}

#apDiv50 {
	position: absolute;
	left: -1px;
	top: 1336px;
	width: 1350px;
	height: 1114px;
	background-color:#f7f7f7;
	background-size: cover;
	z-index: 1;
}


#apDiv70 {
	position: absolute;
	left: -1px;
	top: 2341px;
	width: 1350px;
	height: 95px;
	z-index: 39;
	background-image: url(../Images/toppane.PNG);
	background-size: cover;
	-webkit-box-shadow: 0 0 20px #000000;
	-moz-box-shadow: 0 0 20px #000000;
	box-shadow: 0 0 5px #000000;
}
#apDiv71 {
	position: absolute;
	left: -1px;
	top: 673px;
	width: 1350px;
	height: 325px;
	z-index: 40;
	background-image: url(../Images/Mainbtngp.PNG);
	-webkit-box-shadow: 0 0 20px #000000;
	-moz-box-shadow: 0 0 20px #000000;
	box-shadow: 0 0 10px #000000;
}
#apDiv72 {
	position: absolute;
	left: 49px;
	top: 1064px;
	width: 400px;
	height: 250px;
	z-index: 40;
	border: 1px solid #FFF;
}

#apDiv73 {
	position: absolute;
	left: 474px;
	top: 1064px;
	width: 400px;
	height: 250px;
	z-index: 41;
	border: 1px solid #FFF;
}
#apDiv74 {
	position: absolute;
	left: 17px;
	top: 724px;
	width: 1290px;
	height: 250px;
	z-index: 42;
	border: 1px solid #FFF;
}
#apDiv75 {
	position: absolute;
	left: 49px;
	top: 1014px;
	width: 400px;
	height: 50px;
	z-index: 43;
}
#apDiv76 {
	position: absolute;
	left: 474px;
	top: 1014px;
	width: 400px;
	height: 50px;
	z-index: 44;
}
#apDiv77 {
	position: absolute;
	left: 16px;
	top: 671px;
	width: 400px;
	height: 50px;
	z-index: 45;
}
#apDiv78 {
	position: absolute;
	left: 341px;
	top: 1276px;
	width: 100px;
	height: 30px;
	z-index: 46;
}
#apDiv179 {
	position: absolute;
	left: 766px;
	top: 1276px;
	width: 100px;
	height: 30px;
	z-index: 47;
}
#apDiv85 {
	position: absolute;
	left: 1184px;
	top: 913px;
	width: 100px;
	height: 30px;
	z-index: 48;
}
#apDiv40 {
	position: absolute;
	left: 1014px;
	top: 2506px;
	width: 250px;
	height: 165px;
	z-index: 49;
}
#apDiv41 {
	position: absolute;
	left: 80px;
	top: 2689px;
	width: 250px;
	height: 35px;
	z-index: 50;
	font-size: 16px;
}
#apDiv42 {
	position: absolute;
	left: 80px;
	top: 2730px;
	width: 250px;
	height: 60px;
	z-index: 51;
}
#apDiv100 {
	position: absolute;
	left: 75px;
	top: 1073px;
	width: 350px;
	height: 225px;
	z-index: 52;
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	color: #000;
	text-align: justify;
	line-height: 23px;
}
#apDiv101 {
	position: absolute;
	left: 500px;
	top: 1073px;
	width: 350px;
	height: 225px;
	z-index: 53;
}
#apDiv102 {
	position: absolute;
	left: 925px;
	top: 1073px;
	width: 350px;
	height: 225px;
	z-index: 54;
}

#apDiv211 {
	position: absolute;
	left: 80px;
	top: 2465px;
	width: 250px;
	height: 35px;
	z-index: 55;
	font-size: 16px;
	text-align: left;
}
#apDiv212 {
	position: absolute;
	left: 80px;
	top: 2506px;
	width: 327px;
	height: 165px;
	z-index: 56;
}
#apDiv51 {
	position: relative;
	bottom:0px;
	left: -1px;
	top: 2450px;
	width: 1350px;
	height: auto;
	z-index: 2;
	background-color: #eaeaea;
	background-size: cover;
	-webkit-box-shadow: 0 0 20px #000000;
	-moz-box-shadow: 0 0 20px #000000;
	box-shadow: 0 0 2px #000000;
}
#apDiv111{
	position: absolute;
	left: 3px;
	top: -1px;
	width: 348px;
	height: 371px;
	z-index: 1;
}
#apDiv222 {
	position: absolute;
	left: 2px;
	top: 1px;
	width: 434px;
	height: 382px;
	z-index: 2;
	background-color: #CC0000;
}
#apDiv333 {
	position: absolute;
	left: -1px;
	top: 313px;
	width: 433px;
	height: 69px;
	z-index: 3;
}
#apDiv444 {
	position: absolute;
	left: 370px;
	top: 347px;
	width: 43px;
	height: 28px;
	z-index: 4;
}

</style>
</head>

<body>
<div id="apDiv35" class="footerdivs" align="left">
  <table width="250" height="35" border="0">
    <tr>
      <td scope="row">HELP
        <hr />
      </td>
    </tr>
  </table>
</div>
<div id="apDiv36" class="footerdivs" align="left">
  <table width="250" height="35" border="0">
    <tr>
      <td scope="row">SITE TERMS
      <hr  />
      </td>
    </tr>
  </table>
</div>
<div id="apDiv37"><img src="../Images/logo1.png" width="174" height="175" alt="userlog" /></div>
<div id="apDiv50"> Hello</div>
<!--#################################################### PAGE FOOTER ###################################### -->
<div id="apDiv51">
  <div id="apDiv33">
    <table width="250" height="165" border="0">
      <tr>
        <th scope="row"><div align="left"><a class="footerlinks" href="#">TV</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div align="left"><a class="footerlinks" href="#">Home Appliances</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div align="left"><a class="footerlinks" href="AboutUS.php">Kitchen Appliances</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div align="left"><a class="footerlinks" href="Contactus.php">Audio</a></div></th>
      </tr>
    </table>
  </div>
</div>


<div id="apDiv70"></div>
<div id="apDiv71"></div>
<div id="apDiv74" class="Homemaindivs"></div>
<div id="apDiv77">
  <table width="400" height="50" border="0">
    <tr>
      <td><div class="Howeviewlinks" align="left">Services & Offers ________________</div></td>
    </tr>
  </table>
</div>
<div class="imagedivlinks" id="apDiv85">
  <table width="100" height="30" border="0">
    <tr>
      <td><div align="center"><a class="imagelinks" href="#">Read More</a></div></td>
    </tr>
  </table>
</div>
<div id="apDiv40">
  <table width="250" height="165" border="0">
    <tr>
      <th scope="row"><div align="left"><a class="footerlinks" href="#">Terms & Conditions</a></div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left"><a class="footerlinks" href="#">Terms of Reservations</a></div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left"><a class="footerlinks" href="#">Terms of sign in</a></div></th>
    </tr>
    <tr>
      <th scope="row"><div align="left"><a class="footerlinks" href="#">Contact Us</a></div></th>
    </tr>
  </table>
</div>
<div id="apDiv41" class="footerdivs">
  <table width="250" height="35" border="0">
    <tr>
      <td scope="row">FOLLOW US
      <hr />
      </td>
    </tr>
  </table>
</div>
<div id="apDiv42">
  <table width="250" height="60" border="0">
    <tr>
      <th scope="row"><div align="left"></div></th>
      <th scope="row">&nbsp;</th>
      <th scope="row">&nbsp;</th>
      <th scope="row">&nbsp;</th>
    </tr>
  </table>
</div>
<div id="apDiv211" class="footerdivs">
  <table width="250" height="35" border="0">
    <tr>
      <td><div align="left"> OUR PRODUCTS
      <hr />
       </div></td>
    </tr>
  </table>
</div>

<form id="form1" name="form1" method="post" action="Confirmsignup.php">
  <div id="apDiv30"> 
    <table width="250" height="165" border="0">
      <tr>
        <th scope="row"><div align="left"><a class="footerlinks" href="#">How to reserve an item</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div align="left"><a class="footerlinks" href="#">FAQ</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div align="left"><a class="footerlinks" href="AboutUS.php">About Us</a></div></th>
      </tr>
      <tr>
        <th scope="row"><div align="left"><a class="footerlinks" href="Contactus.php">Contact Us</a></div></th>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div id="apDiv23">
    <table width="405" height="80" border="0">
      <tr>
        <th scope="row"> <div align="right">NO 23, Hakmana Road, Matara, Sri Lanka</div></th>
      </tr>
      <tr>
        <th scope="row"><div align="right">premco@gmail.com | 0412224457 | 0412224457</div></th>
      </tr>
    </table>
  </div>
 <div id="apDiv6">
  <table width="1350" height="40" border="0">
    <tr>
      <th scope="row">© Copyright PREMCO 2017.| All Rights Reserved | Designed & Develped by SACHIN NIMSHAN</th>
    </tr>
  </table>
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
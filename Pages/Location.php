<?php 
session_start();	
?>

<?php 
include ("ConnectDB.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">

body
{
	background-image:url(../Images/Sitemanibackgrd.jpg);
}

.btnart
{
	height:40px;
	width:200px;
	background-image: url(../Images/webbedbtn.PNG);
	border: 1px solid  #FFFFFF;
	border-radius: 20px;
	font-size: 20px;
	font-weight:bold;
	cursor: pointer;
	color:#FFF;
}

.btnmanageres
{
	height:35px;
	width:100px;
	background-image: url(../Images/webbedbtn.PNG);
	border: 1px solid  #FFFFFF;
	border-radius: 5px;
	font-size: 18px;
	font-weight:bold;
	cursor: pointer;
	color:#FFF;
}

.txtfart
{
	width:300px;
	height:35px;
	border: 0.5px solid #333;
	border-radius: 5px 5px 5px 5px;
	font-size:18px;
	text-align:center;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	
}
#apDiv4 {
	position: absolute;
	left: 835px;
	top: 188px;
	width: 500px;
	height: 55px;
	z-index: 20;
	font-size: 25px;
	font-weight: bold;
	color: #FFFFFF;
	border:2px solid #0099FF ;
	border-radius:0px 0px 0px 25px;
	font-family: "Arial", Helvetica, sans-serif;
	background-image: url(../Images/Btnwebbedmain.jpg);
}
#apDiv10 {
	position: absolute;
	left: 46px;
	top: 209px;
	width: 750px;
	height: 55px;
	z-index: 19;
	border: 1px solid #FFFFFF;
	background-image: url(../Images/bottomstrip.png);
	border-radius: 25px;
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	color: #FF9900;
}
#apDiv5 {
	position: absolute;
	left: 59px;
	top: 266px;
	width: 725px;
	height: 80px;
	z-index: 21;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 26px;
	color: #FFFFFF;
}
#apDiv7 {
	position: absolute;
	left: 49px;
	top: 493px;
	width: 1250px;
	height: 450px;
	z-index: 22;
	color: #000000;
}

.tr {
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	text-align:center;
	font-size:18px;
	border-radius:8px 8px 2px 2px;
}
.btnreservesubmit {	height:35px;
	width:220px;
	font-size:17px;
	font-weight:bold;
	cursor: pointer;
	border: 1px;
	background-image: url(../Images/webbedbtn.PNG);
	color:#FFFFFF;
	border:1px solid #FFFFFF;
	border-radius:5px 5px 5px 5px;
}
.txtreservation {	height:25px;
	width:250px;
	font-size:15px;
	font-weight:bold;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
#apDiv8 {
	position: absolute;
	left: 79px;
	top: 507px;
	width: 970px;
	height: 295px;
	z-index: 22;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFFFFF;
	text-align: left;
}
.btnreservesubmit1 {height:35px;
	width:220px;
	font-size:17px;
	font-weight:bold;
	cursor: pointer;
	border: 1px;
	background-image: url(../Images/webbedbtn.PNG);
	color:#FFFFFF;
	border:1px solid #FFFFFF;
	border-radius:5px 5px 5px 5px;
}
.btnreservesubmit11 {height:35px;
	width:220px;
	font-size:17px;
	font-weight:bold;
	cursor: pointer;
	border: 1px;
	background-image: url(../Images/webbedbtn.PNG);
	color:#FFFFFF;
	border:1px solid #FFFFFF;
	border-radius:5px 5px 5px 5px;
}
#apDiv11 {
	position: absolute;
	left: 37px;
	top: 482px;
	width: 1030px;
	height: 325px;
	z-index: 21;
	background-image: url(../Images/Formbg.png);
	border: 10px solid #666666;
	border-radius: 5px 5px 5px 5px;
}
</style>
<script type="text/javascript">
function reserveDetails(x)
{

var cvalue=document.getElementById('myTable').rows[x.rowIndex].cells[4].innerHTML;
var expires=86400;
var cname="uid";
document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
window.location.href = "UpdateReservation.php";
 
}

</script>
</head>

<body>

 <div id="apDiv4">
  <table width="489" height="50" border="0">
    <tr>
      <th scope="row">LACATION</th>
    </tr>
  </table>
</div>
<div id="apDiv10">
  <table width="750" height="55" border="0">
    <tr>
      <th scope="row">FIND YOUR WAY TO VISIT US </th>
    </tr>
  </table>
</div>
<div id="apDiv7"></div>
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(5.9549,80.5550);
  var mapCanvas = document.getElementById("apDiv7");
  var mapOptions = {center: myCenter, zoom: 16};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxPMN7xOxfI9vXsdnu4BxRgC2JaGs7dy4&callback=myMap"></script>
<?php
 include_once('Mainheader.php');?>
<form id="form1" name="form1" method="post" action="UpdateReservation.php">
</form>
<?php include_once('Mainfooter.php');?>
</body>
</html>
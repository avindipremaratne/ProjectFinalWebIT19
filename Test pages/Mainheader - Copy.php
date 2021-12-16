<?php 
session_start();	
?>
<?php 
include("ConnectDB.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

.textfdmainsearch
{
	height:28px;
	width:600px;
	font-family: Verdana, Geneva, sans-serif;
	font-size:15px;
	border:1px solid #999;
	text-align:center;
}


.btnsearchmain
{
	height:33px;
	width:120px;
	font-size:18px;
	cursor: pointer;
	border: 2px;
    color: #000;
	border: 1px solid #333;
	border-radius:2px;
	background-color: #CCC;
	font-family: Arial, Helvetica, sans-serif;
	}


#apDiv2 {
	position: absolute;
	left: 13px;
	top: -47px;
	width: 150px;
	height: 150px;
	z-index: 600;
}

#apDiv3 {
	position: absolute;
	left: 841px;
	top: 18px;
	width: 228px;
	height: 40px;
	z-index: 805;
	color: #003;
	font-size: 18px;
	font-family: "Times New Roman", Times, serif;
	text-align: left;
}

#apDiv104 {
	position: absolute;
	left: 184px;
	top: 8px;
	width: 650px;
	height: 60px;
	z-index: 806;
}


#apDiv300 {
	position: absolute;
	left: -1px;
	top: -5px;
	width: 1350px;
	height: 80px;
	z-index: 500;
	background-image: url(../Images/toppane.PNG);
	background-size: cover;
}


#apDiv201 {
	position: absolute;
	left: 1101px;
	top: 38px;
	width: 206px;
	height: 40px;
	z-index: 807;
	font-family: Calibri;
	font-size: 18px;
	font-weight: bold;
}
a
{
	text-decoration:none;
	color:#FFFFFF;
	
}
.login
{
	background-color:#0d87e9;
	}
#user {
	position: absolute;
	left: 1101px;
	top: 2px;
	width: 234px;
	height: 16px;
	z-index: 808;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
}
#name {
	position: absolute;
	left: 1101px;
	top: 24px;
	width: 158px;
	height: 16px;
	z-index: 809;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-weight:bold;
}
</style>
</head>

<body>
<?php 
$email=$_SESSION['email'];

//echo $uid."<br />";
 $result=mysqli_query($con,"SELECT * FROM users where Email='".$email."'");
 
if(!$result)
{
	echo "Database query execution fail";
}
 else
		  {
?>
<div id="apDiv3">

  <?php		  
         
			while($row=mysqli_fetch_array($result))
			{
	
	?>
  <table width="230" height="40" border="0">
    <tr>
      <td align="left"><div align="left">| HOTLINE | 0412224457 |</div></td>
    </tr>
  </table>
</div>
<div id="apDiv104">
  <table width="650" height="60" border="0">
    <tr>
      <td width="408"><label for="txtmainsearch"></label>
        <div align="center">
          <input type="text" name="txtmainsearch" id="txtmainsearch" class="textfdmainsearch" />
      </div></td>
      <td width="220"><div align="center">
        <label for="cmbcategory"></label>
        <input type="image" name="btnmainsearch" id="btnmainsearch" value="Search" src="../Images/Very-Basic-Search-icon.png" />
      </div></td>
    </tr>
  </table>
</div>
<div id="apDiv300"></div>
<div id="apDiv201">
  <table width="205" height="40" border="0">
    <tr>
      <td width="96"><div align="center" class="login">
    <a href="Login.php"> SIGN IN </a></div></td>
      <td width="99"><div align="center" class="login">
        <a href="Logout.php"> SIGN OUT </a>
      </div></td>
    </tr>
  </table>
</div>
<div id="user">Welcome!</div>
<div id="name"> <?php echo $row["Name"] ?>   </div>
<form id="form1" name="form1" method="post" action="RedirectMainView.php">
  <div id="apDiv2"><img src="../Images/logo1.png" width="150" height="150" alt="userlog" /></div>
  <?php 
		}
		}
		
		?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>
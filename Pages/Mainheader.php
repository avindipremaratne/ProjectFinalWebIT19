
<?php 
session_start();
include("ConnectDB.php");

?>
<?php 

//ob_end_flush()
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function username(x)
{
	 <?php 


$result=mysqli_query($con,"SELECT * FROM users where Email='".$_SESSION['uid']."'");
 
if(!$result)
{
	echo "Database query execution fail";
}
 else
		  {
?>
	}
</script>

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
	left: 831px;
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
	left: -3px;
	top: -5px;
	width: 1365px;
	height: 80px;
	z-index: 500;
	background-image: url(../Images/toppane.PNG);
	background-size: cover;
}


#apDiv201 {
	position: absolute;
	left: 1088px;
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
	.login1
{
	background-color:#0d87e9;
	font-size:14px;
	color:#FFF;
	
	}
#user {
	position: absolute;
	left: 1090px;
	top: 2px;
	width: 234px;
	height: 16px;
	z-index: 808;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
}
#name {
	position: absolute;
	left: 841px;
	top: 87px;
	width: 187px;
	height: 24px;
	z-index: 1009;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-weight: bold;
	background-color: #FF3366;
}
.ddd {
    width: 50%;
	height:30%
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
	left:1000px;
}
.nameee {
		
	font-size:18px;
	font-family:Calibri;
	font-weight:bold;
	color:#090;
		right:500px;
		margin:auto;
		text-align:right;
}
#userr {
	position: absolute;
	left: 1089px;
	top: 15px;
	width: 250px;
	height: 30px;
	z-index: 1500;
}
#reservations {
	position: absolute;
	left: 1229px;
	top: 21px;
	width: 107px;
	height: 25px;
	z-index: 1600;
}
</style>
</head>

<body>


<div id="apDiv3">

 
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
        <form id="form2" name="form2" method="post" action="confirm1.php">
          <input type="text" name="txtmainsearch" id="txtmainsearch" class="textfdmainsearch" placeholder="Search Model No."/>
          
          
      </div></td>
      <td width="220"><div align="center">
        <label for="cmbcategory"></label>
        <input type="image" name="btnmainsearch" id="btnmainsearch" value="Search" src="../Images/Very-Basic-Search-icon.png" onclick="confirm1.php"/>
        </form>
    </div></td>
    </tr>
</table>
</div>
<div id="apDiv300"></div>
<div id="apDiv201">

  <table width="205" height="40" border="0">
    <tr>
   
      <td width="96"><div align="center" class="login">
    <a href="Login.php" onclick="username(this)"> SIGN IN </a></div></td>
      <td width="99"><div align="center" class="login">
        <a href="Logout.php"> SIGN OUT </a> 
      </div></td>
    </tr>
  </table>
</div>
<div id="user">Welcome!</div>
    <?php		  
         
			while($row=mysqli_fetch_array($result))
			{
?>
<div id="userr">
  
  <input type="text" name="txtddd" id="txtddd" class="ddd"value="<?php echo $row['Name']?>"/>
  <?php 
  $_SESSION['unamee']="txtddd";
  ?>
</div>
<div id="reservations">
 <form id="form2" name="form2" method="post" action="customerreservations.php">
  <input name="btnreservations" type="submit" class="login1" id="btnreservations" value="Reservations" />
  </form>
</div>
    <?php 
	
		}
		}
		
		?>

<form id="form1" name="form1" method="post" action="RedirectMainView.php">
  <div id="apDiv2"><img src="../Images/logo1.png" width="150" height="150" alt="userlog" /></div>
 
</form>
</body>
</html>
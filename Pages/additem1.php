<?php 
include("ConnectDB.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Item</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 508px;
	top: 24px;
	width: 182px;
	height: 61px;
	z-index: 1;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 36px;
}
#apDiv2 {
	position: absolute;
	left: 339px;
	top: 228px;
	width: 580px;
	height: 549px;
	z-index: 2;
	color: #FFF;
	background-color: #006600;
}
#apDiv6 {
	position: absolute;
	left: -6px;
	top: 10px;
	width: 1317px;
	height: 142px;
	z-index: 3;
	border-radius: 25px;
	background: #1F3A93;
	padding: 20px;
	background-color: #1F3A93;
}
#apDiv3 {
	position: absolute;
	left: 576px;
	top: 746px;
	width: 65px;
	height: 31px;
	z-index: 4;
}
#apDiv4 {
	position: absolute;
	left: 627px;
	top: 747px;
	width: 41px;
	height: 21px;
	z-index: 4;
}
</style>
</head>

<body>
<div id="apDiv4">
<form id="form2" name="form2"   enctype="multipart/form-data" method="post" action="Redirectupdatedelete.php">
  <input type="submit" name="btnsbutton[3]" id="btnsbutton[3]" value="Delete" />
  
</div>
<div id="apDiv3">

<form id="form1" name="form1"   enctype="multipart/form-data" method="post" action="confirmadd.php">
 
</div>

  <div id="apDiv6">
    <center>
      <p><font color="#FFFFFF" size="+4" face="Trebuchet MS, Arial, Helvetica, sans-serif">PREMCO PRODUCT RESERVATIONS </font></p>
      <p><font color="#FFFFFF" size="+4" face="Trebuchet MS, Arial, Helvetica, sans-serif">ADD NEW ITEM</font>
      </p>
      <p>&nbsp;</p>
    </center>
  </div>
  <div id="apDiv2">
    <table width="578" height="554" border="0">
    <tr>
      <th scope="row">MODEL NO</th>
      <td>
        <label for="txtmodel"></label>
        <input type="text" name="txtmodel" id="txtmodel" />
      </td>
    </tr>
    <tr>
      <th scope="row">NAME</th>
      <td><input type="text" name="txtname" id="txtname" /></td>
    </tr>
    <tr>
      <th scope="row">CATEGORY</th>
      <td><select name="cmbcategory" id="cmbcategory">
        <option>TV</option>
        <option>Washing Machine</option>
        <option>Home Appliances</option>
        <option>KitchenAppliances</option>
        <option>Camera</option>
         <option>Hair Care</option>
      </select></td>
    </tr>
    <tr>
      <th scope="row">UNIT PRICE</th>
      <td><input type="text" name="txtunitp" id="txtunitp" /></td>
    </tr>
    <tr>
      <th scope="row">SELLING PRICE</th>
      <td><input type="text" name="txtsellingp" id="txtsellingp" /></td>
    </tr>
    <tr>
      <th scope="row">CODE</th>
      <td><input type="text" name="txtcode" id="txtcode" /></td>
    </tr>
    <tr>
      <th scope="row">NO.OF STOCKS</th>
      <td><input type="text" name="txtnoofstocks" id="txtnoofstocks" /></td>
    </tr>
    <tr>
      <th height="40" scope="row">SUPPLIER ID</th>
      <td><input type="text" name="txtsupplierid" id="txtsupplierid" /></td>
    </tr>
    <tr>
      <th height="45" scope="row">DATE</th>
      <td><input type="text" name="txtdate" id="txtdate" /></td>
    </tr>
    <tr>
      <th height="44" scope="row">IMAGE</th>
      <td><input type="file" name="file" id="file" /></td>
    </tr>
    <tr>
      <th height="44" scope="row">DESCRIPTION</th>
      <td><textarea name="txtdescription" id="txtdescription" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <th height="44" scope="row">BRAND</th>
      <td><input type="text" name="txtbrand" id="txtbrand" /></td>
    </tr>
    <tr>
      <th height="44" scope="row">&nbsp;</th>
      <td>
      
      <tr>
      <th height="44" scope="row">&nbsp;</th>
      <td>
       
       <input type="submit" name="btnadd" id="btnadd" value="Add" />
       <label for="cmbmodel"></label></td>
       </form>
    </tr>
      </form>
      <?php
  $result1=mysqli_query($con,"SELECT * FROM stocks");
if(!$result1)
{
	echo "Database query execution fail";
}
else
{
?>
      <select name="cmbmodel" id="cmbmodel">
        <?php
    	while($row=mysqli_fetch_array($result1))
		{	
		echo "<option>". $row["Model_No"]."</option>";
		}
}
	?>
      </select></td>
    </tr>
    
    </table>
    }
</div>


  <label for="txtname"></label>


<label for="txtunitp"></label>





<label for="txtbrand"></label>
</body>
</html>
<html>
<head> 
<style>
#image {
	position: absolute;
	left: 234px;
	top: 119px;
	width: 522px;
	height: 310px;
	z-index: 1;
}
</style>
</head>
<?php 
include("ConnectDB.php");
?>

<?php 
$_modelno = $_POST["txtmodel"];
$_name = $_POST["txtname"];
$_category = $_POST["cmbcategory"];
$_unitprice = $_POST["txtunitp"];
$_sellingprice = $_POST["txtsellingp"];
$_code = $_POST["txtcode"];
$_noofstock = $_POST["txtnoofstocks"];
$_supplierid= $_POST["txtsupplierid"];
$_date = $_POST["txtdate"];
$_description = $_POST["txtdescription"];
$_brand = $_POST["txtbrand"];

$target_dir = "../Itemimages/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["btnadd"])) 
{
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) 
	{
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
	
	{

		echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
		
		
		$file1=$_FILES["file"]["name"];
		$file2=$_modelno.".jpg";
		
		rename("../Itemimages/".$file1, "../Itemimages/".$file2);

    } 
	else 
	{
        echo "Sorry, there was an error uploading your file.";
		die;
    }

}

//################  END OF IMAGE HANDALING  ###########################

$imagepath="../Itemimages/".$file2;

$insertSQL="INSERT INTO stocks VALUES('".$_modelno."','".$_name."','" .$_category. " ','".$_unitprice."','".$_sellingprice."','".$_code."','".$_noofstock. "','".$_supplierid.  "','".$_date.  "','".$imagepath."','".$_description."','".$_brand. "')";

if(!mysqli_query($con,$insertSQL))
{
	echo "<div id='image'><img src='../Itemimages/error.png' width='134' height='88' alt='error' />   
	User Adding Error".mysqli_error($con)."</div>";	
	
	die ;
	
	
}
else
{
	 ?>
 <script type="text/javascript">
    alert("One Record Added Successfully");
    window.location.href = "adminreservations.php";
  </script>


<?php

}
?> </html>
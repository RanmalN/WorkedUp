<?php
session_start();

//create a variable called $pagename which contains the actual name of the page
include("db.php");
$pagename="Product Information";
//retrieve the product id passed from the previous page using the $_GET superglobal variable
//store the value in a variable called $prodid
$prodid=$_GET['u_prodid'];
//echo "<p>Selected product Id: ".$prodid;

//query the product table to retrieve the record for which the value of the product id
//matches the product id of the product that was selected by the user
$prodSQL="select prodId, prodName, prodPicName, 
prodDescrip , prodPrice, prodQuantity from product
where prodId=".$prodid ;
//execute SQL query
$exeprodSQL=mysqli_query($conn,$prodSQL) or die(mysqli_error());
//create array of records & populate it with result of the execution of the SQL query
$thearrayprod=mysqli_fetch_array($exeprodSQL);

//display product name in capital letters
//echo "<p><center><b>".strtoupper($thearrayprod['prodName'])."</b></center>";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";



//include head layout
include("footfile.html");
?>

<?php
session_start();

//create a variable called $pagename which contains the actual name of the page
include("db.php");
$pagename="Product Information";
//retrieve the product id passed from the previous page using the $_GET superglobal variable
//store the value in a variable called $prodid
$prodid=$_GET['u_prodid'];
//echo "<p>Selected product Id: ".$prodid;


//include head layout
include("footfile.html");
?>

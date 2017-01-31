<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Ordering Basket";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
include ("detectlogin.php");
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
//@$prodNameAdd=$_POST['h_prodName'];
//@$prodpriceAdd=$_POST['h_prodPrice'];





if(isset($_POST['stock'])){
@$newprodid =$_POST['h_prodid'];

@$reququantity =$_POST['stock'];
@$_SESSION['basket'][$newprodid] =$reququantity;
echo "<p> Your basket has been updated";
//print_r($_SESSION);

}

echo"<table border=1;>";
echo"<tr>";
        echo"<th> product name</th>";
        echo"<th> product price</th>";
	echo"<th> Quantity</th>";
	echo"<th>Sub Total</th>";
echo"</tr>";
$total = 0;
  </table>"; 

	
//include head layout
include("footfile.html");
?>

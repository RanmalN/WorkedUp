<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Ordering Basket";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";







//include head layout
include("footfile.html");
?>

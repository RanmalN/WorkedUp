<?php
//create a variable called $pagename which contains the actual name of the page
$pagename="Index";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");
echo "<p></p>";
//display name of the page and some text
echo"<div class='hi'>";


echo "<h2>".$pagename."</h2>";
echo "Amazing products for your home, for your work, for you!<br><br><hr>";
echo"</div>";


mysqli_close($conn);
//include head layout
include ("footfile.html");
?>

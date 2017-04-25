<?php
/*
Project Gangway Library
*/

function pageHeader() {
	$html="<b>Project Gangway</b><br>";
	echo($html);
}


function mainNav() {
 	$html="<a href='default.php'>Home</a>&nbsp;&nbsp;";
 	$html.="<a href='page1.php'>Page 1</a>&nbsp;&nbsp;";
 	$html.="<a href='page2.php'>Page 2</a>&nbsp;&nbsp;";
 	$html.="<a href='clicktest1.php'>Click Test 1</a>";
 	$html.="<p>";
 	echo($html);
}


?>

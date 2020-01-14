<?php
#foreach - only works on array

$a= array("prakash","kukmar","just");

foreach($a as $name){
	echo $name;
}


/*

$a= array("prakash","kukmar","just");

foreach($a as $name){
	echo $name
}


PHP Parse error:  syntax error, unexpected '}', expecting ',' or ';' in /home/prakash/Study/PHP/W3/Constants/7_5.foreach.php on line 8
*/
//

//mistake : semicolon was missed at echo statement
//
?>



<?php
#foreach - only works on array
//also key and value can be used.

$a= array("prakash"=>"kukmar","just"=>"kumar");

foreach($a as $name=>$lastname){
	echo $name = $lastname;
}


/*

kukmarkumar
*/
?>



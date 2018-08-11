<?php

// connect with host with 3 parameter

$host = mysql_connect("localhost","root","");

// select database using $host identifire

$db = mysql_select_db("umarkhan",$host);

if(!$db)

{
	// echo mysql_error();
	
}else{
	
	// echo "connected";
	
}

?>
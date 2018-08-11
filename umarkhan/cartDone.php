<?php
ob_start();
session_start();
include ("config/db.php"); 

function getRealIpAddress()
{
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
}

if(isset($_GET['add_cart']))
{
	
	
echo 	$ip_add = getRealIpAddress();
echo 	$p_id = $_GET['add_cart'];

$sel = "select * from cart where p_id='$p_id' AND ip_add='$ip_add'";
$data = mysql_query($sel);
if(mysql_num_rows($data)>0)
{
	
	header ("location:index.php");
}else{

	
	 $sql1 = "insert into cart (p_id,ip_add,qty,status) values	('$p_id', '$ip_add' , 1,'pending')";
		 
		 $result1 = mysql_query($sql1);
		 
		 if(!$result1)
		 
		 {
			 echo mysql_error();
			 
		 }else{
			 
			 header ("location:index.php");
			 
		 }
}

}

?>
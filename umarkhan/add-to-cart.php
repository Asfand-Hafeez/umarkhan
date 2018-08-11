<?php
ob_start();
session_start();
include ("config/db.php");

     

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AB</title>

    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- bjqs.css contains the *essential* css needed for the slider to work -->
<link rel="stylesheet" href="css/bjqs.css">

<!-- some pretty fonts for this demo page - not required for the slider -->
<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

<!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
<link rel="stylesheet" href="css/demo.css">

<!-- Foneawesome-->
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/cloudzoom.css">

<script src="js/jquery-2.2.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="js/bjqs-1.3.min.js"></script>

        <!-- Include Cloud Zoom script. -->
        <script type="text/javascript" src="js/cloudzoom.js"></script>

        <!-- Call quick start function. -->
        <script type="text/javascript">
            CloudZoom.quickStart();
        </script>    
	
</head>
  <body style="padding-top:75px;">

<?php

   include ("includes/header.php");

?>

<div class="container">

	<?php

	      $id = isset($_GET['id'])?$_GET['id']:"";
		  
		  $title = isset($_GET['title'])?$_GET['title']:"";   
		  
		  if(!isset($_SESSION['cart_items']))
		  
		  {
			  
			  $_SESSION['cart_items']  = array();
			  
		  }
		  
		  if(array_key_exists($id,$_SESSION['cart_items']))
		  
		  {
			  
			  header ("location:index.php?action=exists&id=$id&name=$title");
			  
		  }else{
			  
			  $_SESSION['cart_items'][$id] = $title;
			  header ("location:index.php?action=added&id=$id&name=$title");
			  
		  }
	

	     
	 ?>




</body>
</html>
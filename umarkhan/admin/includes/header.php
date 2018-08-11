<?php
  ob_start();
  session_start();
  

  include ("../config/db.php");


?>

<?php

if(empty($_SESSION['usernsme']))
{
	header("location:login.php");
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UmarExpress</title>

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

<script src="js/jquery-2.2.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="js/bjqs-1.3.min.js"></script>


</head>
  <body>
  <div class="container-fluid1">
  <header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b>UmarExpress</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a></i> Admin Panel <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Change Password</a></li>
        <li><a href="googlemap.php">Map location</a></li>
         <li><a href="logout.php">Logout</a></li>

      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control form-control2" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!-- /End navigation bar -->
</header><!-- /End header-->

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
    <title>Delete Account</title>
    <link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96">

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
	
    <style>
    .ab{
		color:#fff;
		background-color:#000;
	}
	.ab:hover{
		color:#666;
	}
    </style>


</head>
  <body>



<?php

 include ("includes/header.php");

?>
<div class="container">
   <div class="row">
   
<form method="post" action="">

<table class="table" align="center" width="600">
<tr align="center">
<td colspan="2"><h2>Do You really want to delete your account?</h2></td>
</tr>
<tr align="center">
<td><input type="submit" name="yes" value="Yes, I Want to delete" class="bg-danger"/>
<input type="submit" name="no" value="No, I do not Want to delete" class="bg-success"/></td>
</tr>

</table>
</form>
<?php

if(isset($_POST['yes'])){
	$del_cus = "DELETE FROM `user` WHERE id='$_SESSION[user_id]'";
	$run_cus = mysql_query($del_cus);
	
	if($run_cus){
		session_destroy();
		echo"<script>alert('Your Account has been deleted,Good Bye!')</script>";
		echo"<script>window.open('index.php','_self')</script>";
		}
	
	}
if(isset($_POST['no'])){
	
	echo"<script>window.open('orderlist.php','_self')</script>";
}

?>






   
</div><!--End Row---->
</div><!--End container-->
<div class="container">
<div class="row">

<?php

   include ("includes/footer.php");

?>


</div>






</div><!--End container-->
</div><!--End container-fluid1-->
  </body>
</html>
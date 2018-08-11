
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
    <title>Edit profile</title>
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
	
</head>
  <body>


<?php

 include ("includes/header.php");

?>
<div class="container">
   <div class="row">
   
  <?php

$id = $_SESSION['user_id'];

$sql2 = "SELECT * from user where id = '$id'";

$result2 = mysql_query($sql2);

$data1 = mysql_fetch_array($result2);

?>
   
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-md-offset-3" style="margin-bottom:100px; margin-top:50px;">
        <h3 class="heading5" style="margin-bottom:30px; font-size:35px;">Edit Profile</h3>
        <div class="loginbox">
          <form class="form-vertical" method="post">
            <fieldset>
              <div class="control-group">
                <label class="control-label">Name:</label>
                <div class="controls">
                  <input type="text" name="name" value="<?php echo $data1['name']; ?>" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email Address:</label>
                <div class="controls">
                  <input type="text" name="email" value="<?php echo $data1['email']; ?>" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Username:</label>
                <div class="controls">
                  <input type="text" name="username" value="<?php echo $data1['username']; ?>" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;" required>
                </div>
              </div>
              <br>
              <input type="submit" class="btn btn-primary" value="Edit" name="dtnimg" />
            </fieldset>
          </form>
        </div>
      </div>



      <?php

include "db.php";

if($_POST)
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	
	

$sql1 = "UPDATE user SET name='$name', email='$email', username='$username' where id = '$id'";

$result1 = mysql_query($sql1);

if(!$result1)
{
	echo mysql_error();
	
}else{
	
	header ("location:index.php");
	
}

}
?>












</div><!--End Row---->
</div><!--End container-->
<hr>
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
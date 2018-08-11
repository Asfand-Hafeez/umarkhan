<?php
  
    ob_start();
	session_start();
   include ("config/db.php");
if(!empty($_SESSION['user_id']))
{
	header ("location:orderlist.php");
}
     

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Checkout</title>
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

				  
				  if(isset($_POST['logname']))
				  
				  {
				  
				  $username1 = $_POST['username'];
				  
				  $password1 = $_POST['password'];
				  
				  $sql1 = "SELECT * FROM user where username = '$username1' and password = '$password1' and status !='admin'";

                  $result1 = mysql_query($sql1);	

                  $data = mysql_fetch_array($result1);
				  
				  if($data['username'] != $username1 or $data['password'] != $password1)
                  {
					  
                     	echo "invalid login";
						
						
                  }else if($data['username'] == $username1 and $data['password'] == $password1)
				  {
					  $_SESSION['user_id'] = $data['id'];
					  $_SESSION['name'] = $data['name'];
					  $_SESSION['email'] = $data['email'];
					  $_SESSION['username'] = $data ['username'] ;
					  $_SESSION['password'] = $data ['password'] ;
					  $_SESSION['status'] = $data['status'];
				       
				       header ("location:index.php");
					   
				  }
			
				  }
			
			?>
            

   
   
   
   
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2 class="heading5" style="margin-bottom:30px;" >Login</h2>
            <div class="loginbox">
              <form class="form-vertical" method="post">
                  <fieldset>
                     <div class="control-group">
                       <label class="control-label">Username:</label>
                    <div class="controls">
                  <input type="text" name="username" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password:</label>
                <div class="controls">
                  <input type="password" name="password" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;" required>
                </div>
              </div>
              <input type="submit" class="btn btn-primary"  value="Login" name="logname" />
			  </fieldset>
             </form>
			 </div>
     </div>
   
   
   <?php
   
        if(isset($_POST['dtnimg']))
		
		{
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$username = $_POST['user'];
			$password = $_POST['pass'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$phone = $_POST['phone'];
			$cash = $_POST['cash'];
			$status = "user";
			
			$sql = "INSERT INTO `user`(`name`, `email`, `username`, `password`, `address`, `city`, `phone`, `cash`, `status`) VALUES ('$name', '$email', '$username', '$password','$address','$city','$phone','$cash','$status')";
			
			$result = mysql_query($sql);
			
			if(!$result)
			
			{
				
				echo mysql_error();
				
			}else{
				
				echo "Registered Successfully";
				
			}
			
   
		}
   ?>
   
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2 class="heading5" style="margin-bottom:30px;">Register</h2>
        <div class="loginbox">
          <form class="form-vertical" method="post">
            <fieldset>
              <div class="control-group">
                <label class="control-label">Your Name:</label>
                <div class="controls">
                  <input type="text" name="name" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">E-Mail Address:</label>
                <div class="controls">
                  <input type="email" name="email" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Username:</label>
                <div class="controls">
                  <input type="text" name="user" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Password:</label>
                <div class="controls">
                  <input type="password" name="pass" style="width:444px; height:31px; padding:7px 12px; margin-bottom:10px;" required>
                </div>
              </div>
			   <div class="control-group">
                <label class="control-label">Address:</label>
                <div class="controls">
                  <input type="text" name="address" style="width:444px; height:31px; padding:7px 12px; margin-bottom:10px;" required>
                </div>
              </div>
			   <div class="control-group">
                <label class="control-label">City:</label>
                <div class="controls">
                  <input type="text" name="city" style="width:444px; height:31px; padding:7px 12px; margin-bottom:10px;" required>
                </div>
              </div>
			   <div class="control-group">
                <label class="control-label">Phone:</label>
                <div class="controls">
                  <input type="text" name="phone" style="width:444px; height:31px; padding:7px 12px; margin-bottom:10px;" required>
                </div>
              </div>
			     
			<div class="radio">
			<label><input type="radio" name="cash" value="CASH ON DELIVERY" checked>CASH ON DELIVERY</label>
			</div>

              <br>
              <input type="submit" class="btn btn-primary" value="Register" name="dtnimg" />
            </fieldset>
          </form>
        </div>
      </div>















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
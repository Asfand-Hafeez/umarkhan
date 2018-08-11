
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
    <title>Contact</title>
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
<style>
body{margin:50px 0px 0px 0px; padding:0;}
.iframe{
	border:none;
	width:100%;
	height:450px;
	border-bottom:10px solid #ccc;
}

.scrolloff{
   pointer-events: none;
}
</style>



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
        
        <script>
$(function() {
    $('#gmap-holder').click(function(e) {
        $(this).find('iframe').css('pointer-events', 'all');
    }).mouseleave(function(e) {
        $(this).find('iframe').css('pointer-events', 'none');
    });
})
</script>


</head>
  <body>



<?php

 include ("includes/header.php");

?>

<?php

 $sql = "SELECT * FROM tbl_map";
 
 $result = mysql_query($sql);
 
 $data = mysql_fetch_array($result);





?>


<div id="gmap-holder">
<iframe class="iframe" style="pointer-events: none;" src="https://maps.google.com/maps?q=<?php echo $data['latitude']; ?>,<?php echo $data['longitude']; ?>&hl=es;z=14&amp;output=embed"></iframe>
</div>



<div class="container">
   <div class="row">
   
            

   
   
   
   
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2 class="heading5" style="margin-bottom:30px;" >Contact</h2>
            <div class="loginbox">
              <form class="form-vertical" method="post">
                  <fieldset>
                     <div class="control-group">
                       <label class="control-label">Name:</label>
                    <div class="controls">
                  <input type="text" name="username" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email:</label>
                <div class="controls">
                  <input type="email" name="password" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;">
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Phone:</label>
                <div class="controls">
                  <input type="text" name="password" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px;">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Message:</label>
                <div class="controls">
                  <textarea name="password" style="width:444px; height:150px; padding:7px 12px; margin-bottom:20px;"></textarea>
                </div>
              </div>

              <input type="submit" class="btn btn-primary"  value="Send" name="logname" />
			  </fieldset>
             </form>
			 </div>
     </div>
   
   
   
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

           <p style="margin-top:110px; font-size:21px;"><b>Email:</b> umarkhan@gmail.com</p>
           <p style="margin-top:48px; font-size:21px;"><b>Phone:</b> (92)3144007066</p>
           <p style="margin-top:48px; font-size:21px;"><b>Address:</b>Chek No 84 j/b Sirshamir Road Faisalabad</p>
    





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
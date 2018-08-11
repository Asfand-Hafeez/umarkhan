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
    <title>Umar Express</title>
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
<div class="container-fluid1">

<?php

    include ("includes/header.php");

?>

<div class="container">
<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>

    <div class="list-group">
        <span href="#" class="list-group-item active">
           <span style="padding-left:10px; font-size:20px;"> Categories</span>
            
        </span>
        
        <?php
		
		      $sql = "SELECT * from categories";
			  
			  $result = mysql_query($sql);
			  
			  while($data = mysql_fetch_array($result))
			  
			  {
		
		
		?>
        
        
        <a href="category.php?id=<?php echo $data['id']; ?>" class="list-group-item">
            &raquo; <?php echo $data['name']; ?>
        </a>
        
        <?php } ?>
        
        


        
    </div>        
</div>

<?php
     if($_GET){
	 $message = $_GET['action'];
	 
	 $my_title = $_GET['name'];
	 
	 if($message == "exists")
	 
	 {
		 echo "$my_title already exist";
		 
	 }elseif($message == "added")
	 
	 {
		 echo "$my_title added to cart";
		 
	 }
		 
	 }
?>







<div class="col-md-9 col-sm-8 col-xs-12">
    <div id="container">
  <p><a href="admin/login.php" target="_blank" style="display:block;">Admin Login</a></p>
        <span href="#" class="list-group-item active">
           <span style="padding-bottom:10px; font-size:20px;"> Latest for sale</span>
            
        </span>

      <!--  Outer wrapper for presentation only, this can be anything you like -->
      <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
        
        <?php
		
		    $sql2 = "SELECT * from tbl_slider order by id desc limit 7";
			
			$result2 = mysql_query($sql2);
			
			while( $data2 = mysql_fetch_array($result2))
			
			{
		
		
		?>
        
        
          <li><img src="admin/uploads_sliders/<?php echo $data2['image']; ?>"></li>
         
          
          <?php } ?>
          
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->

      <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 540,
            width       : 1000,
            responsive  : true
          });

        });
      </script>

</div>
</div>

</div><!-- End row -->

<div><!--Tabs -->

<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#Home" data-toggle="tab">Latest</a></li>
</ul>

<div class="tab-content">
 <div class="tab-pane fade in active" id="Home">
    <div class="row">
    <?php
         
		 $sql1 = "SELECT * from tbl_products  order by id desc limit 8";
		 
		 $result1 = mysql_query($sql1);
		 
		 while($data1 = mysql_fetch_array($result1))
		 
		 {
    
    
    ?>
    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="thumbnail">
      <a href="detail.php?id=<?php echo $data1['id']; ?>"><img src="admin/uploads/<?php echo $data1['image']; ?>" alt="image" style="height:256px; width:197px;"></a>
      <div class="caption" style="text-align:center;">
        <h3><a href="detail.php?id=<?php echo $data1['id']; ?>" style="color:#333; text-decoration:none;"><?php echo $data1['title']; ?></a></h3>
        <h4 style="color:#F00;"><b>PKR <?php echo $data1['price']; ?></b></h4>
        <p><a href="cartDone.php?add_cart=<?php echo $data1['id'];?>" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>
  
  <?php } ?>
  
  
  
</div><!-- End row -->
 </div>
 
 
  <div class="tab-pane fade" id="profile">
  <div class="row">
  
  
    <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/download.jpg"  >
      <div class="caption" style="text-align:center;">
        <h3>iPhone 6s</h3>
        <h4 style="color:#F00;"><b>PKR 60,000</b></h4>
        <p><a href="#" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>

  
    <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/download (2).jpg" alt="image" style="width:197px; height:256px;">
      <div class="caption" style="text-align:center;">
        <h3>iPhone 6s</h3>
        <h4 style="color:#F00;"><b>PKR 60,000</b></h4>
        <p><a href="#" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>


  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/download (1).jpg" alt="image" >
      <div class="caption" style="text-align:center;">
        <h3>iPhone 6s</h3>
        <h4 style="color:#F00;"><b>PKR 60,000</b></h4>
        <p><a href="cart.php" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>


  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/download (3).jpg" alt="image" style="width:197px; height:256px;">
      <div class="caption" style="text-align:center;">
        <h3>iPhone 6s</h3>
        <h4 style="color:#F00;"><b>PKR 60,000</b></h4>
        <p><a href="#" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div> 


  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/download (1).jpg" alt="image">
      <div class="caption" style="text-align:center;">
        <h3>iPhone 6s</h3>
        <h4 style="color:#F00;"><b>PKR 60,000</b></h4>
        <p><a href="#" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>


  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/download (1).jpg" alt="image">
      <div class="caption" style="text-align:center;">
        <h3>iPhone 6s</h3>
        <h4 style="color:#F00;"><b>PKR 60,000</b></h4>
        <p><a href="#" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>


  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/download (1).jpg" alt="image">
      <div class="caption" style="text-align:center;">
        <h3>iPhone 6s</h3>
        <h4 style="color:#F00;"><b>PKR 60,000</b></h4>
        <p><a href="#" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>


  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="img/download (1).jpg" alt="image">
      <div class="caption" style="text-align:center;">
        <h3>iPhone 6s</h3>
        <h4 style="color:#F00;"><b>PKR 60,000</b></h4>
        <p><a href="#" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>
  </div><!--End row -->
 </div>
 
 
 
   <div class="tab-pane fade" id="message">
   <div class="row">
  
   <?php
   
         $sql3 = "SELECT * from tbl_products ORDER BY views DESC limit 8";
		 
		 $result3 = mysql_query($sql3);
		 
		 while($data3 = mysql_fetch_array($result3))
		 
		 {
       
   $_SESSION['img']=$data3['image'];
   
   ?>
   
     <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <a href="detail.php?id=<?php echo $data3['id']; ?>"><img src="admin/uploads/<?php echo $data3['image']; ?>" style="height:256px; width:197px;" alt="image"  ></a>
      <div class="caption" style="text-align:center;">
        <a href="detail.php?id=<?php echo $data3['id']; ?>" style="color:#333; text-decoration:none;"><h3><?php echo $data3['title']; ?></h3></a>
        <h4 style="color:#F00;"><b>PKR <?php echo $data3['price']; ?></b></h4>
        <p><a href="#" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>

    <?php } ?>


 </div>
</div>
</div><!-- End tab contents -->
</div><!-- End Tabs-->


<hr>
<div class="row" style="margin-bottom:20px;">
<h3 style="padding-left:17px;">Recently viewed</h3>




<div class="col-md-2">
<img src="admin/uploads/<?php echo $_SESSION['pro_img'];  ?>" class="img-responsive">
</div>

</div>
<div class="row">
<?php

   include ("includes/footer.php");

?>
</div>






</div><!--End container-->
</div><!--End container-fluid1-->
  </body>
</html>
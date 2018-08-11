
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
    <?php
	          
		   $id = $_GET['id'];  
	
           $sql2 = "SELECT * from tbl_products where id = '$id'";
		   
		   $result2 = mysql_query($sql2);
		   
		   $data2 = mysql_fetch_array($result2);
		   
		   $cat_id = $data2['category'];
		   
	?>
    <title><?php echo $data2['title']; ?></title>
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
        
           .cart{
			   float:left; margin:auto;
		   }
		   .cart:hover{
			   color:#FFF;
			   background-color:#F00;
			   border-color:#F00;
			   text-decoration:none;
		   }
			  
        
        </style>
	
</head>
  <body style="padding-top:75px;">

<?php

   include ("includes/header.php");

?>
<div class="container">
<div class="well" style="height:20px; font-size:12px; margin-bottom:40px; line-height:0px;">

<?php

     $sql3 = "SELECT * from categories where id = '$cat_id'";
	 
	 $result3 = mysql_query($sql3);
	 
	 $data3 = mysql_fetch_array($result3);




?>

<a href="index.php">Home </a>  &nbsp;  &raquo; &nbsp;
<a href="category.php?id=<?php echo $data3['id']; ?>"> <?php echo $data3['name']; ?></a> &nbsp;  &raquo; &nbsp; 
<a><?php echo $data2['title']; ?></a>
</div>

<div class="row">

      <?php
	  
	            
						  
	       		$sqlv = "select views from tbl_products where id = '$id'";
				$resultv = mysql_query($sqlv);
				$datav = mysql_fetch_array($resultv);
				$views = $datav['views'];
				$views = $views +1;
				
				$sqlz = "UPDATE tbl_products SET views='$views' where id = '$id'";
				$resultz = mysql_query($sqlz);

	  
	  
	  
	  ?>

     
    
     <?php
	 
	       
		   
		   $sql = "SELECT * from tbl_products where id = '$id' order by id desc";
		   
		   $result = mysql_query($sql);
		   
		   $data = mysql_fetch_array($result);
		   
		   $cat = $data['category'];
		   
		   $_SESSION['pro_img'] = $data['image'];
	 
	 
	 ?>
     
     
      <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
        <ul class="thumbnails mainimage clearfix" style="border:#ddd 1px solid; list-style:none; padding:0px;">
          <li> 
          
          
         
          
          <img src="admin/uploads/<?php echo $data['image']; ?>" class="img-responsive cloudzoom" data-cloudzoom = "zoomImage: 'admin/uploads/<?php echo $data['image']; ?>'"> 
         
          </li>
        </ul>
        <ul class="thumbnails mainimage clearfix mt10">
        </ul>
        <div class="mt10">Mouse move on Image to zoom</div>
      </div>
	  
	  
      <!-- Right Details-->
      <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12 mt40column">
        
          
          
          
          
          <h2 class="heading3 mt40" style="margin-right:20px; margin-bottom:30px;">Title: <?php echo $data['title']; ?> </h2>
        <!-- Product Description tab & Price-->
        <div class="productdesc" style="height:200px;">
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#price" data-toggle="tab" style=" font-size:20px;">Price</a> </li>
            <li class=""><a href="#description" data-toggle="tab" style=" font-size:20px;">Description</a> </li>
            
          
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in  active" id="price" style="border:#ddd 1px solid; padding:16px;">
            <span>
            Rs. <?php echo $data['price']; ?>
            </span>
             </div>
             <div class="tab-pane fade " id="description" style="border:#ddd 1px solid; padding:16px;">
            <span>
            <?php echo $data['description']; ?>
            </span>
             
          </div>

             
          </div><!-- End tab contenta -->
</div>

           <form method="post" action="add-to-cart.php?id=<?php echo $data['id']; ?>&title=<?php echo $data['title']; ?>">
		 <div class="col-md-9 col-md-offset-3">
         <a href="cartDone.php?add_cart=<?php echo $data['id'];?>" class="btn1 btn-primary1" role="button">Add to cart</a>
         
		 <a href="wishlistDone.php?add_wish=<?php echo $data['id'];?>"  role="button" class="btn1 btn-primary1" style="float:left; margin:0px 0px 0px 20px;">Add to wishlist</a>  
                 
             </div>

   
          </form>
          
          
          <?php
		  

    
	
	
	$sql12 = "SELECT * FROM tbl_products where id  = '$id'";
	
	$result12 = mysql_query($sql12);
	
	$data12 = mysql_fetch_array($result12);
	


?>

		  
          
          
        </div>
      </div>
   

        
        


        
           

<div class="row">
<div class=" col-md-6 col-md-offset-4" >
<h1 style="margin:30px 0px 45px 72px;">Related posts</h1>
</div>




<div><!--Tabs -->


 <?php

     $sql1 = "SELECT * from tbl_products where category = '$cat' order by id desc";
	 
	 $result1 = mysql_query($sql1);
	 
	 while($data1 = mysql_fetch_array($result1))
	 
	 {

     
  ?>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
     <a href="detail.php?id=<?php echo $data1['id']; ?>"> <img src="admin/uploads/<?php echo $data1['image']; ?>" alt="image" style=" width:196px; height:256px;"></a>
      <div class="caption" style="text-align:center;">
        <a href="detail.php?id=<?php echo $data1['id']; ?>" style="color:#333; text-decoration:none;"><h3><?php echo $data1['title']; ?></h3></a>
         <h4 style="color:#F00;"><b>PKR <?php echo $data1['price']; ?></b></h4>
        <p><a href="cartDone.php?add_cart=<?php echo $data1['id'];?>" class="btn1 btn-primary1" role="button">Add to cart</a></p>
      </div>
    </div>
  </div>
 
 <?php } ?>
 
 

 </div>
 
 </div>
 
 
 



<hr>
<div class="row">
<?php

  include ("includes/footer.php");

?>
</div>






</div><!--End container-->
</div><!--End container-fluid1-->
  </body>
</html>
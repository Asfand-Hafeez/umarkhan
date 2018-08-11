<?php

    include ("includes/header.php");



?>

<div class="container">

<?php

   
   include ("includes/sidebar.php");


?>

<div class="col-md-9 col-sm-8 col-xs-12">

<span style="font-size:36px;">View Products</span>

<div class="row">


  
  
  <?php
  
       $sql = "SELECT * from tbl_products order by id desc";
	   
	   $result = mysql_query($sql);
	   
	   while( $data = mysql_fetch_array($result))
	   
	   {
   
  ?>
  
  <style>
  .new{ position:absolute; border-radius:50%; width:75px; height:60px; background-color:#093; text-align:center; line-height:55px; font-size:18px; font-weight:bold; color:#FFF;}
  
  .sale{ position:absolute; border-radius:50%; width:75px; height:60px; background-color: #F00; text-align:center; line-height:55px; font-size:18px; font-weight:bold; color:#FFF;}
  
  .featured{ position:absolute; border-radius:50%; width:75px; height:60px; background-color: #FC3; text-align:center; line-height:55px; font-size:18px; font-weight:bold; color:#FFF;}
  </style>
  
  
  <div class="col-sm-6 col-md-4 col-xs-12">
  
    <div class="thumbnail" style=" position: relative">
    
    <?php
	
	if($data['status']=='New')
	{
    ?>
     <div class="new">New</div>
     <?php
	}elseif($data['status']=='Sale')
	{
	?>
     <div class="sale">Sale</div>
     <?php
	}elseif($data['status']=='Featured')
	{
	?>
     <div class="featured">Featured</div>
     <?php
	}
     ?>
      <img style="width: 197px; height:256px"  src="uploads/<?php echo $data['image']; ?>" alt="img">
      <div class="caption" style="text-align:center;">
        <h3><?php echo $data['title']; ?></h3>
        
		<?php
		if($data['sale_price']!='')
		{
		?>
        <p>Rs. <span style="text-decoration:line-through;">
		<?php echo $r =  $data['price']; ?></span>  Rs. <?php  $x=$data['sale_price']; $z = $x*$r/100; echo $r-$z; ?></p>
       <?php
		}else{
	   ?>
      <p>Rs. <?php echo $r =  $data['price']; ?></p>
       <?php
		}
       ?>
         <p>
         <a href="edit_product.php?id=<?php echo $data['id']; ?>" class="btn btn-primary" role="button">Edit</a>
         <a href="delete_product.php?id=<?php echo $data['id']; ?>" class="btn btn-danger" role="button">Delete</a>
         <a href="pro_status.php?id=<?php echo $data['id']; ?>" class="btn btn-warning" role="button">status</a>
         <a href="pro_sale.php?id=<?php echo $data['id']; ?>" class="btn btn-info" role="button">Sale</a>
         </p>
      </div>
      
    </div>
   
     </div>
    
    <?php } ?>
    
    
 
  
  
  
  
  <nav>
  <ul class="pagination pull-right" style="margin-right:10px;">
    <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">4</a></li>
	<li><a href="#">5</a></li>
    <li><a href="#" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
    
  </ul>
</nav>

  
  
  
</div>








</div>
</div><!-- End row -->
 <hr>
</div><!-- End container -->

  </body>
</html>
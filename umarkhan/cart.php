<?php  
    ob_start();
	session_start();
   include ("config/db.php");
   
   if(isset($_GET['reduceid']))
   {
		 $sql1 = "UPDATE `cart` SET `qty`=`qty`-1 where id ='$_GET[reduceid]'";
		 
		 $result1 = mysql_query($sql1);
		 
		 if(!$result1)
		 
		 {
			 echo mysql_error();
			 
		 }else{
			 
			 header ("location:cart.php");
			 
		 }
   }
   if(isset($_GET['incrementid']))
   {
		 $sql1 = "UPDATE `cart` SET `qty`=`qty`+1 where id ='$_GET[incrementid]'";
		 
		 $result1 = mysql_query($sql1);
		 
		 if(!$result1)
		 
		 {
			 echo mysql_error();
			 
		 }else{
			 
			 header ("location:cart.php");
			 
		 }
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cart</title>
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
$ip_add = getRealIpAddress();
   if(isset($_GET['id']))
   {
	 $del = mysql_query("DELETE FROM `cart` WHERE ip_add = '$ip_add' and p_id = '$_GET[id]'");
	   
	   if($del){
		   echo"<script>window.open('cart.php','_self')</script>";
	   }
   }
?>

<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<div class="jumbotron" style="background: linear-gradient(to bottom, #fff 1%, #f9f9f9 98%) repeat scroll 0 0 #f5f5f5; border:#dfdfdf 1px solid; margin:50px 0px 0px 0px;">

<table class="table table-bordered">
<th style="width: 100px;">Remove</th>
<th style="width:250px;">Product Image</th>
<th style="width:300px;font-weight:bold;">Item Name</th>

<th style="width:200px;">Stock</th>

<th style="width: 100px;">Total Price</th>
	


<tr style="border-top:1px solid #dfdfdf; padding-top:10px;">
<?php

	
$total = 0;
$userinfo = array();

$sel = "select * from cart where ip_add='$ip_add'";
$data = mysql_query($sel);
$count=mysql_num_rows($data);
while($cartData=mysql_fetch_array($data))
{
$selectP = mysql_query("SELECT * FROM `tbl_products` where id = '$cartData[p_id]'");
$ProData = mysql_fetch_array($selectP);
$product_price	= array($ProData['price']);
	$only_price = $ProData['price'];
	$values = array_sum($product_price);
	$total +=$values;

?>
<td style=" padding:10px;">
<a href="cart.php?id=<?php echo $ProData['id'];?>"><i class="fa fa-times" style=" color:#0088cc; font-size:20px;"></i></a>
</td>
<td style="padding:10px;">
<img src="admin/uploads/<?php echo $ProData['image']; ?>" style="height:100px; width:100px; margin-left:20px;">
</td>
<td style="color:#0088cc; font-size:15px; margin-left:20px;">
<a href="" style="color:#0088cc;" ><?php echo $ProData['title']; ?></a>
</td>
<td>
<div style="margin:0; width:auto; display:inline-block; position:relative;">

<a href="cart.php?reduceid=<?php echo $cartData['id'];?>" 
class="btn btn-danger <?php
if($cartData['qty']<=1)
{?> 
disabled 
<?php
}
?>
"/>-</a>	

<a href="#" class="btn btn-success"/><?php echo $cartData['qty'];?></a>
<a href="cart.php?incrementid=<?php echo $cartData['id'];?>" class="btn btn-primary"/>+</a>
</div>
</td>
<td>
<?php 
echo $amount = $cartData['qty']*$only_price;
 $userinfo[] = $amount;
?>
</td>
</tr>
<?php
}
?>
	<tr>
	<td colspan="4" class="bg-success" align="right"><b>SUB TOTAL</b></td>
    <td class="bg-danger"><b>
	<?php
	//echo $total;
    echo array_sum($userinfo);
	?></b></td>	
	</tr>
	
</table><!-- End table -->





<div style="margin:10px 0px 100px 0px;">
<a href="index.php" class="btn btn-danger btn-lg pull-right" style="padding:10px 16px; font-size:18px; border-radius:6px;" >Continue shopping</a>

</div>
<div>
<a href="login.php" class="btn btn-primary pull-right" style="padding:10px 16px; font-size:18px; border-radius:6px; margin-bottom:100px;" >Proceed to checkout</a>

</div>



</div><!-- End colum -->
</div><!-- End row -->

<div class="row">
<?php

   include ("includes/footer.php");

?>
</div>


	
	


</div><!-- End container -->
</div><!-- End fluid container1 -->

  </body>
</html>
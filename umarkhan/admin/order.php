<?php

    include ("includes/header.php");



?>

<div class="container">

<?php

     include ("includes/sidebar.php");
if(isset($_GET['status']))
{
	$status = $_GET['status'];
	if($status == "pending")
	{
mysql_query("UPDATE `cart` SET `status`='confirm' WHERE `id`='$_GET[id]'");
header("location:order.php");
	}else if($status == "confirm"){
mysql_query("UPDATE `cart` SET `status`='pending' WHERE `id`='$_GET[id]'");
header("location:order.php");		
	}
}

?>





<div class"col-md-8 col-sm-8 col-xs-6">
	
<h2 >All Order list Customer..</h2>

<div class="row">

<div class="col-md-8 col-sm-12 col-xs-12">


<table class="table table-striped" style="margin-top:30px;">

<th>Product Name</th>
<th>Order</th>
<th>Order By Name</th>
<th>Order By Phone </th>
<th>Order By Email</th>
<th>Order By City</th>
<th>Order By Address</th>
<th>Action</th>
<th>Status</th>

<?php

    $sql1 = "SELECT * from cart";
	
	$result1 = mysql_query($sql1);
	
	while($data = mysql_fetch_array($result1))

{
	$sql11 = "SELECT * FROM `tbl_products` where id ='$data[id]'";
	$result11 = mysql_query($sql11);
	$data1 = mysql_fetch_array($result11);
	
	$usql = "SELECT * FROM `user` where id ='$data[user_id]'";
	$Uresult = mysql_query($usql);
	$Udata = mysql_fetch_array($Uresult);
	
?>

  <tr>
      <td><?php echo $data1['title'];  ?></td>
	  <td><?php echo $data['qty'];  ?></td>
	  <td><?php echo $Udata['name'];  ?></td>
	  <td><?php echo $Udata['phone'];  ?></td>
	  <td><?php echo $Udata['email'];  ?></td>	
	  <td><?php echo $Udata['city'];  ?></td>
	  <td><?php echo $Udata['address'];  ?></td>
	  <td><?php echo $Udata['cash'];  ?></td>		  
      <td><a href="order.php?id=<?php echo $data['id'];?>&status=<?php echo $data['status'];?>"><?php echo $data['status'];?></a>
  </tr>
  
  
  <?php } ?>
</table>





</div>


</div>

</div>
</div><!-- End row -->
 <hr>
</div><!-- End container -->

  </body>
</html>
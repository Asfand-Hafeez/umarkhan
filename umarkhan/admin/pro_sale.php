<?php

   include ("includes/header.php");


?>


<div class="container">

<div class="row">


<div class="col-md-6">

<?php

    $id = $_GET['id'];
	


?>



<form method="post" enctype="multipart/form-data">

<div class="form-group">
<input type="text" name="sale_price" class="form-control" />
<br />
<select  style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px;" name="status" required>


<option value="">Select</option>
<option value="Sale">Sale</option>

</select>




<input type="submit" class="btn btn-primary" value="Edit" name="" style="margin-left:15px;" />



</div>



</form>

</div>

<?php

    if($_POST)
	
	{
		
		$pro_status = $_POST['status'];
		$sale_price = $_POST['sale_price'];
		
		
			
		
		$sql2 = "UPDATE tbl_products SET status = '$pro_status',sale_price = '$sale_price' where id = $id";
		
		
		$result2 = mysql_query($sql2);
		
		if(!$result2){
			
			echo mysql_error();
		}else{
		
			
			header ("location:view_product.php");
			
		
		}

     

	}
?>







</div><!-- End row -->
<hr style="margin-top:80px;">
</div><!-- End container -->



</body>
</html>
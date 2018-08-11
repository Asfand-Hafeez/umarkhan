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
<select  style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px;" name="status" required>


<option value="">Select</option>
<option value="New">New</option>

<option value="Sale">Sale</option>
<option value="Featured">Featured</option>



</select>




<input type="submit" class="btn btn-primary" value="Edit" name="" style="margin-left:15px;" />



</div>



</form>

</div>

<?php

    if($_POST)
	
	{
		
		$pro_status = $_POST['status'];
		
		
			
		
		$sql2 = "UPDATE tbl_products SET status = '$pro_status' where id = $id";
		
		
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
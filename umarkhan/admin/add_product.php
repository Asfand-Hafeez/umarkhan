<?php

    include ("includes/header.php");



?>

<div class="container">

<?php

     include ("includes/sidebar.php");


?>


<div class="col-md-8 col-sm-8 col-xs-12">

<div class="col-md-12 col-sm-12 col-xs-12">
<span style="font-size:36px; margin-left:15px;">Add Products</span>

<?php

     if($_POST)
	 
	 {
		 $title = $_POST['title'];
		 $price = $_POST['price'];
		 $category = $_POST['category'];
		 $description = $_POST['description'];
		 $description1 =  mysql_real_escape_string($description);
		  
		 
		 $folder = "uploads/";
	     $image = $_FILES['image']['name'];
	     $path = $folder . $image;
	     move_uploaded_file($_FILES['image']['tmp_name'],$path);
		 
		 
		 $sql1 = "INSERT into tbl_products(title,price,category,image,description) VALUES ('$title', '$price', '$category', '$image', '$description1')";
		 
		 $result1 = mysql_query($sql1);
		 
		 if(!$result1)
		 
		 {
			 echo mysql_error();
			 
		 }else{
			 
			 header ("location:view_product.php");
			 
		 }

		 
	 }
?>






<form method="post" enctype="multipart/form-data">

<div class="form-group">
<input type="text" placeholder="Title" style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px; margin-top:30px;" name="title"  /> 

<input type="text" placeholder="Price" style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px;" name="price"  /> 
<select  style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px;" name="category" required>


<option value="">Select Category</option>
<?php

    $sql = "SELECT * from categories";
	
	$result = mysql_query($sql);
	
	while($data =mysql_fetch_array($result))
	
	{

?>

<option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
<?php

	}

?>

</select>

<input type="file" placeholder="Add category" style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px;" name="image"  /> 

<textarea name="description" placeholder="Description" style="width:490px; height:120px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px; margin-right:100px;"></textarea>



<input type="submit" class="btn btn-primary" value="Add category" style="margin-left:15px;" />



</div>
</form>
</div>
</div>
</div><!-- End row -->
 
</div><!-- End container -->

  </body>
</html>
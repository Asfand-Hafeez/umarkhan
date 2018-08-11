<?php

   include ("includes/header.php");


?>


<div class="container">

<div class="row">


<div class="col-md-6">

<?php

    $id = $_GET['id'];
	
	$sql1 = "SELECT * from tbl_products where id = $id";
	
	$result1 = mysql_query($sql1);
	
	$data1 = mysql_fetch_array($result1);
	
	$cat_id = $data1['category'];



?>



<form method="post" enctype="multipart/form-data">

<div class="form-group">
<input type="text" placeholder="Title" style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px; margin-top:30px;" value="<?php echo $data1['title']; ?>"  name="title" /> 

<input type="text" placeholder="Price" style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px;" value="<?php echo $data1['price']; ?>" name="price"  /> 
<select  style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px;" name="category">


<?php
 $sqlx = "SELECT * from categories where id = '$cat_id'";
	
	$resultx = mysql_query($sqlx);
	$datax =mysql_fetch_array($resultx);
	
?>


<option value="<?php echo $datax['id']; ?>"><?php echo $datax['name']; ?></option>
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

<input type="file" style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px;" value="<?php echo $data1['image']; ?>"  name="image" /> 

<textarea name="description" placeholder="<?php echo $data1['description']; ?>" style="width:490px; height:120px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px; margin-right:100px;"></textarea>



<input type="submit" class="btn btn-primary" value="Edit" name="" style="margin-left:15px;" />



</div>



</form>

</div>

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
		
		
		if($image == ''){
		$sql2 = "UPDATE tbl_products SET title = '$title', price = '$price', category = '$category', description = '$description1' where id = $id";
		}else{
			
		
		$sql2 = "UPDATE tbl_products SET title = '$title', price = '$price', category = '$category', image = '$image', description = '$description1' where id = $id";
		}	
		
		$result2 = mysql_query($sql2);
		
		if(!$result2)
		
		{
			
			echo mysql_error();
			
		}else{
			
			header ("location:view_product.php");
			
		}
		

     

	}
?>
<div class="col-md-5 col-md-offset-1 ">

<img src="uploads/<?php echo $data1['image']; ?>" style="height:380px; width:250px;">

</div>







</div><!-- End row -->
<hr style="margin-top:80px;">
</div><!-- End container -->



</body>
</html>
<?php

    include ("includes/header.php");



?>

<div class="container">

<?php

     include ("includes/sidebar.php");


?>
<?php

    include ("../config/db.php");

?>


<div class="col-md-8 col-sm-8 col-xs-12">

<div class="col-md-12 col-sm-12 col-xs-12">
<span style="font-size:36px; margin-left:15px;">Add Slider Image</span>

<?php

     if(isset($_POST['dtnimg']))
	 
	 {
		 $folder = "uploads_sliders/";
	     $image = $_FILES['image']['name'];
	     $path = $folder . $image;
	     move_uploaded_file($_FILES['image']['tmp_name'],$path);
		 
		 $sql = "INSERT into tbl_slider(image) VALUE ('$image')";
		 
		 $result = mysql_query($sql);
		 
		 if(!$result)
		 
		 {
			 echo mysql_error();
			 
		 }else{
			 
			 header ("location:index.php");
			 
		 }

	 }
?>


<form method="post" enctype="multipart/form-data">

<div class="form-group">

 

<input type="file"  style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px; margin-top:50px;" name="image"  /> 



<input type="submit" class="btn btn-primary" value="Add Image" name="dtnimg" style="margin-left:15px;" />



</div>
</form>
</div>

<?php

    $sql1 = "SELECT * from tbl_slider";
	
	$result1 = mysql_query($sql1);
	
	while($data1 = mysql_fetch_array($result1))
	
	{



?>
<div class="col-md-3">

<img src="uploads_sliders/<?php echo $data1['image']; ?>" style="height:100px; width:150px; margin-top:50px;">

</div>
<?php } ?>



</div>
</div><!-- End row -->
 
</div><!-- End container -->

  </body>
</html>
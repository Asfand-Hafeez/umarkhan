<?php

   include ("includes/header.php");


?>


<div class="container">

<div class="row">
<div class="col-md-6 col-md-offset-3">

 <h3 style="font-size:36px; margin-left:15px; margin-top:60px;">Edit Category</h3>

</div>

<?php

     $id = $_GET['id'];

     $sql = "SELECT * from categories where id = $id ";
	 
	 $result = mysql_query($sql);
	 
	 $data = mysql_fetch_array($result);



?>

<div class="col-md-6 col-md-offset-3">
<form method="post">

<div class="form-group">
<input type="text" placeholder="Title" style="width:490px; height:39px; padding:7px 12px; margin-bottom:15px; border:1px solid #ccc; margin-left:15px; border-radius:4px; margin-top:30px;" value="<?php echo $data['name']; ?>" name="name"  /> 





<input type="submit" class="btn btn-primary" value="Edit category" style="margin-left:15px;" />



</div>



</form>

</div>

<?php

    if($_POST){
		
		$name = $_POST['name'];
		
		$sql1 = "UPDATE categories SET name = '$name' where id = '$id'";
		
		$result1 = mysql_query($sql1);
		
		if(!$result1)
		
		{
			
			echo mysql_error();
			
		}else{
			
			header ("location:index.php");
			
		}



	}
?>

</div><!-- End row -->
</div><!-- End container -->



</body>
</html><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
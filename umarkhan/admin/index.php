<?php

    include ("includes/header.php");



?>

<div class="container">

<?php

     include ("includes/sidebar.php");


?>





<div class"col-md-8 col-sm-8 col-xs-6">

<span style="font-size:36px; margin-left:15px;">Add Categories</span>

<?php

     if($_POST){
		 
	 $categories = $_POST['categories'];	 
 
     $sql = "INSERT into categories(name) VALUES ('$categories')";
	 
	 $result = mysql_query($sql);
	 
	 if(!$result){
		 
		 echo mysql_error();
		 
	 }

	 }
?>

<form method="post">

<div class="form-group">
<input type="text" placeholder="Add category" style="width:444px; height:31px; padding:7px 12px; margin-bottom:20px; border:1px solid #ccc; margin-left:15px; margin-right:307px; border-radius:4px; margin-top:30px;"  name="categories" /> 


<input type="submit" class="btn btn-primary" value="Add category" style="margin-left:15px;" />



</div>
</form>
<div class="row">

<div class="col-md-8 col-sm-12 col-xs-12">


<table class="table table-striped" style="margin-top:30px;">

<th>Name</th>
<th>Edit</th>
<th>Delete</th>

<?php

    $sql1 = "SELECT * from categories";
	
	$result1 = mysql_query($sql1);
	
	while($data = mysql_fetch_array($result1))

{
?>






  <tr>
      <td><?php echo $data['name'];  ?></td>
      <td><a href="edit_categories.php?id=<?php echo $data['id']; ?>">Edit</a></td>
      <td><a href="delete_categories.php?id=<?php echo $data['id']; ?>">Delete</a></td>
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
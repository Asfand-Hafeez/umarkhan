<?php

   include ("includes/header.php");


?>


<div class="container">

<div class="row">


<div class="col-md-6">





</div>

<?php

			
		
		$sql2 = "UPDATE tbl_products SET status = '',sale_price = ''";
		
		
		$result2 = mysql_query($sql2);
		
		if(!$result2){
			
			echo mysql_error();
		}else{
		
			
			header ("location:view_product.php");
		}

?>







</div><!-- End row -->
<hr style="margin-top:80px;">
</div><!-- End container -->



</body>
</html>
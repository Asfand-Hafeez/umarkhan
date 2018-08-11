<?php

function ipAdd() 
{
if (!empty($_SERVER['HTTP_CLIENT_IP']))

//CHECK IP FROM SHARE INTERNET
{
$ip=$_SERVER['HTTP_CLIENT_IP'];
}


elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))

//TO CHECK IP IS PASS FROM PROXY
{
$ip=$_SERVER['REMOTE_ADDR'];
}

}


//creating Cart//

function cart()
{
	global $db;
	
	if(isset($_GET['add_cart'])){
		
		$ip_add = ipAdd();
		
		$p_id =$_GET['add_cart'];
		
		$check_pro ="SELECT * FROM `cart` WHERE ip_add='$ip_add' AND p_id='$p_id'";
		
		$run_check = mysql_query($check_pro);
		
		if(mysql_num_rows($run_check)>0){
			
			echo "";
		}
		else {
		
		$q = "insert into cart (p_id,ip_add) values	('$p_id', '$ip_add')";
		$run_q = mysql_query($q);
		
		echo"<script>window.open('index.php','_self')</script>";
		}
	}
}

//getting the item cart

function items()
{
	if(isset($_GET['add_cart'])){
		global $db;
		
		$ip_add = ipAdd();
		
		$get_items = "select * from cart where ip_add='$ip_add'";	
		
		$run_items = mysql_query($get_items);
		
		$count_items = mysql_num_rows($run_items);

	}
	
	else{
		global $db;
		
		$ip_add = ipAdd();
		
		$get_items = "select * from cart where ip_add='$ip_add'";	
		
		$run_items = mysql_query($get_items);
		
		$count_items = mysql_num_rows($run_items);
		}
	
	echo $count_items;
}


//getting the total price the items

function total_price(){
	
	global $db;
		
		$ip_add = ipAdd();
	
	$total = 0;
	$sel_price = "select * from cart where ip_add= '$ip_add'"; 
	
	$run_price = mysql_query($sel_price);
	
	while($record=mysql_fetch_array($run_price))
	{
		$pro_id = $record ['p_id'];
		
		$pro_price = "select * from products where product_id = '$pro_id'";
		
		$run_pro_price = mysql_query($pro_price);
		
		while($p_price=mysql_fetch_array($run_pro_price))
		{
			$product_price = array($p_price['product_price']);
				
			$values = array_sum($product_price);
			
			$total += $values;
			
		}
		
	}
	echo "$". $total; 
}





//gettlin the product from 
function goP(){
	
             global $db;
			 
			 if(!isset($_GET['cat'])){
				 
				 if(!isset($_GET['brand'])){
  
			$get_product = "select * from products order by rand() LIMIT 0,10";
			
			$run_products  = mysql_query($get_product);
			
			while($row_products=mysql_fetch_array($run_products)){
				
				$pro_id = $row_products['product_id'];
				$pro_title = $row_products['product_title'];
				$pro_cat = $row_products['cat_id'];
				$pro_brand = $row_products['brand_id'];
				$pro_desc = $row_products['product_desc'];
				$pro_price = $row_products['product_price'];
				$pro_image = $row_products['product_img1'];
				
				echo"
				
				 <div id='single_product'>
				
				 <div id='single_box_title'>$pro_title</div>
				
				<img src='admin_area/product_images/$pro_image'width='200' height='132'/>
				
				<div id='single_box_price'>Price: $ $pro_price</div>
				
				<div id='single_details_and_add_cart'><a href='details.php?pro_id=$pro_id' style='text-decoration:none;float:left; margin-right:10px;'>                        Details  </a> 
				
				
				<a href='index.php?add_cart=$pro_id' style='
				background-color:#CCC; border-radius:5px;padding:2px;text-decoration:none;float:right;'>    Add To Cart       </a></div>
				</div>";
			}
				
			 }
			 }
	
	}
	
	
	function goPP(){
	
             global $db;
			 
			 if(isset($_GET['cat'])){
				 
				$cat_id = $_GET['cat'];
  
			$get_cat_pro = "select * from products where cat_id='$cat_id'";
			
			$run_cat_pro = mysql_query($get_cat_pro);
			
			$count = mysql_num_rows($run_cat_pro);
			
			if($count==0){
			
			   echo"<h3>NO Product found in this category!</h3>";
				
			}
			
			while($row_cat_pro=mysql_fetch_array($run_cat_pro)){
				
				$pro_id = $row_cat_pro['product_id'];
				$pro_title = $row_cat_pro['product_title'];
				$pro_cat = $row_cat_pro['cat_id'];
				$pro_brand = $row_cat_pro['brand_id'];
				$pro_desc = $row_cat_pro['product_desc'];
				$pro_price = $row_cat_pro['product_price'];
				$pro_image = $row_cat_pro['product_img1'];
				
				echo"
				
				 <div id='single_product'>
				
				 <div id='single_box_title'>$pro_title</div>
				
				<img src='admin_area/product_images/$pro_image'width='200' height='132'/>
				
				<div id='single_box_price'>Price: $ $pro_price</div>
				
				<div id='single_details_and_add_cart'><a href='details.php?pro_id=$pro_id' style='text-decoration:none;float:left; margin-right:10px;'>                        Details  </a> 
				
				
				<a href='index.php?add_cart=$pro_id' style='
				background-color:#CCC; border-radius:5px;padding:2px;text-decoration:none;float:right;'>    Add To Cart       </a></div>
				</div>";
			}
				
			 }
			 
	
	}
	
	function goBrand(){
	
             global $db;
			 
			 if(isset($_GET['brand'])){
				 
				$brand_id = $_GET['brand'];
  
			$get_brand_pro = "select * from products where brand_id='$brand_id'";
			
			$run_brand_pro = mysql_query($get_brand_pro);
			
			$count = mysql_num_rows($run_brand_pro);
			
			if($count==0){
			
			   echo"<h3>NO Product found for this Brand!!</h3>";
				
			}
			
			while($row_brand_pro=mysql_fetch_array($run_brand_pro)){
				
				$pro_id = $row_brand_pro['product_id'];
				$pro_title = $row_brand_pro['product_title'];
				$pro_cat = $row_brand_pro['cat_id'];
				$pro_brand = $row_brand_pro['brand_id'];
				$pro_desc = $row_brand_pro['product_desc'];
				$pro_price = $row_brand_pro['product_price'];
				$pro_image = $row_brand_pro['product_img1'];
				
				echo"
				
				 <div id='single_product'>
				
				 <div id='single_box_title'>$pro_title</div>
				
				<img src='admin_area/product_images/$pro_image'width='200' height='132'/>
				
				<div id='single_box_price'>Price: $ $pro_price</div>
				
				<div id='single_details_and_add_cart'><a href='details.php?pro_id=$pro_id' style='text-decoration:none;float:left; margin-right:10px;'>                        Details  </a> 
				
				
				<a href='index.php?add_cart=$pro_id' style='
				background-color:#CCC; border-radius:5px;padding:2px;text-decoration:none;float:right;'>    Add To Cart       </a></div>
				</div>";
			}
				
			 }
			 
	
	}
	
	
	
	
	function goB(){
		
		 global $db;
				   
				 $get_brands= "select * from brands"; 
				   
				   $run_brands = mysql_query( $get_brands);
				   
				   while ($row_brands=mysql_fetch_array($run_brands)){
					  
					   $brand_id = $row_brands['brand_id'];
					   $brand_title = $row_brands['brand_title'];
					   
					 echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
				   }
			   	 
		
		
		
	}
	
	function goC(){
		
		             global $db;
					 
					  
				   
				 $get_cats= "select * from categories"; 
				   
				   $run_cats = mysql_query( $get_cats);
				   
				   while ($row_cats=mysql_fetch_array($run_cats)){
					  
					   $cat_id = $row_cats['cat_id'];
					   $cat_title = $row_cats['cat_title'];
					   
					 echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
				   }
			   	
		
		
		
		
		}

?>
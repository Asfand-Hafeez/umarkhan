  <header>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b style="font-weight:normal;">UmarExpress</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php
		   if(empty($_SESSION['username']))
		   {
		?>
        
        <li><a href="login.php">Account</a></li>
        
        <?php }else{ ?>
        
        <li class="dropdown">
        <a href=""  class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>
            <ul class="dropdown-menu">
                      
                  <li><a href="change_password.php">Change Password</a></li>
                  
                  <li><a href="edit_profile.php">Edit Profile</a></li>
                 
                  <li><a href="orderlist.php">Order List</a></li>
                  
                  <li><a href="delete.php">Delete Account</a></li>
                  
            </ul>
        
        </li>
        <?php } ?>
        
        <?php
        if(empty($_SESSION['username']))
		{
        ?>
        
        <?php }else{ ?>
        
        <li><a>H! <?php echo $_SESSION['username']; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
        
        <?php } ?>
        
      </ul>
      <form class="navbar-form navbar-right" role="search" method="get" action="search.php">
        <div class="form-group">
          <input type="text" class="form-control form-control2" name="search" placeholder="Search">
          <?php
		  if(isset($_POST['search_btn']))
				  
				  {
				  
				  $search = $_POST['search'];
				  
				 
				  }
				  	   function getRealIpAddress()
{
		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
}
		  ?>
          
        </div>
        <button type="submit" name="search_btn" class="btn btn-primary">Submit</button>
      </form>
            <ul class="nav navbar-nav pull-right">
       <li><a href="wishlist.php" class="a"><i class="fa fa-heart"></i>
 <?php

	   $ip_add = getRealIpAddress();
	   
	   $sel = "select * from wishlist where ip_add='$ip_add'";
$data = mysql_query($sel);
echo $count=mysql_num_rows($data);
	   ?>
	   Wishlist</a></li>
       <li><a href="cart.php" class="a"><i class="fa fa-shopping-cart"></i> 
	   <?php

	   $ip_add = getRealIpAddress();
	   
	   $sel = "select * from cart where ip_add='$ip_add'";
$data = mysql_query($sel);
echo $count=mysql_num_rows($data);
	   ?>
	   Cart
	   </a></li>
       
      
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!-- /End navigation bar -->
</header><!-- /End header-->
<?php
include "../config/db.php";

$id = $_GET['id']; 

$sql = "DELETE  FROM tbl_products where id='$id'";

$result = mysql_query($sql);

header ("location:view_product.php");

?>

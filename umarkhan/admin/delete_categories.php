<?php
include "../config/db.php";

$id = $_GET['id']; 

$sql = "DELETE  FROM categories where id='$id'";

$result = mysql_query($sql);

header ("location:index.php");

?>



<?php

    include ("includes/header.php");



?>



<style>
body{margin:50px 0px 0px 0px; padding:0;}
.iframe{
	border:none;
	width:100%;
	height:450px;
	border-bottom:10px solid #ccc;
}

.scrolloff{
   pointer-events: none;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script>
$(function() {
    $('#gmap-holder').click(function(e) {
        $(this).find('iframe').css('pointer-events', 'all');
    }).mouseleave(function(e) {
        $(this).find('iframe').css('pointer-events', 'none');
    });
})
</script>


<?php

if(isset($_POST['mapcontrol'])){
$lat = $_POST['latitude'];
$lon = $_POST['longitude'];

$sql = "UPDATE tbl_map SET latitude = '$lat' , longitude = '$lon'";

$result = mysql_query($sql);

if(!$result)

{  
    echo mysql_error();
	
}

}
?>


<div id="gmap-holder">
<iframe class="iframe" style="pointer-events: none;" src="https://maps.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=es;z=14&amp;output=embed"></iframe>
</div>


<br>
<br>
<form method="post">
<div class="form-group" style="margin-left:100px;">
<input type="text" name="latitude" placeholder="Latitude" class="form-control" style=" width:350px;" >
<input type="text" name="longitude" placeholder="Longitude" class="form-control" style=" width:350px; margin-top:20px;" >
<input type="submit" value="Add Map Location" class="btn btn-warning" style="margin-top:20px;" name="mapcontrol" >
</div>
</form> 	

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

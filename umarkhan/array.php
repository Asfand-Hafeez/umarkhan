
<form method="post">

<input type="text" name="name[]" /><br /><br />
<input type="text" name="name[]" /><br /><br />
<input type="text" name="name[]" /><br /><br />
<input type="text" name="name[]" /><br /><br />
<input type="submit">

</form>



<?php

if($_POST)
{
	
	$name = $_POST['name'];
	
	foreach($name as $b)

{
	echo $b;
	echo "<br>";
	
}

	
}



?>







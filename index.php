<!DOCTYPE html>
<html>
<?php  
include 'person.php';
?>
<head>
	<title></title>
</head> 
<body>

<?php  


	$pet01 = new pet();

	echo $pet01->owner();
?>

</body>
</html>
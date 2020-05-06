
<?php  
include 'person.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title></title>
</head> 
<body>
 
<?php  
	$person1 = new person();
	$person1->setName("Daniel");
	echo $person1->name;

	$person2 = new person();
	$person2->setName("Moses");
	echo $person2->name;


?>

</body>
</html>
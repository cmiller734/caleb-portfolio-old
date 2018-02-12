<!DOCTYPE html>
<html lang="en">

<!---------------------Head---------------->
<head>
	<title>Results Page | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>

<body>
	<!-----------Header----------------->
	<header>
		<h1 class="bigtext">Results Page</h1>
		</br>
	</header>
	
	
	
	<!-------------Body: Echo PHP variables (the calculated values) here----------------->
	<p>	
	<?php echo "The sum of the numbers is " . $sum . "</br>"; ?>
	<?php echo "The total number of values input is " . $total_count . "</br>"; ?>
	<?php echo "The average of the input numbers is " . $avg . '</br>'; ?>
	<?php echo "The count of positive even integers is " . $even_pos_int_count . '</br>'; ?>
	<?php echo "The maximum of the values is " . $max . "</br>"; ?>
	<?php echo "The minimum of the values is " . $min . "</br>"; ?>
	</p>
	
	<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>
</body>

</html>

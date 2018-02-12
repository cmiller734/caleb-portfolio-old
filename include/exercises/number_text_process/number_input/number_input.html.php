<!DOCTYPE html>
<html lang="en">

<!---------------head----------->
<head>
	<title>Number Input | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>

<!------------------body-------------->
<body>
	<header>
		<h1 class="bigtext">Number Input Form</h1>
		</br>
		<p>The purpose of this web app is to take in a series of numbers, manipulate them using PHP, then output them again
		for the user to see.</p>
	</header>
	
	<p class="centeredtext">Please input eight numbers. Note that fields that are left blank or input with a value of 0 will not be considered in
	the final calculation.</p>

	<form method="post">
		<ol>
			<li><input type="text" name="number[]"></li>
			<li><input type="text" name="number[]"></li>
			<li><input type="text" name="number[]"></li>
			<li><input type="text" name="number[]"></li>
			<li><input type="text" name="number[]"></li>
			<li><input type="text" name="number[]"></li>
			<li><input type="text" name="number[]"></li>
			<li><input type="text" name="number[]"></li>
		</ol>
		<input type="submit">
	</form>
	
<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<!----header-->
<head>
	<title>Number Input | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>

<body>

<?php

	echo $unmodified_text . "<br>";
	echo display_lines($unmodified_text, true);

?>
<!----------------------------END PHP------------------>

<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>
</body>

</html>

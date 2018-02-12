<!DOCTYPE html>
<html lang="en">

<!---------------------Head---------------->
<head>
	<title>Palindrome App | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>

<body>
	<!-----------Header----------------->
	<header>
		<h1 class="bigtext">Palindrome Detector</h1>
	</header>
	
	<!-------------Body----------------->
	<div class="textcontent">
	<!---------------------------------PHP PROCESSING--------------------->
		<?php
		
		echo "Original String: " . $unmodified_text . "</br>";
		echo $line1;
		echo $line2;
		echo $line3;
		echo $line4;
		
		?>
		
	<a href="/exercises/form_palindrome/palindrome/">Back</a>
	</div>
	
	<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<!-------------------------head--------------------------->
<head>
	<title>Text Input | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
</head>

<body>
	<header>
		<h1 class="bigtext">Text Input Form</h1>
		</br>
		<p>The purpose of this web app is to take in a line of text, manipulate that text in several different ways,
			and then output that text back to the user.</p>
	</header>

	<!----------------------------------body------------------->
	
	<p>Input text here:</p>
	<form method="post">
		<input type="text" name="text_form">
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

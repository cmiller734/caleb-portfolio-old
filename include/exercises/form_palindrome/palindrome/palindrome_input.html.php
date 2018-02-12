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
		</br>
		<p>Please enter a pallindrome into the textbox. A pallindrome is any word or phrase that is 
		<strong>spelled the same forwards or backwards.<strong></p>
	</header>
	
	<!--------------Body-------------------->
	<div class="textcontent">
		<form method="post">
			<p>Enter Palindrome: </br> <input type="text" name="palindrome"> <input type="submit"></p>
		</form>
	</div>
	
	<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>
</body>

</html>

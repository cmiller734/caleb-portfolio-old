<!DOCTYPE html>
<html lang="en">

<head>
	<title>Guessing Game | CM Web Developement</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>

<body>
<!-----------------------------------------HEADER---------------------->
	<header>
		<h1 class="bigtext">Guessing Game</h1>
	</header>
	
<!------------------------------------------BODY------------------------>
	<div class="centeredtext">
		<h2 class="boldtext"><?php echo $final_message ?></h2>
		<a href="/exercises/number_two_guess/guess">Play again?</a>
	</div>

<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>
</body>

</html>

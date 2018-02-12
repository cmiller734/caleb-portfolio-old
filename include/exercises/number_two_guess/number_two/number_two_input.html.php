<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Variable Length Number Input | CM Web Development</title>
		<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
	</head>

	<body>
		<header>
			<h1 class="bigtext">Variable Length Number Input Form</h1>
			</br>
			<p>The purpose of this web app is to take in a series of numbers, manipulate them using PHP, then output them again
			for the user to see. The app will continue to take in numbers until a 0 is input or an empty field is submitted.</p>
		</header>
		
		<!---------------------------------------BODY--------->
		<p class="centeredtext">Please input a number. If you input 0, or leave the form blank, your results will be posted.</p>
		
		<div class="centeredtext"> <!--center the form-->
			<form method="post">
				<input type="text" name="input_number">
				<input type="hidden" name="sum" value="<?php echo $sum; ?>" />
				<input type="hidden" name="total_count" value="<?php echo $total_count; ?>" />
				<input type="hidden" name="avg" value="<?php echo $avg; ?>" />
				<input type="hidden" name="max" value="<?php echo $max; ?>" />
				<input type="hidden" name="min" value="<?php echo $min; ?>" />
				<input type="hidden" name="even_pos_int_count" value="<?php echo $even_pos_int_count; ?>" />
				<input type="submit">
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

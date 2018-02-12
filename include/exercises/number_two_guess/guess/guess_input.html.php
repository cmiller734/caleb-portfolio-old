<!DOCTYPE html>
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
	
<!----------------------------------------BODY TEXT---------------------------->
	<div class="centeredtext">
		<p>For this game, you need to think of a number between 1 and 50. You have 5 guesses.</p>
		<p>If you guess incorrectly, you will get some help:</p>
		<ol>
			<li>If your guess is within 5 of the correct answer, you're “Getting Hot”;</li>
			<li>If your guess is within 10 of the correct answer, you're “Getting Warm”;</li>
			<li>If your guess is within 15 of the correct answer, you're “Getting Cool”;</li>
			<li>In all other cases, you're “Totally Cold”;</li>
		</ol>
		<p class="boldtext">Good luck!</p>
		<?php if (isset($display_message))
		{
			echo '<p>' . $display_message . '</p>';
		}
		?>
<!---------------------------------------FORM-------------------------------------->
		<form method="post">
			<input type="text" name="input_number">
			<input type="hidden" name="number_to_guess" value="<?php echo $number_to_guess ?>">
			<input type="hidden" name="chance_number" value="<?php echo $chance_number ?>">
			<input type="hidden" name="display_message" value="<?php echo $display_message ?>">
			<input type="hidden" name="final_message" value="<?php echo $final_message ?>">
			<!--<input type="hidden" name="higher_lower_string" value=/>-->
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

<!DOCTYPE html>
<html lang="en">

<!--------header--------->
<head>
	<title>Date and Time | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="textcontent">
		<?php date_default_timezone_set('America/New_York') ?>
		<p>The current date and time is <?php echo date('g:i A \o\n l\, F j\, Y'); ?>.</p>
	</div>

	<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>

</body>

</html>

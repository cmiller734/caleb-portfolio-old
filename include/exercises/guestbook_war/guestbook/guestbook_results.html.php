<!DOCTYPE html>
<html lang="en">
<!---------------------------------head------------------->
<head>
	<title>Guestbook Results | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
</head>

<!--------------------------------body-------------------->
<body>
	<!---------------------------header------------------->
	<header>
		<h1 class="bigpage">Guestbook Page</h1>
	</header>
	
	<!----------------------------BODY CONTENT------------->
	<div class="centeredtext">
		<p><?php echo $final_message; ?></p>
	</div>
	
	<p>
		<a href="?show">View guestbook</a>
	</p>
	
	<!------------------------------------show page visit count based on cookies----------------------------->

	<p class="centeredtext">You have visited this page <?php echo $cookie ?> times.</p>

	
	<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>
</body>

</html>
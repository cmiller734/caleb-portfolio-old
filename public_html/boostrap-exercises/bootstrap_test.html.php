<!DOCTYPE html>
<html lang="en">

<!------------------------------------HEAD------------------------------->
<?php 
	$title='Bootstrap Testing Page | CM Web Development'; 
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/head.html.php";
	include ( $path ); 
?>

<!------------------------------------BODY-------------------------------->
<body>
	<h1>Bootstrap Testing Page</h1>
	<p>This page goes through the Bootstrap 3 testing tutorial at <a href="http://www.w3schools.com/bootstrap/">W3Schools</a>.</p>
	<h2>Testing the bootstrap grid system</h2>
	<p></p>
</body>

<!------------------------------------FOOTER-------------------------------->
<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
?>
	
</html>
<!DOCTYPE html>

<html>

<!---------------head----------->
<head>
	<title>$_REQUEST Array Processor | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>

<!--------------body------------>
<body>

<h1>Contents of $_REQUEST Array</h1>

<table> <!-------create a table to display the formatted keys and values for the $_REQUEST array -->
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
	
<!----------------------------------------PHP PROCESSING------------------------->
<?php
foreach ( $array as $key => $val )
{
	echo '<tr>
		<td>' . $key . '</td> 
		<td>' . $val . '</td>
		</tr>';
}
?>

</table>

<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>
</body>

</html>

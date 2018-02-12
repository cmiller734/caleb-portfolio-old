<!DOCTYPE html>
<html lang="en">

<!----header-->
<head>
	<title>Number Input | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>

<body>

<?php 
	if ( $total_count > 0 ) //that is, as long as at least 1 number has been input
	{
		if ($unique_number_count > 1 )
			{			
				echo $stringManyNum;
			}
			else
			{
				echo $stringOneNum;
			}
	}
	else
	{
		echo'<p>Please input a number!</p>'; //if no min or max has been specified; that is, if no numbers have been input
	}
	
?>

<!----------------------------END PHP------------------>

<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>

</body>

</html>
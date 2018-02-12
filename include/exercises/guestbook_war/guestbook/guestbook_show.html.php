<!DOCTYPE html>
<html lang="en">

<!------------------------head------------------------>
<head>
	<title>Guestbook | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>
<body>

<!--------------------------header----------------------->
	<header>
		<h1 class="bigtext">Guestbook Contents:</h1>
	</header>
	
<!---------------------------CREATING THE FORMATTED TABLE FROM THE TXT FILE--------------->
	
	<?php
	echo
	"<table class='textcontent boldtext'>
		<tr>
			<th>Name</th>
			<th>Location</th>
			<th>E-mail Address</th>
		</tr>";
	//Second, we go in line by line and break those lines up into arrays of words at the pipe symbols 
	for($val = 0; $val < count($line_array) - 1; $val++) //-1 because the last element is 1. Not sure why; temp fix	
	{
		$broken_up_line=explode("|",$line_array[$val]); //Third, we break up each line into individual words at the pipe character
		echo"<tr>";
			for($i = 0; $i < count($broken_up_line); $i++) //Fourth, go thru each element of the array and put it where it belongs
			{
					if ($i == 0 || $i == 1 || $i == 2)
					{
						echo "<td>" . $broken_up_line[$i] . "</td>";
					}
					else
					{
						echo "<tr><td colspan='3'>" . $broken_up_line[$i] . "</td></tr>"; 
					}
			}
		echo"</tr>";
	}
	echo"</table>";
	?>
<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<!-----------------------------------DISPLAY TRACKS FROM SQL FILE----------------------->

<!------------------------head------------------------>
<head>
	<title>Music Database UI | CM Web Development</title>
	<!--<link href="/styles/bootstrap.min.css" rel="stylesheet" type="text/css">-->
	<!--<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">-->
	<meta charset="utf-8">
</head>
<body>
<!---------------------------CREATING THE FORMATTED TABLE FROM THE SQL FILE--------------->
	
<!-----------------------------Here, we are working with a two dimensional array. Table the elements----------->
	</br>
	</br>
	<p class="centeredtext">List of Artists in Your Collection:</p>
	</br>
	
	<?php
	//First, we create the table and our headers
	echo
	"<table class='textcontent'>
		<tr>
			<td class='boldtext'>Entry #</td>
			<td class='boldtext'>Artist Name</td>
			<td class='boldtext'>Track Name</td>
			<td class='boldtext'>Album Title</td>
			<td class='boldtext'>Genre</td>
		</tr>";
	//Second, we go in line by line and get the next line of the SQL query.
	for($i = 0; $i < count($row_array); $i++)
	{
		$row = $row_array[$i]; //assign each row to its own variable
		
		$j = $i + 1;
		//Third, we place each numeric index of the array in its proper place - name, email, and location
		//in the first row, and then comments in the second row
		echo"<tr>";
		echo"<td>".$j."</td>";
		echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]."</td>";
		echo"<td>".$row[2]."</td>";
		echo"<td>".$row[3]."</td>";
		echo"</tr>";
	}
	echo"</table>";
	?>
</body>
</html>
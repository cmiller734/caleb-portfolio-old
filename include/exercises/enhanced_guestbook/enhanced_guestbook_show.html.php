<!DOCTYPE html>
<html lang="en">
<!-----------------------------------ENHANCED GUESTBOOK PULLS FROM SQL FILE----------------------->

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
	
<!---------------------------CREATING THE FORMATTED TABLE FROM THE SQL FILE--------------->
	
<!-----------------------------Here, we are working with a two dimensional array. Table the elements----------->
	<?php
	//First, we create the table and our headers
	echo
	"<table class='textcontent boldtext'>
		<tr>
			<th>Name</th>
			<th>Location</th>
			<th>E-mail Address</th>
		</tr>";
	//Second, we go in line by line and get the next line of the SQL query.
	for($i = 0; $i < count($row_array); $i++)
	{
		$row = $row_array[$i]; //assign each row to its own variable
		
		//Third, we place each numeric index of the array in its proper place - name, email, and location
		//in the first row, and then comments in the second row
		echo"<tr>";
		echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]."</td>";
		echo"<td>".$row[2]."</td>";
		echo"</tr>";
		echo"<tr>";
		echo"<td colspan='3'>".$row[3]."</td>";
		echo"</tr>";
		
		
		
			/*for($i = 0; $i < count($row); $i++) //Fourth, go thru each element of the array and put it where it belongs
			{
				if ($i == 0 || $i == 1 || $i == 2)
				{
					echo "<td>" . $row[$i] . "</td>";
				}
				else
				{
					echo "<tr><td colspan='3'>" . $row[$i] . "</td></tr>"; 
				}
			}*/
		//echo"</tr>";
	}
	echo"</table>";
	?>
	
<!------------------------------------show page visit count based on cookies----------------------------->

<<<<<<< HEAD
	<p class="centeredtext">You have visited this page <?php echo $cookie ?> times.</p>
=======
	<p>You have visited this page <?php echo $cookie ?> times.</p>
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a

<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
<<<<<<< HEAD
	?>
=======
?>
</div>
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a
</body>
</html>
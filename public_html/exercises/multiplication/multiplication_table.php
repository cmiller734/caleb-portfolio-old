<!DOCTYPE html>
<html lang="en">

<!----header-->
<head>
	<title>Multiplication Table | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>

<!----body--->
<body>

	<header class="centeredtext">
		<h1 class="bigtext">Multiplication Table</h1>
		</br>
		<p>The purpose of this table is to display a multiplication table that 
		takes in two easily-defined parameters and creates a table 
		by multiplying those parameters.</p>
	</header>

	<div class="textcontent">
	
	<p>
	<!-----------------------------------------------------------------PHP starts here------------->
	<?php
	
	//------------------------Row and Column Constant Definitions------------------>
	define('ROWS', 10);
	define('COLS', 10);

	$lowrow=ROWS-10;
	$lowcol=COLS-10;
	$row=ROWS;
	$col=COLS;

	echo'<table>';

		echo'<th></th>';

			//-------------------------------Table header for columns------------
		for ($i = 0; $i <= $col; $i++) 
		{
			echo'<th>';
			echo $lowcol; //for each column, add a number 1-# of columns
			echo'</th>';
			$lowcol++;
		}	

		//-----------------------------Table header for rows and the internal table itself----------------

		$lowcol=COLS-10; //reset lowcol to its default value
		for ($i = 0; $i <= $col; $i++)
		{
			echo'<tr>'; //make a new row for every new row position that comes up
			$lowrow = ROWS-10; //reset low rows here
			for ($j = 0; $j <= $row + 1; $j++) //now you're filling in the rows. First position is i (columns) 0, j (rows) 0
			{
				if ($j == 0) //if you're on the first row
				{
					echo'<th>';
					echo $lowcol;
					echo'</th>';
					$lowcol++;
				}
				else 
				{
					echo'<td>';
					echo ($lowcol - 1) * ($lowrow - 1);
					echo'</td>';
				}	
				$lowrow++;
			}
			echo'</tr>';
		}
	echo'</table>';

	$lowcol = COLS - 10;
	$lowrow = ROWS - 10;
	echo'<p>The low extent of the rows is ' . $lowrow. '. The low extent of the columns is ' . $lowcol . '. The high extent of the rows is ' . $row . '. The high extent of the columns is ' . $col . '.</p>';  
<<<<<<< HEAD

	?>
	
	</p>
	
	<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>
	
	</div>

</body>

</html>
=======
	echo'</div>';

?>
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a

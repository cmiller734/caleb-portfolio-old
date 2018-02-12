<!DOCTYPE html>
<html>
	<head>
		<link href="/styles/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
	</head>
	<body>
		</br>
		</br>
		<p>Enter new album information:</p>
		
		<!------------------------------------New genre information-------------------------->
		<form method="post" action="">
			<p>
				<input type="text" name="album_title" placeholder="Album title">
				<input type="text" name="number_of_tracks" placeholder="# of tracks">
				<input type="text" name="release_year" placeholder="Year of release">
				<input type="text" name="rating" placeholder="Album rating">
				<input type="submit" name="album_submit" value="Submit album"> 
			</p>
			<p>
				<select name="album_artist"> <!---ALBUM DROPDOWN-->
					<option selected disabled>Pick an artist</option>
					<?php
						for($i = 0; $i < count($artist_row_array); $i++)
						{
							$row = $artist_row_array[$i];
							echo"<option value='".$row[0]."'>".$row[0]."</option>"; 
						}
					?>
				</select>
				<select name="album_genre"> <!----GENRE DROPDOWN-->
					<option selected disabled>Pick an album genre</option>
					<?php
						for($i = 0; $i < count($genre_row_array); $i++)
						{
							$row = $genre_row_array[$i];
							echo"<option value='".$row[0]."'>".$row[0]."</option>"; 
						}
					?>
				</select>
			</p>
		</form>
	</body>
</html>
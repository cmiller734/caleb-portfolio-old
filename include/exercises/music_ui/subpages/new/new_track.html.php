<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="/styles/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
		<meta charset="utf-8">
	</head>
	<body>
		</br>
		</br>
		<p>Enter new track information:</p>
		
		<!------------------------New track information------->
		<form method="post" action="">
			<p>
				<input type="text" name="track_title" placeholder="Track title">
				<input type="text" name="track_number" placeholder="Track number">
				<input type="text" name="track_length" placeholder="Length (min & sec)">
				<input type="text" name="track_rating" placeholder="Rating">
			</p>	
			<p>
				<select name="track_album"> <!---ALBUM DROPDOWN-->
					<option selected disabled>Pick an album</option>
					<?php
						for($i = 0; $i < count($album_row_array); $i++)
						{
							$row = $album_row_array[$i];
							echo"<option value='".$row[0]."'>".$row[0]."</option>"; 
						}
					?>
				</select>
				
				<select name="track_artist"> <!----ARTIST DROPDOWN-->
					<option selected disabled>Pick an artist</option>
					<?php
						for($i = 0; $i < count($artist_row_array); $i++)
						{
							$row = $artist_row_array[$i];
							echo"<option value='".$row[0]."'>".$row[0]."</option>"; 
						}
					?>
				</select>
				<select name="track_genre"> <!----GENRE DROPDOWN-->
					<option selected disabled>Pick a track genre</option>
					<?php
						for($i = 0; $i < count($genre_row_array); $i++)
						{
							$row = $genre_row_array[$i];
							echo"<option value='".$row[0]."'>".$row[0]."</option>"; 
						}
					?>
				</select>
				<input type="submit" name="track_submit" value="Submit track">
			</p>
		</form>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<!---------------------------------------HEAD----------------------------------->
<head>
	<title>Music Database UI | CM Web Development</title>
	<link href="/styles/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
</head>
<!----------------------------------------BODY------------------------------------->
<body>

	<!-----------------------------------HEADER------------------------------------>
	<header>
		<h1 class="centeredtext">Modify Your Music Collection!</h1>
	</header>
	
	<p class="centeredtext boldtext"><?php echo $error_msg; ?></p>
	<p class="centeredtext boldtext"><?php echo $success_msg; ?></p>
	
	
	<!------------------------------------BODY CONTENT------------------------------->
	<p>You can make changes to your music collection or view it by choosing from the actions in the dropdown menu:</p>
		
		<!-------The following drop-down menu will display a different "2nd half" of the page depending on what's selected.-->
		<form method="post" action="">
			<select name="dropdownlist">
				<!--Eventual database entry-->
				<option>Make a Selection</option> <!--Default text for dropdown menu-->
				<option value="new_genre">Enter a new genre</option>
				<option value="new_artist">Enter a new artist</option>
				<option value="new_album">Enter a new album</option>
				<option value="new_track">Enter a new track</option>
				<!--Display from database-->
				<option value="display_tracks">Display a list of tracks in your collection</option>
				<option value="display_artists">Display a list of artists in your collection</option>
				<option value="display_albums">Display a list of albums in your collection</option>
			</select>
			<!----------submit-->
			<input name="submit" type="submit">
		</form>
</body>

<script src="DOM_crawler.js" type="text/javascript">
	</script>
</html>
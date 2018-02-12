<?php
//-----------------------------------------CONTROLLER FOR A10 - MUSIC DATABASE MOD UI-----------------------------

//-------------------------------------------------1. FUNCTIONS--------------------------------------------
function make_into_rows($link, $sql_string) //takes a SQL command, implements it, separates resulting table into rows
{
	$result = mysqli_query($link, $sql_string);
	if (!$result) 
	{
		$err = 'Unable to retrieve data from guestbook table: ' . mysqli_error($link);
		include '../../../include/errmsg.html.php';
		exit();
	}
	$row_array = array();
	while ($row = mysqli_fetch_row($result))
	{
		$row_array[] = $row;
	}
	return $row_array;
}

function sql_pass($link, $sql) //attempts to insert data into the DB, and relays a message upon success
{
	$result = mysqli_query($link, $sql);
        if (!$result) {
            $err = 'Unable to insert data into music table: ' . mysqli_error($link);
            include '../../../include/errmsg.html.php';
            exit();
        }
		else
		{
			$success_msg="Success! Changes have been committed to the database";
			return $success_msg;
		}
}

//----------------------------------------------------2. INCLUDE FILE----------------------------------
<<<<<<< HEAD
	include $_SERVER['DOCUMENT_ROOT'] . '/../include/db.inc';
=======
	include $_SERVER['DOCUMENT_ROOT'] . '/../db.inc';
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a

//----------------------------3. CHECK TO SEE WHETHER ANY OF THE 'SECONDARY' SUBMIT BUTTONS WERE PRESSED---------
$sql="";
$error_msg="";
$success_msg="";
$varSelection="";

//3a. GENRE SUBMIT BUTTON
if (isset ($_REQUEST['genre_submit'])) //Has the genre Submit button been pressed?
{
	$genre_name = $_REQUEST['genre_name'];
	$genre_description = $_REQUEST['genre_description'];
	
	if (empty($genre_name)||empty($genre_description))
	{
		if (empty($genre_name))
		{
			$error_msg.="Please enter a genre name! ";
		}
		if (empty($genre_description))
		{
			$error_msg.="Please enter a genre description!"; 
		} 
	}
	else //validation passed
	{	
		//add new genre information to the database
		$sql="INSERT INTO genre(name, genre_description) VALUES('".$genre_name."','".$genre_description."')";
		$error_msg=''; //reset error message
		$success_msg = sql_pass($link, $sql);
	}	
	$varSelection="new_genre"; 
}

//3b. ARTIST SUBMIT BUTTON
if (isset ($_REQUEST['artist_submit'])) //Has the artist submit button been pressed?
{
	$artist_name = $_REQUEST['artist_name'];
	
	if (empty($artist_name)) //VALIDATION
	{
		$error_msg = "Please enter an artist name!";
	}
	else //validation passed
	{
		//add new artist information to the database
		$sql="INSERT INTO artist(name) VALUES('".$artist_name."')";
		$error_msg=''; //reset error message
		$success_msg = sql_pass($link, $sql);
	}
	$varSelection="new_artist";
}
//3c. ALBUM SUBMIT BUTTON
if (isset ($_REQUEST['album_submit'])) //Has the album submit button been pressed?
{
	$album_title = $_REQUEST['album_title'];
	$number_of_tracks = $_REQUEST['number_of_tracks'];
	$release_year = $_REQUEST['release_year'];
	$rating = $_REQUEST['rating'];
	
	$album_artist = $_REQUEST['album_artist'];
	$album_genre = $_REQUEST['album_genre'];
	
	if (empty($album_title)||empty($number_of_tracks)||empty($release_year)||empty($rating))//VALIDATION 
	{
		if(empty($album_title))
		{
			$error_msg.="Please enter an album title! ";
		}
		if(empty($number_of_tracks))
		{
			$error_msg.="Please enter # of tracks! ";
		}
		if(empty($release_year))
		{
			$error_msg.="Please enter a release year! ";
		}
		if(empty($rating))
		{
			$error_msg.="Please enter a rating!";
		}
	}
	else
	{
		$sql="INSERT INTO album(title, track_count, release_year, rating) VALUES('".$album_title."','".$number_of_tracks."',
																				'".$release_year."','".$rating."')";
		$error_msg=''; //reset error message
		$success_msg = sql_pass($link, $sql);
	}
	$varSelection="new_album";
}
//3d. TRACK SUBMIT BUTTON
if (isset ($_REQUEST['track_submit'])) //Has the track submit button been pressed?
{
	//text input
	$track_title = $_REQUEST['track_title'];
	$track_number = $_REQUEST['track_number'];
	$track_length = $_REQUEST['track_length'];
	$track_rating = $_REQUEST['track_rating'];
	//radio drop-down
	$track_album = $_REQUEST['track_album'];
	$track_artist = $_REQUEST['track_artist'];
	$track_genre = $_REQUEST['track_genre'];

	if (empty($track_title)||empty($track_number)||empty($track_length)||empty($track_rating)
		||empty($track_artist)||empty($track_album)||empty($track_genre))//VALIDATION 
	{
		if(empty($track_title))
		{
			$error_msg.="Please enter a track title! ";
		}
		if(empty($track_number))
		{
			$error_msg.="Please enter a track #! ";
		}
		if(empty($track_length))
		{
			$error_msg.="Please enter the track length! ";
		}
		if(empty($track_rating))
		{
			$error_msg.="Please enter a track rating! ";
		}
		if(empty($track_artist))
		{
			$error_msg.="Please select an artist! ";
		}
		if(empty($track_album))
		{
			$error_msg.="Please select an album for this track! ";
		}
		if(empty($track_genre))
		{
			$error_msg.="Please select a genre for this track! ";
		}
	}
	else //validation passsed
	{
		$sql="UPDATE album SET artistID=(SELECT artistID FROM artist WHERE name='$track_artist') WHERE title='$track_album'; ";
		$sql2="UPDATE album SET genreID=(SELECT genreID FROM genre WHERE genre.name='$track_genre') WHERE title='$track_album'; "; 
		$sql3="INSERT INTO track(albumID, title, number, length, rating) 
			  VALUES((SELECT albumID FROM album WHERE title='$track_album'),
			  '$track_title','$track_number','$track_length','$track_rating')";
		
		$error_msg=''; //reset error message
		$success_msg = sql_pass($link, $sql);//this is a wierd way to do it, but the correct way led to me errors I don't know how to fix
		$success_msg = sql_pass($link, $sql2); 
		$success_msg = sql_pass($link, $sql3);
	}
	$varSelection="new_track";
}

//--------------------------------------------4. CHECK WHETHER 'PRIMARY' SUBMIT BUTTON WAS PRESSED-----------------------------------------------
if (isset ($_REQUEST['submit']) || isset ($_REQUEST['genre_submit']) 
	|| isset($_REQUEST['artist_submit']) || isset($_REQUEST['album_submit']) || isset($_REQUEST['track_submit']))
{
//----------------------------------------4a. PAGE REDIRECTION BASED ON DROPDOWN ENTRY----------------------------
	include "../../../include/exercises/music_ui/homepage.html.php"; //always include the header
	
	if (isset ($_REQUEST['dropdownlist']))
	{
	$varSelection = $_REQUEST['dropdownlist'];
	}
	
	switch($varSelection)
	{
//-----------------------------------------------4b. 2ND HALF OF PAGE - DATA ENTRY---------------------------------------------
		case "new_genre": include "../../../include/exercises/music_ui/subpages/new/new_genre.html.php"; break;
		case "new_artist": include "../../../include/exercises/music_ui/subpages/new/new_artist.html.php"; break;
		case "new_album": 
		
		$sql_artist='SELECT name FROM artist';
		$sql_genre='SELECT name FROM genre';
		
		//SQL artist
			$result = mysqli_query($link, $sql_artist);
			$artist_row_array = array();
			while ($row = mysqli_fetch_row($result))
			{
				$artist_row_array[] = $row;
			} 
			//SQL genre
			$result = mysqli_query($link, $sql_genre);
			$genre_row_array = array();
			while ($row = mysqli_fetch_row($result))
			{
				$genre_row_array[] = $row;
			} 	
			
			include "../../../include/exercises/music_ui/subpages/new/new_album.html.php"; break;
		
		case "new_track":
			
			$sql_album='SELECT title FROM album';
			$sql_artist='SELECT name FROM artist';
			$sql_genre='SELECT name FROM genre';

			$album_row_array = array();
			$artist_row_array = array();
			$genre_row_array = array();
			
			//SQL album
			$result = mysqli_query($link, $sql_album);
			while ($row = mysqli_fetch_row($result))
			{
				$album_row_array[] = $row;
			}
			//SQL artist
			$result = mysqli_query($link, $sql_artist);
			$artist_row_array = array();
			while ($row = mysqli_fetch_row($result))
			{
				$artist_row_array[] = $row;
			} 
			//SQL genre
			$result = mysqli_query($link, $sql_genre);
			$genre_row_array = array();
			while ($row = mysqli_fetch_row($result))
			{
				$genre_row_array[] = $row;
			} 	
			include "../../../include/exercises/music_ui/subpages/new/new_track.html.php"; break;
//--------------------------------------------------4b. 2ND HALF OF PAGE - DATA DISPLAY--------------------------------------------------
		case "display_tracks":
			
			//we created a view in our music database that would allow for easy organization of all the info we would
			//need for the displays. First, we need to access the view from a variable.	
			//-------------------------------------------------BEGIN SQL PROCESSING----------------------------------------------
			
			$sql = 'SELECT track.title, number, album.title, artist.name, genre.name, track.rating
			FROM track 
			INNER JOIN album ON track.albumID = album.albumID
			INNER JOIN artist ON album.artistID = artist.artistID
			INNER JOIN genre ON album.genreID = genre.genreID';
					
			$row_array = make_into_rows($link, $sql);
			
			include '../../../include/exercises/music_ui/subpages/display/display_tracks.html.php';
			break;
//---case
		case "display_artists":
			
			$sql = 'SELECT artist.name, track.title, album.title, genre.name 
			FROM track 
			INNER JOIN album ON track.albumID = album.albumID
			INNER JOIN artist ON album.artistID = artist.artistID
			INNER JOIN genre ON album.genreID = genre.genreID
			ORDER BY artist.name';
			$row_array = make_into_rows($link, $sql);
			include '../../../include/exercises/music_ui/subpages/display/display_artists.html.php';
			break;
			
			case "display_albums":
			
			$sql = 'SELECT album.title, track.title, artist.name, genre.name 
					FROM track 
					INNER JOIN album ON track.albumID = album.albumID
					INNER JOIN artist ON album.artistID = artist.artistID
					INNER JOIN genre ON album.genreID = genre.genreID
					ORDER BY album.title';
			$row_array = make_into_rows($link, $sql);
			include '../../../include/exercises/music_ui/subpages/display/display_albums.html.php';
			break;
	}
	//footer
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
}
//-------------------------------------------4b. FIRST ACCESS DROPDOWN MENU AND FOOTER--------------------
else
{
	include "../../../include/exercises/music_ui/homepage.html.php";
	//------------------------------------footer---------------------------------------
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/footer.html.php";
	include ( $path ); 
}
?>

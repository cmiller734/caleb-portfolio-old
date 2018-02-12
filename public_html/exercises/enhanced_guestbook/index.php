<?php
//-------------------------------------------------ENHANCED GUESTBOOK---------------------------------------------
//------------------------------------------MOST CODE FROM GUESTBOOK 1 HAS BEEN KEPT & COMMENTED OUT--------------

//------------------------------------------------------1. FUNCTIONS-----------------------
function sanitize_variable($string) //This function sanitizes & removes pipe characters from a given string
{
	//sanitize string
	$sanitized_string = htmlspecialchars($string);
	//strip pipe (|) from string. NOTE: not needed for enhanced guestbook
	//$sanitized_pipe_stripped_name = str_replace("|","", $sanitized_string);
	return $sanitized_string;
}
function sanitize_comments($string) //This function inserts a new <br> element before each new line, strips \r & \n
{
	$newlined_comments = nl2br($string);
	$newlined_comments_no_newlines_carriage = str_replace(array('\r\n', '\r', '\n'), '', $newlined_comments); 
	return $newlined_comments_no_newlines_carriage;
}

//-------------------------------------------------2. COOKIES TRACK PAGE HITS-----------------------------
	if (!isset($_COOKIE['count'])) //if this is the first time the user has accessed the page
	{
		$cookie=1;
		setcookie("count",$cookie);
	}
	else
	{
		$cookie=++$_COOKIE['count'];
		setcookie("count", $cookie);
	}
	
//----------------------------------------------------3. INCLUDE FILE----------------------------------
<<<<<<< HEAD
include $_SERVER['DOCUMENT_ROOT'] . '/../include/db.inc';
=======
include $_SERVER['DOCUMENT_ROOT'] . '/../db.inc';
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a

//----------------------------------------------------4. SHOW GUESTBOOK-------------------------------------------
if ( isset ( $_REQUEST['show']) )
{
//----------------------------------------------4a. DATA TIER RETRIEVAL: DONE USING SQL-----------------------
	$sql = 'SELECT * FROM guestbook ORDER BY name';
	$result = mysqli_query($link, $sql); //get the SQL query
	if (!$result) {
	$err = 'Unable to retrieve data from guestbook table: ' . mysqli_error($link);
	include '../../../include/errmsg.html.php';
	exit();
}

$row_array = array();
while ($row = mysqli_fetch_row($result)) //once the SQL query has been gotten, split it into rows
{
	$row_array[] = $row;
}
	//$filehandle = fopen($filename, 'ab+') or die("<p>Unable to create the file!</p>\n");
	
	//First, we create an array of lines from the file handle. See include file for further steps
	/*$line_array;
	while (!feof($filehandle)) 
	{
		$line = fgets($filehandle);
        $line_array[]=$line;
    }*/
	include('../../../include/exercises/enhanced_guestbook/enhanced_guestbook_show.html.php');	
	//fclose($filehandle);
}
//-----------------------------------------------------5. GUESTBOOK PROCESSING-----------------------------------------	
else if (array_key_exists('input_name', $_REQUEST) ||
	array_key_exists('input_location', $_REQUEST) ||
	array_key_exists('input_email', $_REQUEST) ||
	array_key_exists('input_comments', $_REQUEST) ) //if any input has EVER been put in any of the forms
{
	//VARIABLES

	//Beginning string. display AT LEAST this
	$error_message= nl2br("Please correct the following errors:\n"); 
	//REQUEST variables & slight variations
	$unmodified_name = $_REQUEST['input_name'];
	$trimmed_name = trim($unmodified_name);
	$unmodified_location = $_REQUEST['input_location'];
	$trimmed_location = trim($unmodified_location);
	$unmodified_email = $_REQUEST['input_email'];
	$unmodified_comments = $_REQUEST['input_comments'];
	
//---------------------------------------------------------5a. BUSINESS LOGIC------------------------------------------
	if (!empty($unmodified_name) && !ctype_space($unmodified_name) && //name field isn't empty or all spaces
		!empty($unmodified_location) && !ctype_space($unmodified_location) && //location field isn't empty or all spaces
		!empty($unmodified_email) && !ctype_space($unmodified_email)) //name location isn't empty or all spaces
	{
			//validation met flag
		$validation_met = true;
		if ( strlen($trimmed_name) < 2 )//VALIDATION
		{
			$error_message .= nl2br("Your name must consist of at least 2 characters!\n");
			$validation_met = false;
		}
		if ( strlen($trimmed_location) < 2 )//VALIDATION
		{
			$error_message .= nl2br("Your location must consist of at least 2 characters!\n");
			$validation_met = false;
		}
		if (!strpos($unmodified_email, "@") && $unmodified_email != "@") //VALIDATION
		{
			$error_message .= nl2br("E-mail address must contain an @ sign!\n");
			$validation_met=false;
		}
		
		if ($validation_met == false) //Here, if the trimmed name < 2 characters or the email doesn't contain @
		{
			include('../../../include/exercises/guestbook_war/guestbook/guestbook_input.html.php'); 	
		}
		else
//=========================================5aa. BEGIN SUCCESS - RESULTS PAGE=================================================
		{
			//VARIABLES
			$sanitized_name = mysqli_real_escape_string($link, sanitize_variable($unmodified_name));
			$sanitized_location = mysqli_real_escape_string($link, sanitize_variable($unmodified_location));
			$sanitized_email = mysqli_real_escape_string($link, sanitize_variable($unmodified_email));
			$sanitized_comments = mysqli_real_escape_string($link, sanitize_variable($unmodified_comments));
			$further_sanitized_comments = mysqli_real_escape_string($link, sanitize_comments($sanitized_comments)); 
			
			//Insertion into the SQL table
			$sql = "INSERT INTO guestbook (name, location, email, comments) 
					VALUES ('$sanitized_name', '$sanitized_location', 
							'$sanitized_email', '$further_sanitized_comments')";	
			if (!mysqli_query($link, $sql)) {
			$err = 'Unable to update active field in members table: ' . mysqli_error($link);
			include '/../../../include/errmsg.html.php';
			exit();
		}

			//$final_string = $sanitized_name . " | " . $sanitized_location . " | " . $sanitized_email . 
			//				" | " . $further_sanitized_comments . "\r\n";
	
			//WRITING TO THE FILE
			/*$filehandle = fopen($filename, 'ab') or die("<p>Unable to create the file!</p>\n");
			flock($filehandle, LOCK_EX) or die("<p>Unable to lock the file!</p>\n");
			fwrite($filehandle, $final_string) or die("<p>Unable to append to the file!</p>\n");
		    fflush($filehandle) or die("<p>Unable to flush the file buffer!</p>\n");
			flock($filehandle, LOCK_UN) or die("<p>Unable to unlock the file!</p>\n");
			fclose($filehandle);*/
			
			$final_message = "Thanks for signing!";
<<<<<<< HEAD
			include('../../../include/exercises/a7_guestbook_war/guestbook/guestbook_results.html.php');
=======
			include('../../../include/exercises/guestbook_war/guestbook/guestbook_results.html.php');
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a
//=========================================5aa. END SUCCESS - RESULTS PAGE=================================================
		}
	}
	else
	{
		//NAME check
		if (empty($unmodified_name) || ctype_space($unmodified_name))//VALIDATION
		{
			$error_message .= nl2br("You must provide a name!\n");
		}
		//LOCATION check
		if (empty($unmodified_location) || ctype_space($unmodified_location))//VALIDATION
		{
			$error_message .= nl2br("You must provide a location!\n");
		}
		else if ( strlen(trim($unmodified_location)))//VALIDATION
		{
			$error_message .= nl2br("Your location must consist of at least 2 characters!\n");
		}
		//E-MAIL check
		if (empty($unmodified_email) || ctype_space($unmodified_email))//VALIDATION
		{
			$error_message .= nl2br("You must provide an e-mail address!\n");
		}
		include('../../../include/exercises/guestbook_war/guestbook/guestbook_input.html.php');
	}
}
//--------------------------------------------------6. INITIAL PAGE DISPLAY------------------------------------------
else
{
	//if (session_start())
	//{
	//session_destroy();
	//}
	//$cookie=1;
	//session_start();
	include('../../../include/exercises/guestbook_war/guestbook/guestbook_input.html.php');	
}

?>
<?php
	$title='Code Portfolio | CM Web Development';
	$main_heading_title='Programming Languages Portfolio';
	$main_heading_text=	"<p>Here are some examples of web apps, games, test pages, etc. that I can program using various languages. These pages are designed to showcase my development skills.</p>";
	$main_photo_src = "\"/images/unofficial-photo.jpg\"";
	$main_text_heading = "";
	$main_text_body = '<div class="row text-align-left">
		<div class="col-sm-4">
			<h2>PHP:  <i class="fa fa-angle-double-up" id="php_arrow" aria-hidden="true"></i></h2>
			<ul class="hidden_list" id="php_list">
				<li><a href="../exercises/datetime/datetime.php" target="_blank">Current Date and Time</a></li>
				<li><a href="../exercises/multiplication/multiplication_table.php" target="_blank">Dynamic Multiplication Table</a></li>
				<!--<li><em>In Development</em> - Number Input Manipulation</li>-->
				<li><a href="../exercises/number_text_process/text_input/" target="_blank">Text Input Manipulation</a></li>
				<li><a href="../exercises/form_palindrome/form/" target="_blank">REQUEST array processor</a></li>
				<li><a href="../exercises/form_palindrome/palindrome/" target="_blank">Palindrome Application</a></li>
				<li><a href="../exercises/number_two_guess/number_two/" target="_blank">Variable Length Number Input Manipulation</a></li>
				<li><a href="../exercises/number_two_guess/guess/" target="_blank">Guessing Game</a></li>
				<li><a href="../exercises/guestbook_war/guestbook/" target="_blank">Guestbook - Implemented with PHP</a></li>
				<!--<li><em>In Development</em> - Play a Game of War</li>-->
			</ul>
		</div>
		<div class="col-sm-4">
			<h2>PHP and SQL:  <i class="fa fa-angle-double-up" id="php_sql_arrow" aria-hidden="true"></i></h2>
			<ul class="hidden_list" id="php_sql_list">
				<li><a href="../exercises/enhanced_guestbook/" target="_blank">Enhanced Guestbook - Implemented with PHP and SQL</a></li>
				<li><a href="../exercises/music_ui/" target="_blank">Modify Your Music Collection!</a></li>
			</ul>
		</div>
		<div class="col-sm-4">
			<h2>JavaScript/jQuery:  <i class="fa fa-angle-double-up" id="js_arrow" aria-hidden="true"></i></h2>
			<ul class="hidden_list" id="js_list">
				<li><a href="../exercises/dom_crawler/" target="_blank">JavaScript Index Page (displays the DOM structure of the home page)</a></li>	
				<li><a href="../exercises/todo/" target="_blank">Interactive to-do list (jQuery)</a></li>
				<!--<li><em>In Development</em> - JavaScript Quiz!</li>-->
				<li><a href="../exercises/quiz" target="_blank">JavaScript Quiz</a></li>
			</ul>
		</div>	
	</div>
	<div class="row text-align-left">
		<div class="col-sm-4">
			<h2>APIs: <i class="fa fa-angle-double-up" id="api_arrow" aria-hidden="true"></i></h2>
			<ul class="hidden_list" id="api_list">
				<li><em>In Development</em> - SoundCloud API ***NOTE: SoundCloud has temporarily stopped processing API requests. See 
				<a href="https://docs.google.com/forms/d/e/1FAIpQLSfNxc82RJuzC0DnISat7n4H-G7IsPQIdaMpe202iiHZEoso9w/closedform">here</a> for the error message.</li>
				<li><a href="../exercises/youtube/youtube.html.php">YouTube API</a></li>
				<!--<li><a href="../exercises/soundcloud/" target="_blank">SoundCloud API</a></li>-->
			</ul>
		</div>
	</div>';

$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/templates/full-width.html.php";
   include_once($path);

?>
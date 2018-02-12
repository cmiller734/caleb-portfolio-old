<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<?php 
	$title='Home Page | CM Web Development'; 
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/head.html.php";
	include ( $path ); 
?>
<!--body-->
<body>
<<<<<<< HEAD
<div class="overlay"><!--Welcome banner-->
=======
<!--<div class="overlay"><!--Welcome banner
>>>>>>> fbe48fc79d18a2131597485aa9f0d07c210c8d41
		<p><em>"Maybe some of the same people who devised the 1040 tax forms also created the syntax rules for SGML, and hence HTML.</em> 
			- Daniel R. Tobias, <a href="http://webtips.dan.info/comments.html">Dan's Web Tips</a>
		</p>
		<p>Click Anywhere - Come on In</p>
<<<<<<< HEAD
</div>
=======
</div> ------>
>>>>>>> fbe48fc79d18a2131597485aa9f0d07c210c8d41

<div class="container">
	<header class="centeredtext">
		<img class="float_left image" id="pro_photo" src="../images/official-photo.jpg">
		<!--<div class="float_left">-->
		<h1>Caleb Miller - Web Developer</h1>
		<p><a href="mailto:caleb.miller734@outlook.com">caleb.miller734@outlook.com</a></br></p>
		<p>Welcome to my web portfolio. Last updated on <?php echo date("l, F d, Y"); ?>.</p>
		<p>If you're visiting this site, it means you are interested in seeing what I have to offer. Thanks for your time!</p>
		<!--</div>-->
	</header>
	
	<hr><!---end heading-->

	<!--Dev Skills Portfolio - by language-->

	<div class="centeredtext">
		<h2>Programming Languages Portfolio</h2>
		<h3>Overview</h3>
	</div>
	
	<p>My web portfolio currently utilizes hand-coded HTML and CSS - I am not utilizing a CMS. I use bootstrap in order to make my design responsive. The majority of this site is written in   
		HTML, CSS and PHP, with some JavaScript utilized. The purpose of this site is to show employers and prospective clients my development knowledge and skills. It is <em>not</em>
		intended to be a resume or an exhaustive list of my skills; rather, it is intended to showcase my <em>development</em> skills in particular.  
		The latest, greatest, web technologies and practices may not be utilized on this site. This site will not express all of my development skills (e.g., my experience with FoundationPress and WordPress). For an exahustive list, see my 
		<a href="https://drive.google.com/open?id=12ZRP4QAscSmYTV_asuhzIBC6aWChXRGCaseGKdQFgm4" target="_blank">resume</a> (opens in new tab).
	</p>

	<div class="centeredtext">
		<h3>Future plans for site development:</h3>
	</div> 

	<div class="list">
		<ol>
			<li>Re-implement this site using WordPress</li>
			<li>Include practical JavaScript and jQuery application</li>
			<li>Spice up the site with some visuals</li>	
	</div>

	<div class="centeredtext">
		<h3>Programming Languages, Etc.</h3>
		<p>Here are some examples of web apps, games, test pages, etc. that I can program using various languages. These pages are designed to showcase my development skills.</p>
	</div>
	
	<div class="list">
		<h2>PHP:</h2>
		<ul>
			<li><a href="exercises/datetime/datetime.php" target="_blank">Current Date and Time</a></li>
			<li><a href="exercises/multiplication/multiplication_table.php" target="_blank">Dynamic Multiplication Table</a></li>
			<li><em>In Development</em> - Number Input Manipulation</li>
			<li><a href="exercises/number_text_process/text_input/" target="_blank">Text Input Manipulation</a></li>
			<li><a href="exercises/form_palindrome/form/" target="_blank">$_REQUEST array processor</a></li>
			<li><a href="exercises/form_palindrome/palindrome/" target="_blank">Palindrome Application</a></li>
			<li><a href="exercises/number_two_guess/number_two/" target="_blank">Variable Length Number Input Manipulation</a></li>
			<li><a href="exercises/number_two_guess/guess/" target="_blank">Guessing Game</a></li>
			<li><a href="exercises/guestbook_war/guestbook/" target="_blank">Guestbook - Implemented with PHP</a></li>
			<li><em>In Development</em> - Play a Game of War</li>
		</ul>
	</div>

	<div class="list">
	<h2>PHP and SQL:</h2>
		<li><a href="exercises/enhanced_guestbook/" target="_blank">Enhanced Guestbook - Implemented with PHP and SQL</a></li>
		<li><a href="exercises/music_ui/" target="_blank">Modify Your Music Collection!</a></li>
	<ul>
	</ul>
	</div>

	<div class="list">
		<h2>JavaScript:</h2>
		<li><em>In Development</em> - JavaScript Index Page (will create and display the DOM structure of this page)</a> </li>	
	</div>

	<!--NOT NEEDED FOR NOW - may reimplement later 
		
		<div class="list">
		<h2>Front End Frameworks:</h2>
		<li><a href="non-assignments/bootstrap_test.html.php">Bootstrap Testing Page</a></li>
	</div> --> 

	<hr><!--end Dev Skills Portfolio -->

	<div class="textcontent">
		<h2>About Me</h2>

		<p><strong>I am primarily a front end developer (HTML, CSS, JS), but I know some back end languages as well (PHP, SQL)</strong>.</p> 
		<p>One of my strongest skills is problem solving - the ability to be given a problem or issue and work with what I know to craft an answer that will help.</p>	
	</div>

	<hr><!--end text content area-->

</div>

<!--footer-->
<?php 
		$js=true;
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>

</body>

</html>
=======
<?php

	if (!isset($_COOKIE['first_visit']))
{
	include('overlay.html.php');
}
else 
{
	include('homepage.html.php');
}
	
?>
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a

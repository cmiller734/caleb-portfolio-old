<?php $title='Home Page | CM Web Development';
	$main_heading_title='Caleb Miller - Web Developer';
	$main_heading_text=	"<p><!--<a href=\"mailto:caleb.miller734@outlook.com\">caleb.miller734@outlook.com</a>--></p>
			<p>Welcome to my web portfolio. Last updated on ".date('l, F d, Y').".</p>
			<p>If you're visiting this site, it means you are interested in seeing what I have to offer. Thanks for your time!</p>";
	$main_photo_src = "\"/images/unofficial-photo.jpg\"";
	$main_text_heading = "Overview";
	$main_text_body = "<p>My web portfolio currently utilizes hand-coded HTML, JS/jQuery, and CSS/SASS - I am not utilizing a CMS. I use Bootstrap in order to make my design responsive. The majority of this site is written in   
			HTML, SASS and PHP, with some JavaScript/jQuery utilized. The purpose of this site is to show employers and prospective clients my development knowledge and skills. It is <em>not</em>
			intended to be a resume or an exhaustive list of my skills; rather, it is intended to showcase my <em>development</em> skills in particular. This site will not express all of my development skills (e.g., my experience with FoundationPress and WordPress). For an exahustive list, see my 
			<a href=\"https://drive.google.com/file/d/0B4bHWUN3wvaZUHh0c2pLQWxFeUE/view?usp=sharing\" target=\"_blank\">resume</a> (opens in new tab).</p>
			<p>I'm also using useful tools like Font Awesome, Google Fonts, and Google Analytics!</p>";

$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/templates/full-width.html.php";
   include_once($path); ?>
<?php 
   	$title='Site Plans | CM Web Development';
	$heading='Future plans for site development:';
	$content='<ol class="list text-align-left">
			<li>Simplify internal redirect structure. It doesn\'t have to be as complicated as it is for JS pages. Pages to fix:</li>
				<ul class="list">
					<li>JavaScript Index Page</li>
					<li>Interactive To-Do List</li>
					<li>JavaScript Quiz</li>
					<li>SoundCloud API page</li>
				</ul>
			<li>Finish debugging/implementation of relevant projects (see projects page)</li>
			<li>Implement modern site look using HTML/CSS</li>
			<li>Re-implement individual web application functionality into site itself (allows for development of a more modern site)</li>
			<li>Fix some errors in the responsiveness of the site - this will require getting deeper into Bootstrap</li>
		</ol>';  
	$path = $_SERVER['DOCUMENT_ROOT'];
   	$path .= "/templates/minimal-text.html.php";
	include_once($path); ?>
	
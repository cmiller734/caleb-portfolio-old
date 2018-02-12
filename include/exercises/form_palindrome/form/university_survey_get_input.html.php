<!DOCTYPE html>
<html lang="en">
<!--------------------------------University Survey: Get information from user via forms then manipulate it------->

<head>
	<title>$_REQUEST array processor | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">	
</head>

<body>
	<!---------------------------header----------------------->
	<header>
		<h1 class="bigtext">University Survey</h1>
		</br>
		<p class="centeredtext">Please take the time to enter the following information and answer a few questions. 
		In return, you will be entered to win a 20$ ITunes Gift Card!</p>
	</header>
	</br>
	
	<!----------------------------body: this is where the form itself is------------------------>
	
	
	<fieldset> <!-----Personal info. Using GET method-->
		<legend>To start, let us ask a few questions about yourself.</legend>
		<form method="get"> 
		
			<!----text boxes-->
			<ul class="nobulletlist"> 
				<li><input type="text" name="name">What is your name?</li>
				<li><input type="text" name="color">What is your favorite color?</li>
				<li><input type="text" name="major">What is your major?</li>
				<li>Do you prefer your martinis shaken or stirred?</li>
				
				<!------radio boxes-->
				<li><input type="radio" name="martini" value="shaken" checked>shaken</li>
				<li><input type="radio" name="martini" value="stirred">stirred</li>
			</ul>
		
			<!------radio boxes-->	
			<p>What is your favorite thing about University?</p>
			<input type="radio" name="favorite_thing" value="food" checked>The food</br>
			<input type="radio" name="favorite_thing" value="party">The parties</br>
			<input type="radio" name="favorite_thing" value="club">The clubs</br>
			<input type="radio" name="favorite_thing" value="friends">The friends</br>
			<input type="submit">
			
		</form>
	</fieldset>
	
	<fieldset> <!----------Info about classes and teachers. Using POST method-->
		<legend>Now we are going to ask you a few questions about your experience with University classes and teachers.</legend>
			<form method="post">
				
				<!---Class enjoyment-->
				<p>To start, on a scale of 1 to 10, how much do you enjoy the classes you take at the University?</p>
				<ul class="nobulletlist"> <!-----more text boxes-->
				<li><input type="radio" name="enjoy" value="1" checked>1</li>
				<li><input type="radio" name="enjoy" value="2">2</li>
				<li><input type="radio" name="enjoy" value="3">3</li>
				<li><input type="radio" name="enjoy" value="4">4</li>
				<li><input type="radio" name="enjoy" value="5">5</li>
				<li><input type="radio" name="enjoy" value="6">6</li>
				<li><input type="radio" name="enjoy" value="7">7</li>
				<li><input type="radio" name="enjoy" value="8">8</li>
				<li><input type="radio" name="enjoy" value="9">9</li>
				<li><input type="radio" name="enjoy" value="10">10</li>
				</ul>
				
				<!----Class dislike-->
				<p>What do you most DISLIKE about classes? (check all that apply)</p>
				<ul class="nobulletlist"> <!---what do you dislike about classes-->
<<<<<<< HEAD
				<li><input type="checkbox" name="dislike" value="work">All the work... it's too much</li>
				<li><input type="checkbox" name="dislike" value="subject">The subject of work... it's boring</li>
				<li><input type="checkbox" name="dislike" value="hard">The difficulty... it's very difficult</li>
				<li><input type="checkbox" name="dislike" value="passion">I'm just not very passionate about the subject</li>
=======
				<li><input type="checkbox" name="dislike" value="work">All the work... it\'s too much</li>
				<li><input type="checkbox" name="dislike" value="subject">The subject of work... it\'s boring</li>
				<li><input type="checkbox" name="dislike" value="hard">The difficulty... it\'s very difficult</li>
				<li><input type="checkbox" name="dislike" value="passion">I\'m just not very passionate about the subject</li>
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a
				<li><input type="checkbox" name="dislike" value="all">All of the above</li>
				</ul>
			
				<!-----Class change-->
				<p>If you had one thing to say about your classes, what would it be?</p>
				<input type="text" name="say"></br>
				<input type="submit">
			</form>
<<<<<<< HEAD
	</fieldset>
	
	<!------------------------------------footer--------------------------------------->
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/footer.html.php";
		include ( $path ); 
	?>
</body>

</html>
=======
	</fieldset>';
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/templates/minimal-text.html.php";
    include_once($path); ?>
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a

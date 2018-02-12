<!DOCTYPE html>
<html>

<!-------------------------------head----------------------------------->
<head>
	<title>Guestbook Input | CM Web Development</title>
	<link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
</head>

<!------------------------------body------------------------------------->
<body>

<!-------------------------------------HEADER---------------------------->
	<header>
		<h1 class="bigtext">Guestbook Page</h1>
	</header>
	
<!-------------------------------------BODY CONTENT----------------------->
	<!--<div class="centeredtext">-->
		<p>I'm so glad you decided to come visit my site. I hope you will continue to visit as I expand the site with
			new features, applications, and pages. This page gives you an opportunity to provide some feedback:
			<ul>
				<li>What did you like?</li>
				<li>What did you <span class="boldtext">dis</span>-like? What could be changed?</li>
				<li>What are you dying to see in the future?</li>
			</ul>
		<p>In addition to your input, please provide your name, location, and e-mail address so we can get back to you.</p>
	<hr>

<!---------------------------------Display the error message, if there is one------------->
	
	<?php if (isset($error_message))
		{
			echo '<p>' . $error_message . '</p>';
		}
	?>
		
<!---------------------------------------FORM STUFF------------------------>

	<form method="post" action="">
		<!---------------------------------input---------------------------->
		<p>
			<!---------------single line------>
			Name:<input type="text" name="input_name" value="<?php if(isset($_POST['input_name'])){ echo $_POST['input_name'];}?>"<br>
			Location:<input type="text" name="input_location" value="<?php if(isset($_POST['input_location'])){ echo $_POST['input_location'];}?>"><br>
			E-mail address:<input type="text" name="input_email" value="<?php if(isset($_POST['input_email'])){ echo $_POST['input_email'];}?>"><br>
		
<<<<<<< HEAD
			<!--------------multi line----->
			Comments <textarea name="input_comments" rows="4" cols="60"><?php if(isset($_POST['input_comments'])){ echo htmlspecialchars($_POST['input_comments']);}?></textarea><br>
			
			<!---------------------------------submit--------------------------->
=======
			<!--------------multi line---->
			Comments <textarea name="input_comments" rows="4" cols="60"><?php if(isset($_POST['input_comments'])){ echo htmlspecialchars($_POST['input_comments']);}?></textarea><br>
			
			<!---------------------------------submit-------------------------->
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a
			<input type="submit">
		</p>
	
	</form>
	
		
		<p>
			<a href="?show">View guestbook</a>
		</p>
		
<<<<<<< HEAD
<!------------------------------------show page visit count based on cookies----------------------------->

<p class="centeredtext">You have visited this page <?php echo $cookie ?> times.</p>

<!------------------------------------FOOTER--------------------------------------->
=======
<!------------------------------------show page visit count based on cookies---------------------------->

<p>You have visited this page <?php echo $cookie ?> times.</p>

<!------------------------------------FOOTER-------------------------------------->
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a
<?php 
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/footer.html.php";
	include ( $path ); 
?>
<<<<<<< HEAD
	
=======
</div>
>>>>>>> 182f3071a125436c8c6937eaeaf8b34df94f766a
</body>

</html>
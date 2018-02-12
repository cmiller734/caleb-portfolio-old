
          
<!--purpose is to have a n easy starting ground for new pages-->
<!DOCTYPE html>
<html lang="en">
<head>
        <script src="https://use.fontawesome.com/3301b5078b.js"></script>
        <link rel="shortcut icon" href="/images/favicon.ico" />
	    <link href="/styles/bootstrap.min.css" rel="stylesheet" type="text/css">
	    <link href="/styles/css/stylesheet.css" rel="stylesheet" type="text/css">
	    <meta charset="UTF-8">
</head>
<body>
    <?php
    setcookie("first_visit", "no" /* EXPIRE */);
	echo '<div class="overlay">
		  	<p id="message">"Web development from the ground up."<p>
			<button type="submit" id="site_enter" value="Enter">
                <a href="homepage.html.php">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </button>
          </div>';
          ?>
</body>
</html>
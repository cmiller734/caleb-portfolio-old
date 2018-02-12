<!DOCTYPE html>
<html lang="en">

<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/head.html.php";
	include ( $path ); 
?>
<!--body-->
<body>
	<div class="overlay">
		  	<p>"Web development from the ground up."<p>
                <a href="#" id="site_enter">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
				
          </div>
	<div class="container">
		<div class="inner_container">
			<header>	
				<img class="float_left img-responsive" id="main_photo" src=<?php echo $main_photo_src ?>>
				<div id="main-heading-content">
					<h1><?php echo $main_heading_title ?></h1>
					<?php $path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "/templates/main-nav.html.php";
					include($path);?>
					<?php echo $main_heading_text ?>	
				</div>
			</header>

			<hr><!---end heading-->
			<br>
			<br>

			<h2><?php echo $main_text_heading ?></h2>

			<?php echo $main_text_body ?>

			<hr>
			
			<?php 
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/footer.html.php";
				include ( $path ); 
			?>
		</div>
	</div>
</body>

</html>
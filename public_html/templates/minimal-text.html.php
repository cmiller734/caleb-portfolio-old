<!DOCTYPE html>
<html lang="en">

<!--------header------>
<?php 
    $template = 'minimal-text';
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/head.html.php";
	include ( $path ); 
?>

<body>

<div class="small_text_container">
        <h2><?php echo $heading; ?></h2>
        <?php $path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/templates/main-nav.html.php";
				include($path);?>
		<p><?php echo $content; ?></p>
</div>


	<!------------------------------------footer---------------------------------->
	<?php 
	//	$path = $_SERVER['DOCUMENT_ROOT'];
	//	$path .= "/footer.html.php";
	//	include ( $path ); 
	?>
</div>

</body>

</html>		
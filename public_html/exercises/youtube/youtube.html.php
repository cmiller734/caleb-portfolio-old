<!DOCTYPE html>
<html lang="en">
    <body>
        <!---head-->
        <?php
            $page_id="youtube"; 
            $title='SoundCloud | CM Web Development'; 
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/head.html.php";
            include ( $path ); 
        ?>
        <!--main content-->
        <p>This page takes in a search term string (currently "Fast Car" to match the often-covered song by Tracy Chapman) and some search filters. It uses the YouTube API to return a list of songs that include
            the string "Fast Car" in the title.</p>

        <pre id="response"></pre>
        <!--footer-->
        <?php 
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/footer.html.php";
                include ( $path ); 
        ?>
    </body>
</html>
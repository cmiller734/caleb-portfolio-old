<!DOCTYPE html>
<html lang="en">
    <body>
        <!---head-->
        <?php
            $page_id="soundcloud"; 
            $title='SoundCloud | CM Web Development'; 
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/head.html.php";
            include ( $path ); 
        ?>
        <!--main content-->
        <a href="#" class="connect">Connect with SoundCloud</a>
        <p>Hello, your name is <span id="username"></span></p>
        <!--footer-->
        <?php 
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/footer.html.php";
                include ( $path ); 
        ?>
    </body>
</html>
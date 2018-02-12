<!--purpose is to have a n easy starting ground for new pages-->

<!DOCTYPE html>
<html lang="en">
    <body>
        <!---head-->
        <?php 
            $title='To Do List | CM Web Development'; 
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/head.html.php";
            include ( $path ); 
        ?>
        <!--main content-->

        <!--footer-->
        <?php 
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/footer.html.php";
                include ( $path ); 
            ?>
    </body>
</html>
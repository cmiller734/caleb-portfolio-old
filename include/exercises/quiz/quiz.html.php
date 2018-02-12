<!DOCTYPE html>
<html lang="en">
    <body>
        <!---head-->
        <?php
            $page_id='quiz'; 
            $title='JavaScript Quiz | CM Web Development'; 
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/head.html.php";
            include ( $path ); 
        ?>
        <!--main content-->
       

        <div id="quiz"></div>
        <button id="submit">Submit Quiz</button>
        <div id="results"></div>

        <!--footer-->
        <?php 
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/footer.html.php";
                include ( $path ); 
        ?>
    </body>
</html>
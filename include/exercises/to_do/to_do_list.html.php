<!DOCTYPE html>
<html lang="en">
    <body>
        <!---head-->
        <?php
            $page_id='to_do_list'; 
            $title='To Do List | CM Web Development'; 
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/head.html.php";
            include ( $path ); 
        ?>
        <!--main content-->
        <h2>To Do</h2>
        <h4>Press "Enter" while the mouse is focused on the box to clear the list.</h4>
        <form name ="checkListForm">
            <input type="text" name="checkListItem" />
        </form>
        <button id="button">Add</button>
        </br>
        <div class="list"></div>
        <!--footer-->
        <?php 
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/footer.html.php";
                include ( $path ); 
            ?>
    <body>
</html>
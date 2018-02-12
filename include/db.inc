<?php
$link = mysqli_connect('localhost', 'root',);
if (!$link) {
    $err = 'Unable to connect to the database server';
    include 'errmsg.html.php';
    exit();
}

if (!mysqli_select_db($link, 'cjz89')) {
    $err = 'Unable to locate the database';
    include 'errmsg.html.php';
    exit();
}
?>

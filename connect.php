<?php
    $connect = mysqli_connect('localhost','root','','banhangweb');

    if(mysqli_connect_error() != 0)
        die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
    
    mysqli_set_charset($connect, 'utf8');
?>
<?php
    session_start();

    $hostname="localhost";
    $username="root";
    $password="";
    $db="the_legacy_of_sikh";
    $conn=mysqli_connect( $hostname,$username ,$password,$db);
?>
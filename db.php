<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "shahzint_db";
    $con = mysqli_connect($host,$user,$pass,$db);
    if(!$con)
    {
        echo "<script>alert('unable to connect');</script>";
    }
?>
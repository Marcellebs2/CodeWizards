<?php
    $host = "127.0.0.1";
    $dbname = "sistema_login";
    $username = "root";
    $password = "";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if($con->error){
        die("Failed to connect to MySQL: ". $con->error);
    }

?>
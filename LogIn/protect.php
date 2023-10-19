<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Você não pode acessar esta página! Fazer o <a href=\"login.php\">LogIn</a>");
    }

?>
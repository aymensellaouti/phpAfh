<?php

session_start();
// il vérifie est ce que le user est authentifié ou non 
if (!isset($_SESSION['user'])) {
    // si ! authentitfié => on le redirige vers login
    $_SESSION['error']= "Unauthorized";
    header('location:login.php');
}
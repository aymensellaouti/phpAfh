<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$tempName = $_FILES["cin"]["tmp_name"] == '' ? null : $tempName = $_FILES["cin"]["tmp_name"];
if ($tempName) {
    $newName = uniqid() . $_FILES["cin"]["name"];
    $to = "uploads/$newName";
}
if ($email && $password && $email == "admin@gmail.com" && $password == "0000") {
    // permet d'identifier que un user authentifié
    $_SESSION['user'] = $email;
    if ($tempName) {
        copy($tempName, $to);
    }
    header("location:home.php");
} else {
    $_SESSION['error'] = "veuillez vérifier vos identifiants";
    header("location:login.php");
}

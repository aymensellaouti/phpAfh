<?php 

$email = $_POST['email'];
$password = $_POST['password'];
$tempName = $_FILES["cin"]["tmp_name"];
$newName = uniqid().$_FILES["cin"]["name"];
$to = "uploads/$newName";
if($email=="admin@gmail.com" && $password=="0000") {
    copy($tempName, $to);
    header("location:home.php");

} else {
    header("location:login.php?error=veuillez vérifier vos identifiants");
}
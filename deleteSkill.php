<?php 

include_once('autoloader.php');

$bdd = ConnexionBD::getInstance();
$id = $_GET['id'];
if (!isset($id)) {
    header('location:login.php');
}

$skillRepository = new SkillRepository();
$skills = $skillRepository->delete($id);
header('location:skills.php');

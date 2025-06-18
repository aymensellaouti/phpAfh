<?php 

include_once('autoloader.php');

$bdd = ConnexionBD::getInstance();
$id = $_GET['id'];
if (!isset($id)) {
    header('location:login.php');
}

$skillRepository = new SkillRepository();
$skill = $skillRepository->find($id);
if (!$skill) header('location:skills.php');
include('fragments/header.php');
?>
<div class="card w-75 mb-3">
  <div class="card-body">
    <h5 class="card-title"><?=$skill->designation ?></h5>
    <a href="skills.php" class="btn btn-primary">Liste des skills</a>
  </div>
</div>
<?php include('fragments/footer.php');
<?php 

include_once('autoloader.php');

$bdd = ConnexionBD::getInstance();
$id = $_GET['id'];
if (!isset($id)) {
    header('location:login.php');
}

$query = "select * from skill where id = :id";
$request = $bdd->prepare($query);
$request->execute(['id'=> $id]);
$skill = $request->fetch(PDO::FETCH_OBJ);
include('fragments/header.php');
?>
<div class="card w-75 mb-3">
  <div class="card-body">
    <h5 class="card-title"><?=$skill->designation ?></h5>
    <a href="skills.php" class="btn btn-primary">Liste des skills</a>
  </div>
</div>
<?php include('fragments/footer.php');
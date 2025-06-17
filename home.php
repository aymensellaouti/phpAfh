<?php 

/**
 * Permet de vérifier si deux objets sont identiques
 * @param mixed $obj1
 * @param mixed $obj2
 * @param mixed $bethabt
 * @return bool
 */
function kifkif($obj1, $obj2, $bethabt = false): bool {
   return $bethabt ? ($obj1 === $obj2) : ($obj1 == $obj2);
}
$pageTitme = "Accueil";
include 'isAuthenticated.php'; 
include './fragments/header.php';  
include_once 'class/User.php';
$user = new User('sonia');
$sonia = clone $user;
echo kifkif($user, $sonia, true);
$userJdid = new User('imed');
$user->changeName("mohamed");
$userJdid->changeName("mohamed");

?>
<div class="alert alert-info">
    Bienvenu
<?php 
    unset($user);
    include './fragments/footer.php'; ?>
<?php 
    $pageTitle = 'login'; 
    session_start();    
?>
<!DOCTYPE html>
<?php include './fragments/header.php'; 

if(isset($_SESSION['error'])) {
?>
<div class="alert alert-danger">
    <?=$_SESSION['error'] ?>
</div>
<?php 
    unset($_SESSION['error']);
}?>


    
<form action="processLogin.php" method="post" enctype="multipart/form-data">
    email :<input required type="text" name="email" class="form-control">
    password :<input required type="password" name="password" class="form-control">
    cin: <input name="cin" type="file" class="form-control">
    <button type="submit" class="btn btn-primary">login</button>
</form>

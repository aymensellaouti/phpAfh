<?php $pageTitle = 'login'; ?>
<!DOCTYPE html>
<?php include './fragments/header.php'; 

if(isset($_GET['error'])) {
?>
<div class="alert alert-danger">
    <?=$_GET['error'] ?>
</div>
<?php }?>


    
<form action="processLogin.php" method="post" enctype="multipart/form-data">
    email :<input type="text" name="email" class="form-control">
    password :<input type="password" name="password" class="form-control">
    cin: <input name="cin" type="file" class="form-control">
    <button type="submit" class="btn btn-primary">login</button>
</form>
</body>
</html>
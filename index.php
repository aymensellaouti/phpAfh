<?php 
    $name = "AFH";
    $annee = 2025;
    //var_dump($GLOBALS);
    $users = ["user1" => 'aymen', "user2" =>'rchid'];
    $users["user3"] = 'Mohamed';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first</title>
</head>
<body>
    <div>
      <!-- itha kan annee paire fama offre sinon ma famech -->
       <?php if(!$annee % 2) { ?>
        <div class="alert alert-success">
            3ana Barcha Diar
        </div>
        <?php } else {?>
            <div class="alert alert-danger">
                L3am ejjay inchallah
            </div>
        <?php } ?>

        <ol class="list list-group">
            <?php foreach($users as $key => $user): ?>
            <li class="list list-group list-group-item">
                <?php echo "$key : $user" ?>
            </li>
            <?php endforeach ?> 
        </ol>
    </div>
</body>
</html>
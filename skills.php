<?php

include_once 'autoloader.php';

$bdd = ConnexionBD::getInstance();

$id = isset($_GET['id']) ?? 5;
$theads = ['id', 'designation'];
$skillRepository = new SkillRepository();
$data = $skillRepository->findAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Skills</title>
</head>

<body>
<div class="container">
    <table id="dt" class="table table-striped" style="width:100%">

        <thead>

        <tr>
            <?php
            foreach ($theads as $thead) :
                ?>
                <th><?= $thead ?></th>
            <?php
            endforeach
            ?>
            <th>operations</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $element) :

            ?>
            <tr>
                <?php
                foreach ($theads as $thead) :
                ?>
                <th><?= $element[$thead] ?></th>
                    <?php
                endforeach
                ?>
                <th>
                    <a href="detailSkill.php?id=<?=$element['id'] ?>">
                        <i class="bi bi-info-circle"></i>
                    </a>
                    <a href="deleteSkill.php?id=<?=$element['id'] ?>">
                        <i class="bi bi-trash2-fill"></i>
                    </a>
                </th>
            </tr>
        <?php
        endforeach
        ?>
        </tbody>
    </table>

</div>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="js/execDatatables.js"></script>
</body>

</html>
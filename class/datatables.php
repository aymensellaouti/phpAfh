<?php
include_once 'class/autoload.php';
$annuaire = new Annuaire(10);

$aymen = new Personne('aymen', '41', 23584455);
$skander = new Personne('skander', '5', 2358);
$annuaire->add($aymen);
$annuaire->add($skander);
$theads = $annuaire->getHead();
$data = $annuaire->getData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <title>Document</title>
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
                <th><?= $element->{$thead} ?></th>
                    <?php
                    endforeach
                    ?>
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
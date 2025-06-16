<?php 
    $name = "AFH";
    $annee = 2025;
    //var_dump($GLOBALS);
    $users = ["user1" => 'aymen', "user2" =>'rchid'];
    $users["user3"] = 'Mohamed';
    // var_dump(getdate());
    $x = 7;
    function double(&$element) {
        $element = $element * 2;
    }
    // function extractArrayByType(array $tab, string $type) {
    //     $fonctioEliBechTesta3melha = "is_$type";
    //     if ($fonctioEliBechTesta3melha($tab[0]))
    // }
    double($x);
    echo $x;
    function somme(...$args) {
        $sum = 0;
        foreach($args as $element) {
            $sum+=$element;
        }
        echo $sum;
    }
    somme(1,2,3,4);
?>
    <?php include './fragments/header.php' ?>
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
<?php include './fragments/footer.php'; ?>
<?php 
include_once 'class/Student.php';

$rachid = new Student(name: 'Rachid', marks:[16, 20, 18, 10]);
$anoir = new Student('Anoir', marks: [20, 19, 5, 13, 11, 17]);

$students = [$rachid, $anoir];
function getMarkClass(int $mark): string {
    if ($mark < 10) return "list-group-item-danger";
    if ($mark == 10) return "list-group-item-warning";
    return "list-group-item-success";
}
include 'fragments/header.php';
?>

<div class="row">
    <?php foreach ($students as $student){?>
    <div class="col-4">
        <ol class="list list-group">
            <li class="list list-group list-group-item list-group-item-secondary">
              <?=$student->getName()?> 
            </li>
            <?php foreach ($student->getMarks() as $mark){
                $class = getMarkClass($mark);
            ?>
                <li class="list list-group list-group-item <?=$class ?>">
                    <?=$mark ?>
                </li>
            <?php } ?>
            <li class="list list-group list-group-item list-group-item-info">
              <?=$student->avg()?>  / <?=$student->isAccepted() ? 'Admis': 'Refusé' ?>
            </li>
        </ol>
    </div>
    <?php } ?>
</div>

<?php include 'fragments/footer.php'  ?>
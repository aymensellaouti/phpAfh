<?php 

/*
1 récupériw el session
2 nthabtou ech fiha
    21 Kani fargha (ma3naha awle mara)
        Bech nraheb bih
        n3abiwha bel nombreDeVisite
    22 Kani m3abya (néeme mara)
        Nketeblou el message
        Nincrementiw el nombre eb ka3ba
*/
// 1 récupériw el session
session_start();
/*
2 nthabtou ech fiha
*/
    if(!isset($_SESSION['nbVisite'])) {
        /*21 Kani fargha (ma3naha awle mara)
        Bech nraheb bih
        n3abiwha bel nombreDeVisite
        */
        //Bech nraheb bih
        $message = "Bienvenu c'est votre première visite :D";
        //n3abiwha bel nombreDeVisite
        $_SESSION['nbVisite']=1;
    } else {
        /*
            22 Kani m3abya (néeme mara)
            Nketeblou el message
            Nincrementiw el nombre eb ka3ba
        */
        $nbVisite = $_SESSION['nbVisite'] + 1;
        $message = "Merci pour votre fidélité c'est votre $nbVisite visites";
        $_SESSION['nbVisite']=$nbVisite;
    }
include './fragments/header.php';
?>

<div class="alert alert-success">
    <?=$message ?>
</div>

<?php include './fragments/footer.php'; ?>
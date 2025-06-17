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
//session_start();
include_once 'class/Session.php';
$session = new Session();
/*
2 nthabtou ech fiha
*/
    if(!$session->has('nbVisite')) {
        /*21 Kani fargha (ma3naha awle mara)
        Bech nraheb bih
        n3abiwha bel nombreDeVisite
        */
        //Bech nraheb bih
        $message = "Bienvenu c'est votre première visite :D";
        //n3abiwha bel nombreDeVisite
        $session->set('nbVisite',1);
    } else {
        /*
            22 Kani m3abya (néeme mara)
            Nketeblou el message
            Nincrementiw el nombre eb ka3ba
        */
        $nbVisite = $session->get('nbVisite') + 1;
        $message = "Merci pour votre fidélité c'est votre $nbVisite visites";
        $session->set('nbVisite',$nbVisite);
    }
include './fragments/header.php';
?>

<div class="alert alert-success">
    <?=$message ?>
</div>

<?php include './fragments/footer.php'; ?>
<?php
include __DIR__.'/logique/character.php';
include __DIR__.'/logique/hero.php';
include __DIR__.'/logique/orc.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à la POO - RPG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/joyful-juliana" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <h1 id="goUp">Combat final contre le terrible  <span class="text-success">CYBWORK</span> </h1>
    <img class="vs" src="assets/img/bworkvsiop.png" alt="illustration du combat en cours"> <br>
    <img class="iop" src="assets/img/iop-removebg-preview.png" alt="iop">
    <?php
    $br = "<br>";
    $superChewi = new Hero(2000, "Hache'théroide", 250, "Panoplie Bouftou Royal", 600);
    $superChewi->displayHero();
    ?>
    <img class="cybwork"src="assets/img/Cybwork-removebg-preview.png" alt="cybwork">

    <?php
    $orc = new Orc(500, 10);
    $orc->displayOrc();

    while ($superChewi->getHealth() > 0 && $orc->getHealth() > 0) {
        $orc->attack($superChewi);

        if ($superChewi->getHealth() <= 0) {
            echo "<div class='bg-dark text-light'>🚑🚑🚑 Les points de vie du héros sont épuisés. Le héros est KO! 🚑🚑🚑 </div> ";
        }

        if ($orc->getHealth() <= 0) {
            echo "<div class='bg-dark text-light text-center'> ☠💀☠ L'Orc a été vaincu, félicitations! ☠💀☠  $br Bravo !!!  Jeune aventurier, tu as terminé le donjon 👑👑👑👑" . "$br Tu peux continuer la boucherie<a class='linkform' href='https://www.boucheriezbidafils.fr/'> ICI</a>" . " ou recommencer ce donjon" . " <a class ='linkform' href='#goUp' 'onClick='location.reload()'> ICI </a>  pour le finir en 3 étoiles. ⭐⭐⭐</div>" ;
        }
    }
    ?>
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Mrbeagels" role="button"><i
                        class="bi bi-github"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="bi bi-discord"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1"
                    href="https://www.linkedin.com/in/thibaud-marin-25a0b023a/" role="button"><i
                        class="bi bi-linkedin"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">

                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Merci a vous d'etre arrivez jusqu'ici. je reste a votre entiere disponibilité pour un entretien
                    ou un rendez-vous en distanciel.
                </p>
                <p>N'hésitez pas a consulter également mes autres CV : <a id="linkForms" href="#CV_video">CV
                        vidéo</a> & <a id="linkForms" href="CV_papier"> CV papier</a> </p>
            </section>
            <!-- Section: Text -->
            <!--Grid column-->
        </div>
        <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright: Thibaud Marin.
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

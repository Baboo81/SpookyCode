<?php 
    
    include './views/header.php';
    
    include './views/footer.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/styles1.css">
        <link rel="stylesheet" href="./assets/css/styles3.css">
        <title>HomePage</title>
    </head>

    <body>
        //~ Main contient tout ce qu'il y aura dans le body//
        <main class="container"> 
            <section class="presentation">//& Zone règles du jeu//
                <div class="left-side">
                    <h2>Présentation :</h2>

                    <p>Dans le cadre du hackathon 2022, les différentes promotions; WAD, GAME et WEB du centre de formation Interface3 se sont</p>
                    <p>associées en 7 équipes pour créer un site présentant un jeu.</p>
                    <p>Le hackaton se déroule sur trois jours, les collaborateurs de chaque groupes devront interagir de façon éfficace</p>
                    <p>et exploiter au mieux les connaissances de tout un chacun.</p>

                    <h2>Règles du jeu :</h2>

                    <p>Le jeu se déroule sur une map 3D, le joueur contrôle un personnage (Fantomette).</p>
                    <p>Le but du jeu est de collecter des instructions sous forme de code, chaque fois</p>
                    <p>que le personnage touche une instruction il gagne des points.</p>
                    <p>Les points du joueur seront sauvegardés dans un tableau des scores,</p>
                    <p>Les scores figurants dans ce tableau seront les meilleurs scores de chaques joueurs.</p>

                    <button>Start</button>
                </div>
                <div class="right-side">
                    <img src="" alt="decor">
                </div>
            </section>
            <section class="game-section">//& Zone de Jeu //
                <div class="fantomette"> //todo  thais popup sur fantomette//
                    <img id="btn-popup" src="" alt="fantomette">
                </div>
                <div class="spooky-game">
                    //todo Insérer le jeu via webGL//
                    
                </div>
            </section>   
            
        //~ Zone POPUP //
        <div class="bg-popup">
            <div class="content-popup">
                <div id="close"class="close">+</div>
                <h3>Besoin d'un coup de pouce ? Fantomette est là !</h3>

                <p> </p>
            </div>
        </div>
        </main>

    </body>
</html>
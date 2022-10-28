<?php 
    
    include './views/header.php';
    
   

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/reset.css">
        <link rel="stylesheet" href="./assets/css/styles1.css">
        
        <link rel="stylesheet" href="./assets/css/styles3.css">
        <title>HomePage</title>
    </head>

    <body>
        <!-- Main contient tout ce qu'il y aura dans le body-->
        <main class="container"> 
            <section class="presentation"> <!--Zone règles du jeu-->
                <div class="left-side">
                    <div>
                        <h2>Présentation :</h2>
                    </div>
                    <div>
                        <p>Dans le cadre du hackathon 2022, les différentes promotions; WAD, GAME et WEB du centre de formation Interface3 se sont</p>
                        <p>associées en 7 équipes pour créer un site présentant un jeu.</p>
                        <p>Le hackaton se déroule sur trois jours, les collaborateurs de chaque groupes devront interagir de façon éfficace</p>
                        <p>et exploiter au mieux les connaissances de tout un chacun.</p>
                    </div>
                    <div>
                        <h2>Règles du jeu :</h2>
                    </div>
                    <div>
                        <p>Le jeu se déroule sur une map 3D, le joueur contrôle un personnage (Fantomette).</p>
                        <p>Le but du jeu est de collecter des instructions sous forme de code, chaque fois</p>
                        <p>que le personnage touche une instruction il gagne des points.</p>
                        <p>Les points du joueur seront sauvegardés dans un tableau des scores,</p>
                        <p>Les scores figurants dans ce tableau seront les meilleurs scores de chaques joueurs.</p>
                    </div>
                    <div class="btn-start">
                        <button>Start</button>
                    </div>
                    
                </div>
                <div class="right-side">
                    <img src="./assets/img/spookyDecor-Recovered.png" alt="decor">
                </div>
            </section>
            <section class="game-section"><!-- Zone de Jeu -->
                <div class="fantomette"> <!-- todo  thais popup sur fantomette -->
                    <img id="btn-popup" src="./assets/img/svg/ghost.svg" alt="fantomette">
                </div>
                <div class="spooky-game">
                    <!-- todo Insérer le jeu via webGL-->
                    
                </div>
                <div class="div-scores">
                    <!-- choper les scores depuis la db - PHP -->
                </div>
            </section> 
            <section class="about-us">
                <div class="left-side-bis">
                    <div>
                        <h2>A propos de nous</h2>
                    </div>
                    <div>
                        <p>Par ces quelques lignes, je vais vous présenter notre chouette équipe, notre équipe </p>
                        <p>se compose de cinq membres venant de trois horizons différents.</p>
                        <p>Nous avons tout d'abord: Alina à la réalisation du jeu, Coline à la création et la gestion</p>
                        <p>de la base de donnée et pour la partie Web nous avons: Zahra, Thaïs et Chris.</p>
                        <p>Grâce à une excellente  cohésion de groupe nous sommes parvenues à mettre sur pied</p>
                        <p>en seulement trois jours un site web servant de support au jeu Spooky Code.</p>
                    </div>
                    <div class="avatar">
                        <div>
                            <div>
                                <img class="img-avatar" src="./assets/img/capture.png" alt="avatarAlina" title="Alina L.">
                            
                            </div>
                            <div>
                                <img class="img-avatar" src="./assets/img/capture.png" alt="avatarColine" title="Coline P.">
                           
                            </div>
                            <div>
                                <img class="img-avatar" src="./assets/img/capture.png" alt="avatarZahra" title="Zahra C.">
                            
                            </div>
                        </div>
                        <div>
                            <div>
                                <img class="img-avatar" src="./assets/img/capture.png" alt="avatarChristel" title="Christel P.">
                            
                            </div>
                            <div>
                                <img class="img-avatar" src="./assets/img/capture.png" alt="avatarThais" title="Thaïs S.">
                            
                            </div>
                        </div>    
                            
                    </div>
                </div>
                <div class="right-side">
                    <img src="./assets/img/spookyDecor-Recovered.png" alt="">
                </div>

            </section>  
            
        <!-- Zone POPUP -->
        <div class="bg-popup">
            <div class="content-popup">
                <div id="close"class="close">+</div>
                <h3>Besoin d'un coup de pouce ? Fantomette est là !</h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consectetur enim facilis est, velit dolores explicabo temporibus consequuntur distinctio dolorem voluptatem. Maxime eius corrupti, a vero veritatis aspernatur sunt. Illo. </p>
            </div>
           
        </main>
        <?php
                include './views/footer.php';
            ?>
    <script src="./assets/script/fantomette.js"></script>
    </body>
</html>
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
                    <h2>Spooky Code - Instructions</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cum blanditiis accusamus. Ea dolor natus unde sit molestias vero! Maiores officiis aliquam nisi unde eveniet accusamus omnis maxime perspiciatis non!
                    Vitae, incidunt dicta beatae sapiente dignissimos iste suscipit, molestias ducimus omnis saepe modi in numquam quidem veniam mollitia provident quasi corrupti commodi culpa! Labore possimus culpa accusantium, cupiditate maxime ullam.</p>
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
                <h3>Fantomette tells you everything about special characters</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, iste. Beatae hic, tenetur fuga libero voluptate minima ut nam pariatur omnis nihil perferendis dicta ea saepe similique labore facere alias!</p>
            </div>
        </div>
        </main>

    </body>
</html>
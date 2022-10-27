<?php
include_once "dbConst.php";
//Connexion à la DB

try {
    $connexion = new PDO(DBDRIVER.':host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS);
} catch (PDOException $err) {

    // Message d'erreur à sauvegarder
    $errorMessage = $err->getMessage();

    // Chemin du fichier log où les erreurs doivent être sauvegardées
    $logFile = "./error.log";

    // Enregistrement du message d'erreur dans le fichier log. 3 pour signifier inscription dans le fichier.
    error_log($errorMessage, 3, $logFile);

    die();

}
?>
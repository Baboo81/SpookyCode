<?php

include_once "pdo.php";

function userCreation($pdo, $userName)
{

    try {
        //requête à la DB pour créer l'utilisateur
        $sql = "INSERT INTO user (Name) VALUE (:userName)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam("userName", $userName);
        $stmt->execute();

        //le résultat renvoyé est un array. 
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //converti l'array en string
        $json = json_encode($result);
        return $json;


    } catch (PDOException $err) {

        // Message d'erreur à sauvegarder
        $errorMessage = $err->getMessage();

        // Chemin du fichier log où les erreurs doivent être sauvegardées
        $logFile = "./error.log";

        // Enregistrement du message d'erreur dans le fichier log. 3 pour signifier inscription dans le fichier.
        error_log($errorMessage."\r\n", 3, $logFile);

        die();
    }
}

$name = $_GET["Name"];
//print userCreation($connexion, $name);
?>
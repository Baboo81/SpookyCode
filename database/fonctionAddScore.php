<?php

include_once "pdo.php";
// include_once "sendToDb.js";

function addScore($pdo, $score, $name)
{
    try {
        //requête d'insertion du nouveau score dans la table
        $sql = "INSERT INTO scores (Name, score) VALUE (:userName, :score)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam("userName", $name);
        $stmt->bindParam("score", $score, PDO::PARAM_INT);
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
$score = $_GET["score"];

//print addScore($connexion, $score, $name);
?>

<script src="/assets/script/sendToDb.js"></script>
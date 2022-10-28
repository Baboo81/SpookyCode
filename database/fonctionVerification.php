<?php

include_once "pdo.php";
include "fonctionUserCreation.php";
include "fonctionAddScore.php";
//vérifie si l'user existe déjà ou pas dans la DB
function Verification($pdo, $userName) {
    try {
    //requête à la DB pour vérifier si l'username existe déjà
        $sql="SELECT Name FROM user WHERE Name =:userName";
        $stmt = $pdo -> prepare($sql);
        $stmt-> bindParam("userName", $userName);
        $stmt -> execute();

        //le résultat renvoyé est un array. 
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        // //converti l'array en string
        // $json = json_encode($result);
        // return $json
        //var_dump($result);
        return $result;
    }
    catch (PDOException $err) {

            // Message d'erreur à sauvegarder
            $errorMessage = $err->getMessage();
        
            // Chemin du fichier log où les erreurs doivent être sauvegardées
            $logFile = "./error.log";
        
            // Enregistrement du message d'erreur dans le fichier log. 3 pour signifier inscription dans le fichier.
            error_log($errorMessage."\r\n", 3, $logFile);
        
            die();
    }
}

//Si le user n'existe pas : le créer. (la fonction de création appellera la fonction d'ajout de score)

$name = $_GET['Name'];

$result = Verification($connexion, $name); //penser à le mettre en commentaire par la suite.
// print $result;
if (!empty($result)){
    //print "déjà là";
    addScore($connexion,$score,$name);
}
//si le user existe : ajouter directement son score aux existants.
else {
    //print "ajout";
    userCreation($connexion,$name);
    addScore($connexion,$score,$name);
}
?>
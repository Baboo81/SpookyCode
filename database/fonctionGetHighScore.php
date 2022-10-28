<?php

include_once "pdo.php";


//vérifie si l'user existe déjà ou pas dans la DB
function GetHighScore($pdo) {
    try {
    //requête à la DB pour vérifier si l'username existe déjà
        $sql="SELECT Name, score FROM scores ORDER BY score DESC LIMIT 10;";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute();

        //le résultat renvoyé est un array. 
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        // //converti l'array en string, pas nécessaire ici car nous avons besoin d'un array et non d'une string
        // $json = json_encode($result);
        // return $json;
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

$highScores = GetHighScore($connexion);
//var_dump($highScores);

$highScoresTable = array();
$rank=1;

foreach ($highScores as $row) {
    $cells=array();
    foreach($row as $cell) {
        $cells[] = "<td>{$cell}</td>";
    }
    $highScoresTable[]="<tr><td>".$rank."</td>".implode('',$cells)."</tr>";   
    $rank++;   
}
// print_r($highScoresTable);
print_r ( "<table class='highScores'>
<thead><th colspan='3'>Meilleurs scores</th></thead>
<tbody>".implode('',$highScoresTable)."</tbody></table>");
?>
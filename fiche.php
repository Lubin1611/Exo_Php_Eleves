<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 19/12/2018
 * Time: 10:59
 */

include "tableau.php";

$recupIndex = $_GET["param"];
//echo $monTableau[$recupIndex]["nom"];
//echo $monTableau[$recupIndex]["prenom"];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Infos en detail</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="ListeEleve">
    <ul id ="style">

        <li><?= $monTableau[$recupIndex]["nom"] ?></li>
        <li><?= $monTableau[$recupIndex]["prenom"] ?></li>
        <li><?= $monTableau[$recupIndex]["age"] ?></li>
        <li><?= $monTableau[$recupIndex]["ville"] ?></li>
        <li><?= $monTableau[$recupIndex]["passions"] ?></li>
        <a href = "Index.php">Retour</a>
    </ul>

</div>
</body>
</html>
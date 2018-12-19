<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/12/2018
 * Time: 15:31
 */

include "tableau.php";


?>


    <ul>

        <?php


        $i = 0;
        foreach ($monTableau as $toto) {

            ?>

            <li><?= $toto["nom"] . ' ' . $toto["prenom"]; ?> <a href="fiche.php?param=<?= trim($i) ?>">Plus
                    d'informations</a><br><br></li>

            <?php
            $i++;

        }

        ?>


    </ul>

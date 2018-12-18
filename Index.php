<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/12/2018
 * Time: 15:31
 */

$monTableau = [
    0 => ["nom" => "Flament",
        "prenom" => "Brian",
        "age" => "36",
        "ville" => "Fontaine-les-vervins",
        "passions" => "Cryptocurrency, botanique, alchimie",
    ],

    1 => ["nom" => "Spilmont",
        "prenom" => "André",
        "age" => "31",
        "ville" => "Fourmies",
        "passions" => "jeux video, la nouriture , conduire"
    ],

    2 => ["nom" => "Bon",
        "prenom" => "Romain",
        "age" => "25",
        "ville" => "Berlainmont",
        "passions" => "Football, Cuisine, Jeux Vidéo"
    ],

    3 => ["nom" => "Labaeye",
        "prenom" => "Amandine",
        "age" => "18",
        "ville" => "Etroengt",
        "passions" => "Foot, Netflix, Jeux vidéo"
    ],

    4 => ["nom" => "Soudain",
          "prenom" => "Florence",
          "age" => "33",
          "ville" => "Leval",
          "passions" => " Japon, manga, jeux vidéo"
    ],

    5 => ["nom" => "Ducamp",
          "prenom" => "Maxime",
          "age" => "30",
          "ville" => "Beaudignies",
          "passions" => "fromage et pis c'est tout (bon et la sci-fi vu que Simon insiste)"
    ],

    6 => ["nom" => "Bouret",
          "prenom" => "Sebastien",
          "age" => "40",
          "ville" => "Inconnue",
          "passions" => "passions jeux video/manga"
    ],

    7 => ["nom" => "Bultot",
          "prenom" => "Bryan",
          "age" => "26",
          "ville" => "Fourmies",
          "passions" => "les filles, la nourriture, les soirées"
    ],

    8 => ["nom" => "Claisse",
          "prenom" => "Sophie",
          "age" => "34",
          "ville" => "Fourmies",
          "passions" => "musique, litterature, langues etrangeres"
    ],

    9 => ["nom" => "Pronnier",
          "prenom" => "David",
          "age" => "32",
          "ville" => "Fourmies",
          "passions" => "photographie, informatique, sonorisation."
    ],

    10 => ["nom" => "Carpentier",
           "prenom" => "benoit",
           "age" => "39",
           "ville" => "Fourmies",
           "passions" => "l'informatique, l'astronomie et le tricot."
        ],

    11 => ["nom" => "Duthoit",
           "prenom" => "Arnaud",
           "age" => "29",
           "ville" => "Wignehies",
           "passions" => "Lecture, Promenade,les cacahuètes"
        ],

    12 => ["nom" => "Leclercq",
           "prenom" => "Cyriak",
           "age" => "27",
           "ville" => "Inconnue",
           "passions" => "jv, séries, mangas"
        ],

    13 => ["nom" => "Dorchies",
           "prenom" => "Stevens",
           "age" => "23",
           "ville" => "Floyon",
           "passions" => "south park,jeux video,manga"
    ],

    14 => ["nom" => "Meunier",
           "prenom" => "Lubin",
           "age" => "30",
           "ville" => "Marcy-sous-marle",
           "passions" => "manger des gateaux, des bonbons et boire du chocolat chaud"
    ],

    15 => ["nom" => "Caron",
           "prenom" => "Gregory",
           "age" => "40",
           "ville" => "Fourmies",
           "passions" => "Passions: JV, Informatique, la vie"
        ]
]

?>

<ul>

    <?php

    foreach ($monTableau as $toto){

        foreach ($toto as $key2 => $value2) {

            ?>

        <li><?=$key2.  " : "  .$value2."<br><br>";?></li>

    <?php

        }
    }

    ?>


</ul>
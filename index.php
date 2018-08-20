<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice 2</title>
    </head>
    <body>
        <p>
            <?php
            //Création d'une condition si le paramètre âge existe
            if (!empty($_GET['lastname']) && !empty($_GET['firstname']) && !empty($_GET['age'])) {
                echo $_GET['lastname'] . ' ' . $_GET['firstname'] . ' ' . $_GET['age'];
            } else {
                //Autre condition si le paramètre age n'est pas présent
                echo 'Il manque l\'âge';
            }
            ?>
        </p>
    </body
</html>

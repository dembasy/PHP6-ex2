<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice 6</title>
    </head>
    <body>

        <p>
            <?php
            //grâce a la condition on va pouvoir verifier si l'age est definie sinon on affiche le message d'erreur 
            if (isset($_GET['age'])) {
                echo $_GET['age'];
            } else {
                echo 'enter age please';
            }
            ?>

        </p>
    </body
</html>

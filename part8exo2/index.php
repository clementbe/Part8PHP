<?php
//initialisation de la session
session_start();
//initialisation de 3 variables dans la session.
$_SESSION['prenom'] = 'Clément';
$_SESSION['nom'] = 'Benoit';
$_SESSION['age'] = 19;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo2p8</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="align">
            <a href="../part8exo1/index.php"><button class="button">Exercice 1</button></a>
            <a href="../part8exo2/index.php"><button class="button">Exercice 2</button></a>
            <a href="../part8exo3/index.php"><button class="button">Exercice 3</button></a>
            <a href="../part8exo4/index.php"><button class="button">Exercice 4</button></a>
            <a href="../part8exo5/index.php"><button class="button">Exercice 5</button></a>
        </div>
        <div class="php">
            <!-- Bouton pour envoyer sur la 2eme page-->
            <a href="user.php"><button>Changez</button></a>
        </div>
    </body>
</html>
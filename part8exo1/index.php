<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo1p8</title>
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
            <?php
            echo 'L\'user agent est ' . $_SERVER['HTTP_USER_AGENT'];
            ?>
            <br/>
            <hr/>
            <?php
            echo 'L\'adresse ip est ' . $_SERVER['REMOTE_ADDR'];
            ?>
            <br/>
            <hr/>
            <?php
            echo 'Le nom du serveur est ' . $_SERVER['SERVER_NAME'];
            ?>
        </div>
    </body>
</html>
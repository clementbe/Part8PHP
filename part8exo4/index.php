<?php
//si les parametre existe il créer les cookies!
if (isset($_GET['pseudo']) && isset($_GET['motPasse'])) {
    setcookie('pseudo', $_GET['pseudo'], time() + 365 * 24 * 3600, null, null, false, true); // On écrit un cookie Pseudo
    setcookie('password', $_GET['motPasse'], time() + 365 * 24 * 3600, null, null, false, true);  // On écrit un cookie password
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo4p8</title>
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
            <form action="index.php" method="get">
                <label for="pseudo">Pseudo: <input type="text" name="pseudo" placeholder="Pseudo" value="" /></label><br/>
                <label for="motPasse">Mot de passe: <input type="password" name="motPasse" placeholder="Mot de passe" value="" /></label>
                <input type="submit" name="connexion" value="Connexion" />
            </form>
            <?php 
            if(isset($_COOKIE['pseudo']) && isset($_COOKIE['password'])){
                echo 'votre pseudo est ' . $_COOKIE['pseudo'] . 'et votre mot de passe' . $_COOKIE['password']; 
            }
            ?>
        </div>
    </body>
</html>
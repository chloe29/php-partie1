<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // initialisation
       $lastName = 'Dupont';
       $firstName = 'Jean';
       $age = 25;
        // affichage
    //    echo 'Il s\'appelle ' . $lastName . ' ' . $firstName . ' il a ' . $age . ' ans.';
    ?>
    <p>Il s'appelle <?= $lastName . ' ' . $firstName ?> il a <?= $age ?> ans</p>
</body>
</html>
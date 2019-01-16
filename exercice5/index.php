<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // null est utilisé lorsqu'une variable ne renvoie rien
        $var_int = null;
        echo 'La variable est nulle donc :' . $var_int;
        $var_int = 10;
        echo ' La variable n\'est plus nulle :' . ${$var_int};

        // autre facon : variables dynamiques
        // une variable dynamique prend la valeur d'une variable et l'utilise comme nom d'une autre variable
        // $var_int a comme valeur nul et $null a comme valeur 10
        $var_int = null;
        echo 'La variable est nulle donc :' . $var_int;
        $$var_int = 10;
        echo ' La variable n\'est plus nulle :' . ${$var_int};
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="css/grèce.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <form action="" method="get">
        <label for="largeur">Saisir une largeur:</label>
        <input type="text" name="largeur" >

        <label for="password">Saisir une hauteur:</label>
        <input type="text" name="password" >

        <input type="submit" value="connexion" >
    </form>
    <p></p>
    <pre>
<?php

$hauteur= 5;
//Boucle total de ligne (Horisontal)
for ($i = 0; $i < $hauteur; $i++)
{
// Boucle des espaces, on retire 1 espace a
// chaque fois qu'on dessens d'une ligne
// exemple
// 1er ligne : $k = ($hauteur - $i) = 5 = (5 - 0)
// 2eme ligne: $k = ($hauteur - $i) = 4 = (5 - 1)
// 3eme ligne: $k = ($hauteur - $i) = 3 = (5 - 2)
// Insi de suite jusqu'a 0
    // for ($k = ($hauteur  - $i); $k > 0; $k--)
    // {
    //     echo "-";
    // }
    $k = ($hauteur  - $i);
    while($k > 0)
    {
        echo "&nbsp";
        $k--;
    }

    // for ($k = ($hauteur + $i); $k > 0; $k--)
    // {
    //     echo "-";
    // }
// Bloucle d'etoiles on ajoute au fur et a mesure
// 1er ligne : $z <= $i = 0 <= 0 (Donc on en met une )
// 2eme ligne: $z <= $i = 0 <= 1 (Donc on en met deux )
// et insi de suite a chaque fois $z doit etre pareil que $i
    for($z=0; $z  <= $i; $z++)
    {
        echo "_";
    }
    echo "\<br />";

    // for($z=0; $z  > $i  ; $z++)
    // {
    //     echo "_";
    // }
    // echo "/<br />";
}


?>
</pre>
  </body>
</html>

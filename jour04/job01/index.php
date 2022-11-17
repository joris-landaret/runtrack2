<?php

var_dump($_GET);

$compt=0;

foreach($_GET as $result){
    $compt++;
}

echo "Le nombre d’argument GET envoyé est :  $compt";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="css/grèce.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <form action="" method="get">
        <label for="nom">Quel est votre nom:</label>
        <input type="text" name="nom" >

        <label for="prenom">Quel est votre prenom:</label>
        <input type="text" name="prenom" >

        <label for="age">Quel est votre age:</label>
        <input type="text" name="age" >

        <input type="submit" value="Envoyer" >
    </form>

  </body>
</html>
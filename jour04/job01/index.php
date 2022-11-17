<?php

var_dump($_GET)

$i=0;

while (isset($_GET[$i]);){
    echo $_GET[$i]
    $i++;
}
echo "Le nombre d’argument GET envoyé est : $i";
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
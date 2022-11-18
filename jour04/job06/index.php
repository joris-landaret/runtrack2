<?php

var_dump($_GET);

if($_GET['nombre'] % 2 == 0){
    echo "“Nombre pair”";
}
else {echo "“Nombre impair”";}

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
        <label for="nombre">veuillez saisir un nombre:</label>
        <input type="text" name="nombre" >

        <input type="submit" value="Envoyer" >
    </form>

  </body>
</html>
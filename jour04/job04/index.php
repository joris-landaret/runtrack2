<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="css/grèce.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <form action="" method="post">
        <label for="nom">Quel est votre nom:</label>
        <input type="text" name="nom" >

        <label for="prenom">Quel est votre prenom:</label>
        <input type="text" name="prenom" >

        <input type="submit" value="Envoyer" >
    </form>
    <table border=3>

<thead>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
        
    </tr>
</thead>






<?php

var_dump($_POST);


foreach($_POST as $key => $result){
    echo "
    <tr>
                <td>$key</td>
                <td>$result</td>
                
            </tr>";
   
}



?>


    </table>
  </body>
</html>
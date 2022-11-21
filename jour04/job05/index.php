

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
    <link href="css/grèce.css" rel="stylesheet" type="text/css">
  </head>

  <body>

    <form action="" method="post">
        <label for="username">Quel est votre username:</label>
        <input type="text" name="username" >

        <label for="password">Quel est votre mot de passe:</label>
        <input type="text" name="password" >

        <input type="submit" value="connexion" >
    </form>
    <p></p>
  </body>
</html>

<?php

var_dump($_POST);

    if($_POST['username'] == "John" && $_POST['password'] == "Rambo"){
        echo "“C’est pas ma guerre”";
    }
    else{echo "“Votre pire cauchemar”";}

?>
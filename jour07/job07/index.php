<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire</title>
  </head>

  <body>
    <section>
        <form action="" method="post">
            <input type="text">
            <label for="style-select">function ?</label>
            <select name="fonction">
                <!--<option value="">--choisis un Style--</option>-->
                <option value="gras">gras</option>
                <option value="cesar">cesar</option>
                <option value="plateforme">plateforme</option>
            </select>
            <button type="submit">envoyer</button>
        </form>
        <p></p>
    </section>
  </body>
</html>
<?php

var_dump($_POST);

foreach($_POST as $key => $value){
  if($value == 'gras'){
    echo gras($_POST);
  }
  elseif($value == 'cesar'){
    echo cesar($_POST);
  }
  else{
    echo plateforme($_POST);
  }
}

function gras($str){
  
}

?>
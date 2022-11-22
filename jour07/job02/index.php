<?php

$a = true;
$b = false;

function bonjour($jour){
    if($jour == true){
        echo "Bonjour";
    }
    else{
        echo "Bonsoir";
    }
}

bonjour($a);
echo '<br>';
bonjour($b);

?>
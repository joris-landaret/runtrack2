<?php

$x = 0;

echo "2<br>";

while ( $x <= 1000) {
    $x++;
     
    for ($i = 2; $i <= $x; $i++){
    
        if ( ($x % $i) == 0 ){break;} // si x divisible par i alors il n'est pas premier et on ne veut pas l'aficher
        if ($i == ($x-1)){ echo "$x<br>";}
        
    }
    
}

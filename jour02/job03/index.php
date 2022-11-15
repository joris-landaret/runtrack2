<?php

$x = 0;

while ( $x <= 100) {
    
    if ( $x >= 0 && $x <= 20 ){
        echo "<i>$x</i>";
        }

    else if ( $x == 42 ){
        echo "“La Plateforme_”";
    }

    else if ( $x >= 25 && $x <= 50 ){
        echo "<u>$x</u>";
    }

    else{
        echo $x;
    }

    echo "<br>";
    $x++;
}

?>
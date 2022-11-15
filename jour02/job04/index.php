<?php

$x = 0;

while ( $x <= 100) {
    
    if ( $x % 3 == 0 && $x % 5 == 0 ){
        echo "“FizzBuzz”";
        }

    else if ( $x % 3 == 0 ){
        echo "“Fizz”";
    }

    else if ( $x % 5 == 0 ){
        echo "“Buzz”";
    }

    else{
        echo $x;
    }

    echo "<br>";
    $x++;
}

?>
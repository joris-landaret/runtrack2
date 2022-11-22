<?php

$nbr1 = 25;
$plus = '-';
$nbr2 = 11;


function calcul($a,$operation,$b){
    if($operation == '+'){ return $a+$b;}
    elseif($operation == '-'){ return $a-$b;}
    elseif($operation == '*'){ return $a*$b;}
    elseif($operation == '/'){ return $a/$b;}
    elseif($operation == '%'){ return $a%$b;}

}

echo calcul($nbr1,$plus,$nbr2);

?>
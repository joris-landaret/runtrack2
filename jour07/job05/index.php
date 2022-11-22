<?php

$bonjour = 'Bonjour comment tu vos ?';
$o = 'o';

function occurrences($str, $char){
    $x = 0;
    for ($i=0; isset($str[$i]); $i++) { 
        if($str[$i] == $char){
            
            $x = $x+1;
            
        }
        
    }

return $x;
}

echo occurrences($bonjour, $o);

?>
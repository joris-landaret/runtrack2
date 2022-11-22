<?php

$chain = 'Un lion averti en vaut deux';


function leetSpeak($str){
    $minus = ['a','b','e','g','l','s','t'];
    $maj = ['A','B','E','G','L','S','T'];
    $integer = [4,8,3,6,1,5,7];

    // parcour la chaine de charactère de $str
    for ($i=0; isset($str[$i]) ; $i++) { 
        // je créé un compteur pour mes trois tableaux
        for ($x=0; $x < 7; $x++){
            // je regarde que dans la chain
            if($str[$i] == $minus[$x] || $str[$i] == $maj[$x]){
                $str[$i] = $integer[$x];

                // var_dump($minus[$x]);
                // var_dump($str[$i]);
            }
        }
        //var_dump($str);
    }
    
    return $str;
}

echo leetSpeak($chain)

?>
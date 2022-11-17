<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = ['consonnes','voyelles'];

$i = 0;

while(isset($str[$i])){
    
    
    if($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'O' || $str[$i] == 'o' || $str[$i] == 'u' || $str[$i] == 'y' )
        {}//echo $str[$i];

    $i++;
}

echo "
    <table>

        <thead>
            <tr>
                <th>$dic[0]</th>
                <th>$dic[1]</th>
                
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>booléen</td>
                <td>$str[$i]</td>
                
            </tr>

    </table>";

?>
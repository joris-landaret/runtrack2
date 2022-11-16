<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait"

$dic = ['consonnes','voyelles']

$i = 0;

while(isset($str[$i])){
    
    
    if($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'O' || $str[$i] == 'o' || $str[$i] == 'u' || $str[$i] == 'y' )
        echo $str[$i];

    $i++;
}

echo "
    <table>

        <thead>
            <tr>
                <th>consonnes</th>
                <th>voyelles</th>
                
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>booléen</td>
                <td>\$boolean</td>
                
            </tr>

    </table>";

?>
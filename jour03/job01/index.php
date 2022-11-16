<?php

$table = [200, 204, 173, 98, 171, 404, 459];

for($i = 0; $i < 7; $i++){
    if($table[$i] % 10 == 1 || $table[$i] % 10 == 3 || $table[$i] % 10 == 5 || $table[$i] % 10 == 7 || $table[$i] % 10 == 9)
        {echo "$table[$i] est impaire<br />";}
    else{echo "$table[$i] est paire<br />";}
} 

?>
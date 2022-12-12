<?php

$str = "certaines chose changent, et d'autres ne changeront jammais";
$newstr = "";
//$tmp = '';
for($i=0; isset($str[$i]);$i++){
    echo$str[$i] . '<strong><br>';
    var_dump($str[$i]);
    $newstr= $newstr . $str[$i]; // ou $newstr= $newstr . $str[$i]
}

$newstr .= $str[0];
var_dump($newstr);
?>

//for ($i =$i; isset($str[$si];i++)
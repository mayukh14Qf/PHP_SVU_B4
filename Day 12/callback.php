<?php

function name_one($var){
    return $var*3;
}
function name_two($var){
    return $var*2;
}

function name_three($var,$func){
    $var=$var*5;
    echo $func($var);
}

name_three(10,"name_one");


?>
<?php

// It is Pass By Value , Which will make an carbon copy of the variable which is passed as argument.

function name($var){
    $var=10;
}

// It is Pass By Reference , Which will take the address of the variable which is passed as argument.

function name_one(&$var){
    $var=10;
}

$a=55;
name($a);
echo $a;

echo "<br>";
$b=23;
name_one($b);
echo $b;

?>
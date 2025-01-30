<?php

$deimal_number=11;
$binary="";

while($deimal_number>0){
    $binary=$binary.(string)($deimal_number%2);
    $deimal_number=(int)($deimal_number/2);
}
echo "Your Binary Number is ". strrev($binary);

?>
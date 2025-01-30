<?php

$binary_number=1011;
$decimal=0;

$count=0;
while($binary_number>0){
    $decimal=$decimal+(pow(2,$count)*($binary_number%10));
    $count ++;
    $binary_number=$binary_number/10;
}

echo "Your Decimal Conversion Is : $decimal";


?>
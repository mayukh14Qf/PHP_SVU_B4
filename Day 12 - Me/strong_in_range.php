<?php
error_reporting(E_ERROR | E_PARSE);
function fact($n, &$mem_arr): int
{
    if($n <= 1){
        return 1;
    }
    if($mem_arr[$n] == 0)
    {
        $mem_arr[$n] = $n * fact($n-1, $mem_arr);
    }
    return $mem_arr[$n];
}

function isStrong($number): bool
{
    $FACTORIAL_REMEMBER[100] = array_fill(0, 100,0);
    $sum = 0;
    $rem = 0;
    $tmp = $number;
    while($tmp != 0){
        $rem = $tmp%10;
        $sum += fact($rem, $FACTORIAL_REMEMBER);
        $tmp = (int)($tmp/10);
    }
    return ($sum == $number);
}
$sample = range(1, 40586);
foreach($sample as $ele){
    if(isStrong($ele)){
        echo $ele . "<br>";
    }else{
        // echo $ele . " not strong :( <br>";
        continue;
    }
}
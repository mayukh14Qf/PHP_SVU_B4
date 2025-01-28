<?php


function factorial($num){
    $store=1;
    for($i=1;$i<=$num;$i++){
        $store=$store*$i;
    }
    return $store;
}


function strong_check($num){
    $temp=$num;
    $store=0;
    while($temp>0){
        $store=$store+factorial($temp%10);
        $temp=(int)($temp/10);
    }
    if($store==$num){
        return 1;
    }
    return 0;
}

// Body

$range=200;

for($i=1;$i<=200;$i++){
    if(strong_check($i)==1){
        echo "$i is Strong Number <br>";
    }
 }

?>
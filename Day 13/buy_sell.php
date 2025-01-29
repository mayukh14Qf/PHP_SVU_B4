<?php

$price_array=[11,10,9,50,6,7];
 
$profit_margin=PHP_INT_MIN;
$buy_day=0;
$sell_day=0;

for($i=0;$i<count($price_array);$i++){
    for($j=$i+1;$j<count($price_array);$j++){
        if($profit_margin<($price_array[$j]-$price_array[$i])){
            $profit_margin=$price_array[$j]-$price_array[$i];
            $buy_day=($i+1);
            $sell_day=($j+1);
        }
    }
}

echo "$profit_margin is the max profit if we buy on day $buy_day and sell on $sell_day";








?>
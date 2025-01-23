<?php


$string1="mayukhjit";

$store="";


for($i=0;$i< strlen($string1);$i++){
    $store=$store . (string)(ord($string1[$i])-96) . " ";
}
echo $store;




?>
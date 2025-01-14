<?php


// Remove Duplications from an Array

$arr1=array(2,3,1,2,5,8,3,5);

//Php Wala Method

$arr2=array_unique($arr1);
echo "<br>";
var_dump($arr2);
echo "<br>";

// Normal Method

$new_arr=[];

foreach($arr1 as $ele){
    if(!in_array($ele,$new_arr)){
        $new_arr[]=$ele;
    }
}
echo "<br>";
var_dump($new_arr);
echo "<br>"


?>
<?php

// Declaration Of 2-D Array

$arr1=array(
    array(23,45,67),
    array(45,78)
);
var_dump($arr1);

echo "<br>";
echo $arr1[0][2];
echo "<br>";


//Decaration Of 3-D Array

$arr2=array(
    array(array(3,6,8,9),array(23,45,78)),
    array(array(45,67,"mayukh"))
);

echo "<br>";
echo $arr2[0][1][2];
echo "<br>";

//


$arr3=array(
    "a"=>array("mayukh"=>23,"ritesh"=>45,"raju"=>67),
    "b"=>array("saneha"=>45,"riya"=>78)
);
var_dump($arr3);

echo "<br>";
echo $arr3["a"]["mayukh"];
echo "<br>";


// check Anagram

$word1="CLEAR";

echo strtolower($word1);




?>
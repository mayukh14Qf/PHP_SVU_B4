<?php

// Declaration 
$arr1= [12,34,56,78,90];

// echo $arr1; // THIS IS NOT POSSIBLE

for ($i=0; $i<=4;$i++){
    echo $arr1[$i]." ";
}
echo "<br>";
// Dynamic in nature
$arr2=[12,34.89,"h","Mayukhjit","60"];

for ($i=0; $i<=4;$i++){
    echo $arr2[$i]." ";
}

// Only For Php

$arr3=array(34.57,34,67,32,77);
echo "<br>";
for ($i=0; $i<=4;$i++){
    echo $arr3[$i]." ";
}

// Length Of An Array
echo "<br>";
echo count($arr3);


// For each Loop 


$arr4=array(45,9,89,34,23);
echo "<br>";
foreach($arr4 as $ele){
    echo $ele ." ";
}


echo "<br>";

// It will the whole array in a single view with all the details
var_dump($arr4);
echo "<br>";

// Operations in Array 
$arr5=array(45,67,7,6,9,48);

// Fetch the elements
echo $arr5[2];

// Access(update) the Elements
$arr5[2]="mayukhjit";
var_dump($arr5);

//adding new value

$arr5[]=67.90;
echo "<br>";
var_dump($arr5);

// deleting from an array

array_splice($arr5,3,2);//2 elements will be deleted from index no 3 
echo "<br>";
var_dump($arr5);

// Sorting

$arr6=array(34,6,8,2,67,90,1);
//Ascending order
sort($arr6);
echo "<br>";
var_dump($arr6);

//Decending order
rsort($arr6);
echo "<br>";
var_dump($arr6);


//Ascii A->65 , a->97 
$arr7=array("mayukh","Apple","apple","aan","angry","purple","ben");
sort($arr7); // it will be sorted in lexicographically ,manner in terms of its own ascii value
echo "<br>";
var_dump($arr7);

// 0-9 ->48
$arr8=array("apple","a","A","Apple","aan","aAn","Ana",23,60.34,60,67);
sort($arr8);
echo "<br>";
var_dump($arr8);

?>
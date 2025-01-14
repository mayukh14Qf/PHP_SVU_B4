<?php

// Associative Array
// Declaration

$arr3=[0=>45,1=>56,6=>56];

echo "<br>";
var_dump($arr3);
echo "<br>";

$arr4=array("Subhajit"=>184,"priti"=>24,"subha"=>33,"abc"=>24);
echo "<br>";
var_dump($arr4);
echo "<br>";

//looping

foreach($arr4 as $k=>$v){
    // echo "Your key is : ".$k."<br>" ;
    echo "Your value is : ".$v."<br>";
}

// Operation

//Fetching A value
echo $arr4["subha"];

//access/update
$arr4["subha"]=45;
echo "<br>";
var_dump($arr4);
echo "<br>";

//adding
$arr5=array("Subhajit"=>184,"priti"=>24,5=>33,"abc"=>24);
$arr5[]=67;
// If I insert a value without key then it will be consider our key as the next integer value if any key integer is present , else it will consider 0 as it's key 
$arr5["mayukhjit"]=49;
echo "<br>";
var_dump($arr5);
echo "<br>";

// deleteing

unset($arr5["mayukhjit"]); // key will be given
echo "<br>";
var_dump($arr5);
echo "<br>";


// sorting
//Ascending order
asort($arr5); // through values
echo "<br>";
var_dump($arr5);
echo "<br>";

ksort($arr5);
echo "<br>";
var_dump($arr5); //through key
echo "<br>";


//Decending Order
arsort($arr5); // through values
echo "<br>";
var_dump($arr5);
echo "<br>";

krsort($arr5);
echo "<br>";
var_dump($arr5); //through key
echo "<br>";

?>
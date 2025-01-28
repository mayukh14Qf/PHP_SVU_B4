<?php


// define

// non paramterized
function name_one(){
    echo "Your Name is : Mayukhjit Chakraborty";
}
//paramerized
function name_two($var){
    echo "Your age is ".$var;
}

// when it returns

function name_three(){
    return "MY NAME IS MAYUKHJIT";
}

function name_four($var1,$var2){
    return $var1+$var2;
}


function name_five($value,$func){
    $func($value);
}

// call
name_one();
echo "<br>";
name_two("xii");
echo "<br>";
name_two(23);
echo "<br>";
$var=name_three();
echo $var;
echo "<br>";
$sum=name_four(23,27);
echo $sum;
 



?>
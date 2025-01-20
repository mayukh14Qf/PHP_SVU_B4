<?php

// Declaration
$var1="Mayukhjit Chakraborty";
$var2='mayukhc55@gmail.com';
$var3='mayukhjit2001_<br>'; // BR IS ALSO INCLUDED

echo $var1;
echo "<br>";
echo $var2;
echo "<br>";
echo $var3;
echo "<br>";

echo strlen($var2);
echo "<br>";
echo strlen($var3);
echo "<br>";

//accessing the individual chars
echo $var1[6]."<br>";


// length of a String

echo strlen($var1)."<br>";
echo strlen($var3)."<br>";

//concatenation

$var4=$var1." ".$var3; // It is like "+" in other programming
echo $var4;

echo "<br>";
echo "1"."4"; //14
echo "<br>";
echo 1.4; //1.4
echo "<br>";


// . and "." 

// echo "<br>";
// echo "1".4; //error
// echo "<br>";
// echo 1."4"; //error

echo "<br>";
echo "1",8;
echo "<br>";
echo 1,"4";
echo "<br>";
echo 1,4;
echo "<br>";
echo "mayukhjit"
,
34,
"2001_"
;
echo "<br>";


// echo "1".".8".3; // error
// echo "<br>";
// echo "1".".8".".3"; //1.8.3 
// echo "<br>";
// echo "1".8.3; // Error
// echo "<br>";
// echo "1".8."3"; // Error
// echo "<br>";


//UPPER CASE AND LOWER CASE
$str1="MayuKhJit";
echo "<br>";
echo strtoupper($str1);
echo "<br>";
echo strtolower($str1);
echo "<br>";

// ARRAY TO STRING
$arr1=["may","abc","xyz"];
$arr_to_str=implode("-",$arr1);
echo "<br>";
echo $arr_to_str;
echo "<br>";


// STRING TO ARRAY
$str_to_arr=explode(" ","MY NAME IS MAYUKHJIT");
var_dump($str_to_arr);
echo "<br>";

//String to Array for each characters
$sta_indi=str_split("mayukhjit");
var_dump($sta_indi);


// REPLACE
$str3="Mayukhjit Chakraborty php python";
echo str_replace("php","java",$str3);


//REVERSE
echo "<br>";
echo strrev($str1);
echo "<br>";
//Word Count
$str2="abc st tyu";
echo str_word_count($str2);
echo "<br>";

?>
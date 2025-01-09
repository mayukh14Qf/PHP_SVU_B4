<?php

// Count Number of digits

$num1=345;
$count1=0;

while($num1>0){
    $count1 =$count1+1;
    $num1=(int)($num1/10);
}

echo $count1;
echo "<br>";




// Factorial of a number

$num2=4;

$fact1=1;

for($i=1;$i<=$num2;$i++){
    $fact1=$fact1*$i;
}

echo $fact1;
echo "<br>";



// Swap 2 number without 3rd variable


$num1=10;
$num2=20;


$num1=$num1 + $num2;
$num2=$num1-$num2;
$num1=$num1 - $num2;

echo "1st num is $num1 <br> 2nd num is $num2 <br>";




// prime Number


$num4=7;
$prime_count=0;

for($i=1;$i<=$num4;$i++){
    if($num4%$i==0){
        $prime_count ++;
        echo "$i ";
    }
}
echo("<br>");
if($prime_count==2){
    echo "It is a Prime Number <br>";
}
else{
    echo "It is not a Prime Number <br>";
}




//Fibonacci Series

$user_position=7;

$position_1=0;
$position_2=1;
echo "0 1 ";

for($i=3;$i<=$user_position;$i++){

    $c=$position_1+$position_2;
    echo "$c ";
    $position_1=$position_2;
    $position_2=$c;
}



//Take 2 number and compare the last digit of these numbers and print the bigger one

$num3=3456;
$num4=4567;

$last1=($num3%10);
$last2=($num4%10);

if($last1>$last2){
    echo $last1;
}
else{
    echo $last2;
}



// Reverse A Number 


$temp1=1258;
$rev=0;

while($temp1>0){
    $rev=($rev*10)+($temp1%10);
    $temp1=(int)($temp1/10);
}

echo "<br> $rev";

?>


<?php
function hello(){
    echo "Job Started!<br>";
}

function bye(){
    echo "Job Done! Bye!<br>";
}

function drawHoriz(){
    for($i = 0; $i < 20; $i++){
        echo "-";
    }
    echo "<br>";
}

function sum($a, $b, $greet1, $greet2){
    $greet1();
    echo "Sum of $a and $b is: " . ($a + $b) . "<br>";
    $greet2();
    drawHoriz();

}
$i=0;
while($i <= 10){
    $a = random_int(0,69);
    $b = random_int(0,69);
    sum($a, $b, "hello", "bye");
    $i++;
}
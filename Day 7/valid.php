<?php

// Request 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number=$_POST["number"];
}
else{
    $number=$_GET["number"];

    if(array_key_exists("skills",$_GET)){
        $skill=$_GET["skills"];
        foreach($skill as $ele){
            echo "your skill is : $ele <br>";
        }
    }

    $count=1;
    foreach($number as $ele){
        if(!empty($ele)){
            echo "Your $count Number is $ele <br>";
            $count++;
        }
    }

}


// echo "The Number is : $number";

// $number1= "45";
// $number1=89;

// $number1[]=89;
// $number1[]=67;


?>

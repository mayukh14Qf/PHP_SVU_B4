<?php


$user=$_GET["username"];
$pass=$_GET["password"];

if($user==$pass){
    echo "HI, $user Wicome to the page";
}

else{
    header("location:login.php?id");
}


// $str1="mayukhjit";
// $str2="mayukhjit";

// if($str1==$str2){
//     echo "matched";
// }
// else{
//     echo "better luck";
// }

// echo "<br>";
// $var=strcmp($str1,$str2);
// echo $var;


?>
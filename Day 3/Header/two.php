<?php


$id1=$_GET["id"];
$pass1=$_GET["pass"];

if($id1=="" || $pass1==""){
    header("location:three.php?school=SXI"); // it will be automaticallyredirected to the page 3
}
else{
    echo "We are in page two <br>";
    echo " hello :)) $id1 and your password is $pass1 ";
}


?>
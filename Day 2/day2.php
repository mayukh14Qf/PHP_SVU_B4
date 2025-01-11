<?php




$id1=$_GET["name"];
$password1=$_GET["password"]; // here the password as same the html name="password

$email1=$_GET["email"];

// $id1=$_POST["name"];
// $password1=$_POST["password"]; // here the password as same the html name="password

// $email1=$_POST["email"];

if($password1=="" || $id1==""){
    echo " you have not Submitted all the datas <br>
    <a href='index.html'>HOME PAGE</a>
    
    ";
}

else{
    echo "You have succussfully submitted the form <br> <br>";
echo
"
your name is : $id1 <br> 
your password is : $password1 <br>
your email is : $email1 
";

}



?>
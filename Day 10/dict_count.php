<?php

$string1="aaabbbccd";
$strore="";

for($i=0;$i<strlen($string1);$i++){
    $count1=1;
    while($i<(strlen($string1)-1) && $string1[$i]==$string1[$i+1]){
        $count1 ++;
        $i++;
    }

    $strore = $strore . $string1[$i] . (string)($count1);

}

echo $strore;

?>
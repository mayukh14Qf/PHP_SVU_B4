<?php
$word="helelhoe";

$arr1=str_split($word);
sort($arr1);

for($i=0;$i<count($arr1);$i++){
    $count1=1;
    while($i<(count($arr1)-1) && $arr1[$i]==$arr1[$i+1]){
        $count1 ++;
        $i++;
    }
    echo "frequency of ". $arr1[$i]." is $count1 <br>";
}

?>
<?php

$word1 = "liten";
$word2 = "silent";

$word_to_array1= str_split(strtolower($word1));
$word_to_array2= str_split(strtolower($word2));

sort($word_to_array1);
sort($word_to_array2);

if($word_to_array1 == $word_to_array2){
    echo "The words are anagram";
}
else{
    echo "The words are not anagram";
}
?>
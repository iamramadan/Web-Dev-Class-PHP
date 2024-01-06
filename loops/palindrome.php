<?php
function checkPalindrome(Array $words){

   foreach($words as $index=>$word){
    # code...
    $n = (is_int($index))? $index + 1 : $index;
    echo "Checking word {$n} ({$word}) <br>";
    $collectString = $word;
    $pallindrome = strrev($collectString);
    if ($collectString == $pallindrome) {
        # code...
        echo "$collectString is a pallindrome".'<br>';
        echo $collectString."||".$pallindrome.'<br>';
    }
   }
}
$assoc_array = ['animal'=>'cat','owner'=>'Ramadan','buyer'=>'mum'];
$words = ['cat','pup','mum','Dog'];
checkPalindrome($assoc_array);
?>
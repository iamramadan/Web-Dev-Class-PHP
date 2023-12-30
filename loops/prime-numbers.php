<?php
/*PROBLEM
Write a PHP script to check and print all the prime numbers
between 1 and 50 using nested loops. You might want to use a
combination of loops to achieve this.
*/

#SOLUTION
$min = 2;
$max = 50;
//Outer loop to go through the number range min - max (1 - 50)
for ($num = $min; $num <= $max; $num++ ){
    $is_prime = true;
    //Inner loop to check for prime numbers
    for($j = 2; $j <= $num / 2; $j++ ){
        if($num % $j == 0){
            $is_prime = false;
            break;
        }
    }
    echo $is_prime ? "$num " : '';
}
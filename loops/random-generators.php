<?php
/**
 * PROBLEM:
 * Write a PHP script using a do-while loop to generate a random number between 1 and 10 and continue generating numbers until it reaches 7.
 */

#SOLUTION
$iteration_count = 7;
do{
    echo rand(1,10)."<br>";
    $iteration_count--;
} while ($iteration_count > 0);
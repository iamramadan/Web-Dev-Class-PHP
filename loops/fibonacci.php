<?php
/*PROBLEM 2: 
Create a PHP script that uses a while loop to print the Fibonacci series up to a 30th terms. The Fibonacci sequence starts with 0 and 1, and each subsequent number is the sum of the two preceding ones. 

For example:
0, 1, 1, 2, 3, 5, 8, 13, ...
*/
echo "<br><br>";
# SOLUTION 2:
$num1 = 0;
$num2 = 1;
$counter = 0;
while ($counter <= 30){
    echo $counter == 30 ? $num1 : $num1.",  ";
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
    $counter++;
}
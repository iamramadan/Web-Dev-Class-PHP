<?php
/* Problem 1:
Write a PHP script to calculate the sum of even numbers from 1 to 50 using a for loop.
*/

#SOLUTION
$sum = 0;
for($counter = 1; $counter <= 50; $counter++){
    //determin if the number is even (No remainder when divided by 2)
    if($counter % 2 == 0){
        //echo "<br>$sum + $counter = ".($sum + $counter);
        $sum += $counter;
    }
}
echo "Solution 1: The sum of Even numbers from 1 to 50 is <b>$sum</b>";
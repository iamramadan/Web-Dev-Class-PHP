<?php
/*
PROBLEM:
Build a PHP script that generates the multiplication table for numbers 1 through 5, each up to 10. Use nested loops to achieve this.
*/
#SOLUTIONS
$max_range = 5;
$min_range = 1;
$max_multiples = 10;
//outerloop for number iterations
for ($num = $min_range; $num <= $max_range; $num++){
    //Inner loop for multiplications
    echo "<h2>$num Multiples</h2>";
    for($m = 1; $m <= $max_multiples; $m++){
        $prod = $num * $m;
        echo "$num x $m = $prod <br>";
    }
    //Add extra space after each mulitples
    echo "<br>";
}
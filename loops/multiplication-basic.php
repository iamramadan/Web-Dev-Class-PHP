<?php
/*
  Create a PHP script that generates the multiplication table (up to 10) for a given number using a for loop. For example, if the input number is 5, the output should display:
    5 x 1 = 5
    5 x 2 = 10
    ...
    5 x 10 = 50
 */

#SOLUTION
function multiples($input){
  for ($num = 1; $num <= 10; $num++){
    $prod = $input * $num;
    echo "$input x $num = $prod <br>";
  }
}

multiples(10);
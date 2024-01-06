<?php
/*
Exercise 1: Pattern Printing 
Create a PHP script to print the following pattern using nested loops:

*
* *
* * *
* * * *
* * * * *
*/
function symbolprinter($symbol,$maxamount){
    $it = '';
    $y = '';
    $x = '';
    for ($i=0; $i <= $maxamount; $i++) { 
        $x = $symbol;
        $it = $x.$y;
        $y = $it;
        echo "<b style='color: white; background-color:#fe08ea;margin-top:0px;padding:3px;'>$y</b>".'<br>';

    }
}
symbolprinter("*",10);
?>

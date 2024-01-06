<?php
$array2 = [];
$array2[] = 'maths';
$array2[] = 'sqauare';
$array2[2]['tens'] = [10,20,30,40,50];
$array2[2]['hundreds'] = [100,200,300,400,500];
$array2[2]['thousands'] = [1000,2000,3000,4000,5000];
$array2[][] = ['Ten','Twenty','Thirty','Forty','Fifty'];
$array2[][] = ["+","-",'/','*'];

array_change_key_case($array2[2], CASE_UPPER);

$keys = array_keys($array2[2]);
$values = array_values($array2[2]);
// echo implode('<br>',$keys);
echo '<br>';
// echo json_encode($values);

//Merge some part of the array
$mArray = array_merge($array2[2]['tens'],$array2[2]['hundreds'],$array2[2]['thousands']);
echo implode('| ',$mArray);

$newArray = [];
array_push($newArray,1,2,3,4,4,5,6,7,7,7,8,5,4,3,22,3,4,5,);
// echo implode(', ',$newArray);
// echo "<br>";
$removed = array_pop($newArray);
// echo implode(', ',$newArray);
// echo "<br>".$removed;

//define a function to filter our merged array
function mfilter($val){
    return in_array($val,[50,500,5000]);
}
$fArray = array_filter($mArray,"mfilter");
echo "<br>".implode(' | ',$fArray);
$aProd = array_product($fArray);
echo "<br> the product of ".implode(',',$fArray)." is = ".number_format($aProd,2);
extract($array2[2]);

$thousands = implode(' | ',$thousands);
echo "<br> This is new thousands: $thousands";
//convert thousands back to array
$thousands = explode('|',$thousands);
print_r($thousands);
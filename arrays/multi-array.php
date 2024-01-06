<?php
$assoc_array = [
    'animal'=>'cat',
    'owner'=>'Ramadan',
    'buyer'=>'mum'
];//associative array

$words = ['cat','pup','mum','Dog']; //Indexed array

//multidimensional array
$array1 = [
    'number'=> [10,20,30,40,50],
    'words' => ['Ten','Twenty','Thirty','Forty','Fifty'],
    'maths',
    'square',
    'operators' => ["+","-",'/','*'],
    'name'=> 'Ramadan'
];

$array2 = [];
$array2[] = 'maths';
$array2[] = 'sqauare';
$array2[]['number'] = [10,20,30,40,50];
$array2[][] = [100,200,300,400,500];
$array2[][] = [1000,2000,3000,4000,5000];
$array2[][] = ['Ten','Twenty','Thirty','Forty','Fifty'];
$array2[][] = ["+","-",'/','*'];

$array3 = [
    'maths',
    'square',
    ['number' => [10,20,30,40,50]],
    [[100,200,300,400,500]],
    [[1000,2000,3000,4000,5000]],
    [['Ten','Twenty','Thirty','Forty','Fifty']],
    [[["+","-",'/','*']]]

];
$array3[4][0][0] = '10,000';

$response = json_encode($array3);
echo $response;
// echo "<script> const data = {$response} </script>";
// echo $array3[4][0][0];
// echo implode(', ',$array2[4][0]);
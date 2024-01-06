<?php
session_start();
$a = "Hello world";
//Some global variables
/*
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/


echo implode(', ',array_keys($GLOBALS))."<br>";
var_dump($GLOBALS['argv']);


echo '<h3>$_SERVER VARIABLES</h3>';
foreach($_SERVER as $key => $val){
    $val = is_array($val)? implode(', ',$val) : $val;
    // echo "<div>$key = $val</div>";
}

$_SESSION['userId'] = 'dkdfjdhkdjfjdh';
if (!isset($_SESSION['visited-pages'])) $_SESSION['visited-pages'] = [];
var_dump($_SESSION);
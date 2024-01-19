<?php
# DEFINING CONSTANTS FOR OUR DATABASE CONNECTION
define('DRIVER','mysql');
define('HOST','localhost'); //sql host server
define('USER','root'); //sql user connection username
define('PASSWORD',''); //sql user connection password
define('DBNAME','demo_blogdb'); //Database name
$DNS = DRIVER.":host=".HOST.";dbname=".DBNAME;
//$DNS = "mysql:host=localhost;dbname=demo_blog";

try{
    $DB = new PDO($DNS,USER,PASSWORD);
    // echo 'Database connection successful';
}
catch(Exception $e){
    error_log($e->getMessage()."\r\n",3,__DIR__.'/error.txt');
    die('Unable to establish database connection');
}

$sql = "SELECT * FROM users ORDER BY id LIMIT 100";
$stmt = $DB->query($sql);
//$rec_1 = $stmt->fetch(PDO::FETCH_ASSOC);//returns only one record
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);//returns all the 100 record limit

if(count($result) == 0){
    echo "No record found";
}else{
    $headers = array_keys($result[0]);
    /* echo "<table cellpadding=5><tr>";
    foreach($headers as $h => $v){
        echo "<th>$v</th>";
    }
    echo "</tr>";
    foreach($result as $r){

        echo "<tr>";
        foreach($r as $field => $value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>"; */
}

$json_output = [
    'headers' => $headers,
    'data'=>$result,
    'total'=>count($result)
];
echo json_encode($json_output);

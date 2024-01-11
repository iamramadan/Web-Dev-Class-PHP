<?php
$av_space = disk_free_space('C:');
$t_space = disk_total_space('C:');
echo "<h4>Available Server Storage: ".convert_space($av_space, precision:1)." of ".convert_space($t_space)."</h4>";
$dir = './loops/';
$files = scandir($dir);
$path = realpath($dir);
echo "Path: $path <br>";
echo implode('<br>',$files);

$rfile_path = 'phpinfo.php';
$fread = file($rfile_path);
echo "<ol><li>".implode("</li> <li>",$fread)."</li></ol>";
echo "<div>".file_get_contents($rfile_path)."</div>";

$content = "Hello! I am a file created with the file_put_content function of php.
I think its fun to create files with this particular function.";
$new_filename = "test_file.txt";
file_put_contents($new_filename,$content,LOCK_EX);

$new_filename1 = "fsystem/demo.txt";
//check if the file name contains a folder or sub folder
$paths = explode('/',$new_filename1);
$fname = array_pop($paths);
foreach($paths as $p){
    if (!file_exists($p) && !is_dir($p)) mkdir($p);
}
$f = fopen($new_filename1,'w');
for($x = 1; $x <= 20; $x++){
    $content = "$x x 3 = ".($x * 3);
    fwrite($f,"$content\n");
}
fclose($f);

$gfile = file($new_filename1);
echo $gfile[10]."<br>";//get line 11 of the file from the array

//Read the file
$rfile = fopen($new_filename1,'r');
fseek($rfile,0);
$freader = fread($rfile,1024);
// $freader = readfile($new_filename1);
echo "<h4>$freader</h4>";

copy($new_filename1,'loops/demo_copy.txt');

//Rename  or move the file (Renames file if the new name is in same location else it will move the file to a new location)
// rename($new_filename1,'times-demo.txt');

//Delete the file
// unline($new_filename1);

echo dirname(__FILE__);

function convert_space($value, $unit = 'gb',$precision = 2){
    switch($unit){
        default:
        case 'gb':
            return round($value / (1024*1024*1024),$precision)." ".strtoupper($unit);
            break;
        case 'mb':
            return round($value / (1024*1024),$precision)." ".strtoupper($unit);
            break;
        case 'kb':
            return round($value / (1024),$precision)." ".strtoupper($unit);
            break;
        case 'b':
            return $value." BYTES";
            break;
    }
}
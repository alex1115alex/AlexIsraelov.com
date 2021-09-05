<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$counter = (int)file_get_contents('count.txt');
$counterp = $counter + 1;
file_put_contents('count.txt', $counterp);
shell_exec('convert label:"You are visitor number ' . $counterp . ' on my Steam profile!" -resize 400x100 -gravity center -extent 400x100 number.png');

// open the file in a binary mode
$name = 'number.png';
$fp = fopen($name, 'rb');

// send the right headers
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

// dump the picture and stop the script
fpassthru($fp);
exit;
?>
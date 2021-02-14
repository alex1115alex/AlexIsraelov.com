<?php

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$dateTime = date('Y/m/d G:i:s');
$file = "visitors.html";
$file = fopen($file, "a");
$data = "<pre><b>User IP</b>: $ip <b> Browser</b>: $browser <br>on Time : $dateTime <br></pre>";
fwrite($file, $data);
fclose($file);

$imagesDir = 'images/';

$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$randomImage = $images[array_rand($images)];

// open the file in a binary mode
$name = 'moonman.jpg';
$name = $randomImage;
$fp = fopen($name, 'rb');

//Save this incase we might need it in the future
//header("Content-Type: image/png");

//Get the content type of the image
$contentType = mime_content_type($name);

//Set the correct headers
header("Content-Type: $contentType");
header("Content-Length: " . filesize($name));

// dump the picture and stop the script
fpassthru($fp);


?>

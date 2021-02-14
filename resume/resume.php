<?php

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$dateTime = date('Y/m/d G:i:s');
$file = "visitors.html";
$file = fopen($file, "a");
$data = "<pre><b>User IP</b>: $ip <b> Browser</b>: $browser <br>on Time : $dateTime <br></pre>";
fwrite($file, $data);
fclose($file);

echo '<script type="text/javascript">',
     'window.location.replace("https://docs.google.com/document/d/10e5tJYslzWhzRTJHH3n6mK-RY2QYCE6W13_NCjfYK1c/edit?usp=sharing");',
     '</script>'
;

?>
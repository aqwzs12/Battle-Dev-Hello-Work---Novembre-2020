<?php

include '../vendor/autoload.php';

$file = file_get_contents("./Exo1.txt");
$input = explode("\r\n", $file);

$count = 0 ;
for($i = 1 ; $i < count($input) ; $i++) {
    $l = strlen($input[$i]);
    if(is_numeric( substr($input[$i],$l-5))) {
        $count++;
    }

}

echo $count . PHP_EOL;



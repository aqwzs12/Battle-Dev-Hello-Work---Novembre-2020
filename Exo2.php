<?php

include '../vendor/autoload.php';


$file = file_get_contents('./Exo2.txt');
$input = explode("\r\n", $file);
$count = 0 ;
for($i = 1 ; $i < count($input) ; $i++) {
    $hours =  explode(":", $input[$i])[0];
    if ($hours >= 20 || $hours <8) {
        $count++;
    }
}

if($count < $input[0] / 2 ) {
    echo "OK".PHP_EOL;
}else{
    echo "SUSPICIOUS".PHP_EOL;
}

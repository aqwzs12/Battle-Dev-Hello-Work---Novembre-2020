<?php

include '../vendor/autoload.php';
$file = file_get_contents("./Exo4.txt");
$input = explode("\r\n", $file);

$cases = explode(" ",$input[1]);
$result = [];
$init = 0;
$array_result = [];

for($i = 0 ; $i <= 255 ; $i++) {
 $array_result[] = 0 ;

}

foreach($cases as $key => $case) {

    $result[$key] = $init ^ $case ;
    $init =   $result[$key] ;
}

for($i = 2 ; $i < count($input) ; $i++ ) {
    $exploder = explode(' ', $input[$i]);
    $start = $exploder[0];
    $end = $exploder[1];
    if($start == 0) {
        $array_result[$result[$end]] += 1 ;
    }else{
        $array_result[$result[$end] ^ $result[$start - 1]] += 1 ;
    }
}


foreach($array_result as $res) {
    echo $res . ' ';
}
echo PHP_EOL;

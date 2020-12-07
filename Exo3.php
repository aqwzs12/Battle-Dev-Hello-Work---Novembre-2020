<?php

include '../vendor/autoload.php';

$file = file_get_contents("./Exo3.txt");
$input = explode("\r\n", $file);
$n  = $input[0];
unset($input[0]);
$levels = [];
for($i=0 ; $i <= 10 ; $i++) {
    $levels [$i] = 0 ;
}
$M = [];
foreach($input as $value) {
    $exploder = explode(" ", $value);
    $a = $exploder[0];
    $b = $exploder[1];
    $M[$b][$a] = $a;
}

BFS($M, $n , $levels);
$levels = array_count_values($levels);
for($i=0;$i < 10;$i++) {
    if($i == 0 ) {
        echo 1 . ' ';
    }elseif(isset($levels[$i])) {
        echo $levels[$i] .' ';
    }else {
        echo 0 . ' ';
    }
}
echo PHP_EOL;

function BFS($M , $n , &$levels) {
    $visited = [];
    for($i = 0 ; $i <= $n ; $i++) {
        $visited[$i] = false;
    }
    $queue = [0];
   

    // Need to find a way to track level .....
        
    while(!empty($queue)) {
        $element =  $queue[0];
        if(!$visited[$element]) {
            $visited[$element] = true ;
            foreach($M[$element] as $key => $value) { 
                $levels[$value] = $levels[$element] + 1;
                $queue[] = $value;
            }
        }

            unset($queue[0]);
            $queue = array_values($queue);
        

    }



}




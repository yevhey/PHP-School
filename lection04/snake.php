<?php

$given_number = $argv[1];

$first_array = [];
$second_array = [];
$going = 'down';

for ($k = 1; $k <= $given_number * $given_number; $k++) {
    if ($going === 'down') {
        array_push($first_array, $k);
    } else {
        array_unshift($first_array, $k);
    }

    if ($k % $given_number === 0) {
        array_push($second_array, $first_array);
        $first_array = [];
        
        if ($going === 'down') {
            $going = 'up';
        } else {
            $going = 'down';
        }
    }
}

for ($i = 0; $i < count($second_array); $i++) {
    for ($t = 1; $t < count($second_array) + 1; $t++) {
        if ($second_array[$t - 1][$i] < 10) {
            echo '  ' . $second_array[$t - 1][$i];
        } else {
            echo ' ' . $second_array[$t - 1][$i];
        }
    
        if ($t % $given_number === 0) {
            echo PHP_EOL;
        }    
    }
}
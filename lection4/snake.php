<?php

$given_number = $argv[1];

$first_array = [];
$second_array = [];
$third_array = [];
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
    for ($t = 0; $t < count($second_array); $t++) {
        array_push($third_array, $second_array[$t][$i]);
    }
}

for ($d = 1; $d < count($third_array) + 1; $d++) {
    if ($third_array[$d - 1] < 10) {
        echo '  ' . $third_array[$d - 1];
    } else {
        echo ' ' . $third_array[$d - 1];
    }

    if ($d % $given_number === 0) {
        echo PHP_EOL;
    }
}
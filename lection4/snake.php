<?php

$given_number = 3;
$k = 1;
$result_array = [];
$temp_array = [];

do {
    array_push($temp_array, $k);

    if ($k % $given_number === 0) {
        array_push($result_array, $temp_array);
        $temp_array = [];
    }

    $k++;
} while($k <= $given_number * $given_number);

$final_ar = [];

for ($i = 0; $i < count($result_array); $i++) {
    for ($t = 0; $t < count($result_array); $t++) {
        array_push($final_ar, $result_array[$t][$i]);
    }
}

for ($d = 1; $d < count($final_ar) + 1; $d++) {
    echo $final_ar[$d - 1];

    if ($d % $given_number === 0) {
        echo PHP_EOL;
    }
}
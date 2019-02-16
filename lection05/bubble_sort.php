<?php

$A = [3, 5, 2, 4, 7, 1, 3, 2, 6];

for ($i = 0; $i < count($A); $i++) {
    for ($j = count($A) - 1; $j > $i; $j--) {
        if ($A[$j] < $A[$j - 1]) {
            $k = $A[$j];
            $A[$j] = $A[$j - 1];
            $A[$j - 1] = $k;
        }
    }
}

echo json_encode($A) . PHP_EOL;
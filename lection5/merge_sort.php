<?php

$A = [3, 5, 2, 4, 7, 1, 3, 2, 6];

function merge(&$A, $p, $q, $r)
{
    $n1 = $q - $p + 1;
    $n2 = $r - $q;

    $L = [];
    $R = [];

    for ($i = 1; $i <= $n1; $i++) {
        $L[$i] = $A[$p + $i - 1];
    }

    for ($j = 1; $j <= $n2; $j++) {
        $R[$j] = $A[$q + $j];
    }

    $L[$n1 + 1] = 0;
    $R[$n2 + 1] = 0;

    $i = 1;
    $j = 1;

    for ($k = $p; $k <= $r; $k++ ) {
        if($L[$i] >= $R[$j]) {
            $A[$k] = $L[$i];
            $i = $i + 1;
        }
        else {
            $A[$k] = $R[$j];
            $j = $j + 1;
        }
    }
}

function mergeSort(&$A, $p, $r) {
    if($p < $r) {
        $q = floor(($p + $r) / 2 );
        mergeSort($A, $p, $q);
        mergeSort($A, $q + 1, $r);
        merge($A, $p, $q, $r);
    }
}

mergeSort($A, 0, count($A) - 1);

echo json_encode($A) . PHP_EOL;
<?php

$base = $argv[1];

for ($i = $base; $i > 0; $i--) {
    echo str_repeat(' ', $i);
    echo str_repeat('*', ($base - $i + 1) * 2 - 1);
    echo PHP_EOL;
}

for ($i = 1; $i < $base; $i++) {
    echo str_repeat(' ', $i + 1);
    echo str_repeat('*', ($base - $i) * 2 - 1);
    echo PHP_EOL;
}
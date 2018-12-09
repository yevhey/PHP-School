<?php

$shortopts = "u::";

$longopts = array(
    "url::",
);

$options = getopt($shortopts, $longopts);

if (empty($options)) {
    parse_it($argv[1]);
} else {
    switch($options) {
        case isset($options['u']):
            parse_it($options['u']);
            break;
        case isset($options['url']):
            parse_it($options['url']);
            break;
    }
}

function parse_it(string $given_url) {
    print_r(parse_url($given_url));
}

echo PHP_EOL;
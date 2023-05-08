<?php

function my_strrev($str) {
    $res = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $res .= $str[$i];
    }

    return $res;
}

function print_binary($a) {
    $out = '';
    while ($a > 0) {
        $out = ($a % 2) . $out;
        $a = floor($a / 2);
    }
    echo strrev($out);
}

echo my_strrev("itacad");

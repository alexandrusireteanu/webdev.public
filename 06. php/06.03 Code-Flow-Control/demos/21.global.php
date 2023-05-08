<?php

// local scope
// procedural
$arr = array(1,2,3,4);

function square($a) {
    return $a*$a;
}

function map_array($arr, $function) {
    foreach($arr as &$value) {
        $value = $function($value);
    }
    return $arr;
}

var_dump(map_array($arr, "square"));
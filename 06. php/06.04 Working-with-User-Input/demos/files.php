<?php
// first way
$file = file_get_contents('test.txt');
$lines = explode("\n", $file);
//var_dump($lines);


// second way
$lines = file('test.txt');
foreach ($lines as $line_num => $line) {
    echo "Line #<b>{$line_num}</b> : " . $line . "<br />\n";
}
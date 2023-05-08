<?php

function foo() {
    return "a is smaller";
}

$a = 5;
$b = 7;
echo ($a < $b ? foo()  : "b is smaller");
echo "<br />";
echo ($a > $b ? "a" : "b") . " is greater <br />";
$b = ($a % 2 ? 17 : 18);

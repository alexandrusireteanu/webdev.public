<?php

function double(&$a) {
	$a *= 2;
}

$b = 7;
double($b);
echo $b . "<br />";
double($b);
echo $b . "<br />";

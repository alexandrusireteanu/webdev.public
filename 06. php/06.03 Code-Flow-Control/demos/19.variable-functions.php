<?php

function fibonachis() {
	var_dump(array(1, 1, 2, 3, 5, 8, 13));
}

function zeros() {
	var_dump(array(0, 0, 0, 0, 0, 0, 0));
}

$f = 'fibonachis';
$f();
$f = 'zeros';
$f();

<?php
function sumOfSquares($a, $b) {
        $a = $a * $a;
        $b = $b * $b;
        return $a + $b;
}

echo sumOfSquares(5, 7);
echo "<br />";
echo sumOfSquares(6, 8);
echo "<br />";
echo "<br />";

if(!function_exists('max'))
{
function max($a, $b, $strict = true) {
	if (strict)
		return ($a > $b);
	else
		return ($a >= $b);
}
}
echo max(3,3,false);
echo max(4,3,true);
echo max(3,3); // we can omit 3rd parameter
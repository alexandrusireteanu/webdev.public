<?php
function print_fibonachi () {
	$a = $b = 1;
	echo "1 1 ";
	for ($i = 0; $i < 10; $i ++) {
		echo ($a+$b)." ";
		$b = $a + $b;
		$a = $b - $a;
	}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title></title>
	</head>
	<body>

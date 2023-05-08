<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title></title>
	</head>
	<body>
		<?php
		echo intval(42);
		// 42
		echo "<br />";
		echo intval(4.2);
		// 4
		echo "<br />";
		echo intval('42');
		// 42
		echo "<br />";
		echo intval('+42');
		// 42
		echo "<br />";
		echo intval('-42');
		// -42
		echo "<br />";
		echo intval(042);
		// 34
		echo "<br />";
		echo intval('042');
		// 42
		echo "<br />";
		echo intval(1e10);
		// 1410065408
		echo "<br />";
		echo intval('1e10');
		// 1
		echo "<br />";
		echo intval(0x1A);
		// 26
		echo "<br />";
		echo intval(42000000);
		// 42000000
		echo "<br />";
		echo intval(420000000000000000000);
		// 0
		echo "<br />";
		echo intval('420000000000000000000');
		// 2147483647<br />
		echo "<br />";
		echo intval(42, 8);
		// 42
		echo "<br />";
		echo intval('42', 8);
		// 34
	?>
	</body>
</html>

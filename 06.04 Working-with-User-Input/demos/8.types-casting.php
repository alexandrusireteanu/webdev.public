<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title></title>
	</head>
	<body>
		<?php

		$foo = 0 + "123";
		// $foo is integer 123
		var_dump($foo);
		echo "<br />";
		$foo = 0 + "123.4";
		// $foo is float 123.4
		var_dump($foo);
		echo "<br />";
		$bar = "$foo";
		// $bar is string '123.4'
		var_dump($bar);
		echo "<br />";
		$foo = "123" + 0;
		// $foo is integer 123
		var_dump($foo);
		echo "<br />";
		$foo = "aaa" . (123 + 67);
		var_dump($foo);
		echo "<br />";
		$foo = "aaa" + "bbb";
		var_dump($foo);
	?>
	</body>
</html>

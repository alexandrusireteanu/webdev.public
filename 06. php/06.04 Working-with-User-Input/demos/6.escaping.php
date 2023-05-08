<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title></title>
	</head>
	<body>
		<?php
		echo '1 is ' . (is_int(1) ? '' : 'not ') . 'int<br />';
		echo 'a is ' . (is_int('a') ? '' : 'not ') . 'int<br />';
		echo '"1" is ' . (is_int("1") ? '' : 'not ') . 'int<br />';

		echo "1.13 is " . (is_double(1.13) ? '' : 'not ') . 'double<br />';

		echo "true is " . (is_bool(true) ? '' : 'not ') . 'bool<br />';
		echo "'true' is " . (is_bool('true') ? '' : 'not ') . 'bool<br />';
	?>
	</body>
</html>

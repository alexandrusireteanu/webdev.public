<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		define('TEST_CONSTANT', 10);
		echo "our test constant: " . TEST_CONSTANT;
		// let's try to modify it:

		// TEST_CONSTANT = 12; - this will produce error in the PHP engine

		echo "<br />";
		//define('TEST_CONSTANT', 12);
		// cant actually do this

		// you can use the runkit PECL package for this :
		// runkit_constant_redefine('TEST_CONSTANT', 12);
		echo "our test constant: " . TEST_CONSTANT;
		?>
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		echo "<strong>DIRECTORY_SEPARATOR: </strong>" . DIRECTORY_SEPARATOR;
		echo "<br />";
		echo "<strong>__FILE__ : </strong>" . __FILE__; 
		echo "<br />";
		echo "<strong>__LINE__ : </strong>" . __LINE__;
		echo "<br />";
		echo "<strong>PHP_VERSION : </strong>" . PHP_VERSION;
		echo "<br />";
		echo "<strong>PHP_OS : </strong>" . PHP_OS;
		echo "<br />";
		echo "<strong>Server variables:</strong><br />";
		echo "<strong>Document root:</strong>" . $_SERVER['DOCUMENT_ROOT']; 
		echo "<br />";
		echo "<strong>server address:</strong>" . $_SERVER['SERVER_ADDR']; 
		echo "<br />"; 
		echo "<strong>remote address:</strong>" . $_SERVER['REMOTE_ADDR']; 
		echo "<br />";
		echo "<strong>Testing GET variables:</strong>";
		print_r($_GET);
		// test for example with id=4&pr[a]=1&pr[b]=2
		?>
	</body>
</html>

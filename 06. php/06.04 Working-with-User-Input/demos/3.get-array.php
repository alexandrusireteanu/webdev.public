<!DOCTYPE html>
<head>
<title></title>
</head>
<body>
<?php
if ($_GET['test'] && is_array($_GET['test'])){
	echo "received array over get: ";
	print_r($_GET['test']);
	echo "<br />";
}
?>
<a href="?test[]=1&test[]=aa&test[]=true">Try to send array parameter over get request</a>
</body>
</html>

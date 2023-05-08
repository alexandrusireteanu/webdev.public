<?php
$fp = fopen ("./test.txt", "r");
if ($fp) {
	$file_contents = stream_get_contents($fp);
	echo $file_contents;
} else {
	echo "Error reading file";
}
?>
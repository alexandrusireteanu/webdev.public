<?php
$fp = fopen ("http://www.uaic.ro/", "r");
$content = '';
while (!feof($fp))
	$content .= fread ($fp, 512);
fclose ($fp);
echo $content;
?>
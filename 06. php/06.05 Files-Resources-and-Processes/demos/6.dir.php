<?php
$res = opendir ("c:/program files/");
while (false !== ($name = readdir($res)))
	echo $name."<br />";
closedir($res);
?>
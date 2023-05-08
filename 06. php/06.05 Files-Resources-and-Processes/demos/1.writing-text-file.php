<?php
$fp = fopen ("./test.txt", "w");
if (!$fp)
	echo 'Unable to create/overwrite file';
else { 
	fwrite ($fp, "writing");
}
?>
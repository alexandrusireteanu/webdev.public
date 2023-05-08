<?php

$arr = array('one', 'two', 'three', 'four', 'five', 'stop');
foreach ($arr as $value) {
	if ($value == 'stop') {
		break;
        }
	else {
		echo $value . " ";
        }
}
        
echo "<br />";
echo 0 % 2;

echo "<br />";
if(0) {
    echo "0 is TRUE";
} else {
    echo "0 is FALSE";
}
echo "<br />";

for ($i = 0; $i < 10; $i++) {
        if ($i % 2) {
		echo "even ";
		continue;
	}
	echo "do something ";
}

<?php

$city = 'asdasda';

switch ($city) {
	case 'Sofia' :
		echo "Capitol";
		break;
	case 'Stara Zagora' :
		echo "South Bulgaria";
		break;
	case 'Odrin' :
		echo "Not Bulgaria";
		break;
	case 'Bourgass' :
		echo "harabeishio.bg";
		break;
            // if all else returns FALSE
	default :
		echo "Either unknown or not in Bulgaria";
                break;
}

echo "<br />";
echo "end of switch";
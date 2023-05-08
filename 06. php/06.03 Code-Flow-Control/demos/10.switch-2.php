<?php

$city = 'Rousse';

switch ($city) {
	case 'Sofia' :
		echo "Capitol";
		break;
	case 'Pazardjik' :
	case 'Plovdiv' :
	case 'Stara Zagora' :
		echo "South Bulgaria";
		break;
	case 'Rousse' :
	case 'Vidin' :
	case 'Razgrad' :
		echo "North Bulgaria 123123";
                break;
	case 'Varna' :
	case 'Bourgass' :
		echo "East Bulgaria";
		break;
	default :
		echo "Either unknown or not in Bulgaria";
}
echo "<br />";
if("10" === 10) {
    echo "TRUE";
}
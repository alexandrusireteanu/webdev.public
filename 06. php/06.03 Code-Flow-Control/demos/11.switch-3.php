<?php

$v = "";
switch ($v) {
	case false :
		echo "it's boolean false";
		break;
	case 0 :
		echo "it's numeric zero";
		break;
	case null :
		echo "it's null variable";
		break;
	case "" :
		echo "it's empty string";
		break;
}

echo "<br />";
$v = array(1,2);
switch (true) {
	case (count($v) === 2) :
		echo "it's array";
                
		break;
	case ($v === 0) :
		echo "it's numeric zero";
		break;
	case ($v === null) :
		echo "it's null variable";
		break;
	case ($v === "") :
		echo "it's empty string";
		break;
}

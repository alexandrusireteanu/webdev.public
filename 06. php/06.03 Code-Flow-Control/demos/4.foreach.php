<?php
$arr = array(1, 2, 3, 4, 5);
foreach ($arr as $integer_value) {
	echo $integer_value . " ";
}

echo nl2br("\n");

$arr = array('name' => 'Ivan', 
    'middle name' => 'Ivanov', 
    'last name' => 'Ivanovici');
foreach ($arr as $key => $value) {
	echo $key . " => " . $value . "<br />";
}
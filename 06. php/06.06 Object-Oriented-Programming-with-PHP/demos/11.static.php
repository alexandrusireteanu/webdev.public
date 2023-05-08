<?php

class StaticTestClass {
	public static $myVariable;
	public static function myPrint() {
		echo self::$myVariable."<br />";
	}

	public function myDynamicPrint () {
		echo 'Dynamically printed width $this: '. $this->myVariable.'<br />';
	}
}
StaticTestClass::$myVariable = 'test';
StaticTestClass::myPrint();


$obj = new StaticTestClass();
$obj->myPrint();

$obj->myDynamicPrint();

echo 'Accessing the static variable trough the object width ->: '.$obj->myVariable.'<br />';

//echo 'Accessing the static variable trough the object width :: ';
echo $obj::myVariable;

?>
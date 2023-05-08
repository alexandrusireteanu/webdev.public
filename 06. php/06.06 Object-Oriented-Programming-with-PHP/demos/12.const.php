<?php

class ConstTestClass {
	const myConst = 5;
	public static function myPrint() {
		//echo self::$myConst."<br />";
		echo self::myConst."<br />"; // no $ !
	}

	public function myDynamicPrint () {
		echo 'Dynamically printed width $this: '. $this->myConst.'<br />';
	}
}

ConstTestClass::myPrint();


$obj = new ConstTestClass();
$obj->myPrint();

$obj->myDynamicPrint();

echo 'Accessing the static variable trough the object width ->: '.$obj->myConst.'<br />';

//echo 'Accessing the static variable trough the object width :: ';
//echo $obj::myVariable;

?>
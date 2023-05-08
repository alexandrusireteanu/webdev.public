<?php

class HelloWorld {
	var $property;
	var $defVal = 'This is the default value';
	
	function __construct ($test) {
		$this->property = $test;
	}
	
	function MyPrint () {
		echo $this->property;
	}
	
	function PrintDefVal() {
		echo $this->defVal;
	}
}

$myFirstObject = new HelloWorld('Some test string ');
$myFirstObject->MyPrint();
$myFirstObject->PrintDefVal();

?>
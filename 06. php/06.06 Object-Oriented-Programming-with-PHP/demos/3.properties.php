<?php

class HelloWorld {
	var $property;
	function __construct ($test) {
		$this->property = $test;
	}
	function MyPrint () {
		echo $this->property;
	}
}
$myFirstObject = new HelloWorld("Some test string\n");
$myFirstObject->MyPrint();

$mySecondObject = new HelloWorld("Another test\n");
$mySecondObject->MyPrint();

?>
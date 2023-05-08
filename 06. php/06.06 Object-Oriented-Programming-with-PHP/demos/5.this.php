<?php

class TestClass {
	var $property = '';

	function __construct ($val) {
		$this->setValue($val);
	}

	function getValue () {
		return $this->property;
	}

	function setValue ($val) {
		$this->property = $val;
	}

	function printValue () {
		echo $this->getValue();
	}
}
$myFirstObject = new TestClass('Some test string');
$myFirstObject->printValue();

?>
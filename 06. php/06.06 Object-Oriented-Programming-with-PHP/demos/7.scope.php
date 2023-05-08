<?php

class ScopeDemo {
	private $bar;

	public function __construct ($bar) {
		$this->bar = $bar;
	}
	public function myPrint () {
		echo $this->bar;
	}
}

$test = new ScopeDemo('test');
$test->myPrint(); // prints 'test'
// this will not work:
echo $test->bar;

?>
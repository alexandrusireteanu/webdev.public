<?php

class A {
	public $var1 = 1;
	public $var2 = 2;
	protected $var3 = 3;
	private $var4 = 4;
	function printIteration () {
		foreach ($this as $key=>$val)
			echo "$key : $val<br />";
	}
}
$obj = new A();
// this prints only the public properties
echo 'print from outside world: <br />';
foreach ($obj as $key=>$val)
	echo "$key : $val <br />";

// this prints protected and private too
echo 'print from method: <br />';
$obj->printIteration ();


?>
<?php

abstract class AbstractClass {
	abstract protected function getValue();
	abstract public function getValue2($prefix);

	public function printOut () {
		echo $this->getValue();
	}
}

class Class1 extends AbstractClass {
	protected function getValue (){
		return "Class1<br />";
	}
	public function getValue2($prefix) {
		return $prefix."NAC1<br />";
	}
}

class Class2 extends AbstractClass {
	protected function getValue (){
		return "Class2<br />";
	}
	public function getValue2($prefix) {
		return $prefix."NAC2<br />";
	}
}

$class1 = new Class1();
$class1->printOut(); // "Class1";
echo $class1->getValue2('FOO'); // FOONAC1

$class2 = new Class2();
$class2->printOut(); // "Class2";
echo $class2->getValue2('FOO'); //FOONAC2

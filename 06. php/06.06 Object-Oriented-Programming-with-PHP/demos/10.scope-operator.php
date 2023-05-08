<?php
class Animal {
	protected $name = '';
	protected $type = '';

	// note the constructor is here, as it is shared!
	public function __construct ($name) {
		$this->name = $name;
	}

	public function MakePooPoo () {
		echo 'The '.$this->type.' '.$this->name.' made a poo poo on the carpet';
	}

	public function printData () {
		echo $this->name.' is some kind of animal (probably '.$this->type.')<br />';
	}
}

class Dog extends Animal {
	protected $type = 'dog';
	protected $age;

	public function __construct ($name, $age) {
		$this->age = $age;
		parent::__construct($name);
	}

	public function MakePooPoo () {
		echo 'The stupid dog '.$this->name.' made a very big poo poo on the carpet<br />';
	}
	public function printData () {
		echo $this->name.' is a '.$this->age.' year(s) old dog cat<br />';
	}
}

class Cat extends Animal {
	protected $type = 'cat';
	protected $color = 'gray';

	public function __construct ($name, $color) {
		$this->color = $color;
		parent::__construct($name);
	}

	public function MakePooPoo () {
		echo $this->name.' made a very small poo poo on the bed<br />';
	}

	public function printData () {
		//echo $this->name.' is a '.$this->color.' cat<br />';
		parent::printData();
	}
}

$MyDog = new Dog('Go6ko', 10);
$MyDog->printData();

$MyGirfriendsCat = new Cat('Pisi', 'green');
$MyGirfriendsCat->printData();
?>
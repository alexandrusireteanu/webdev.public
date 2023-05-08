<?php

class Animal {
	protected $name = '';
	protected $type = '';

	public function MakePooPoo () {
		echo 'The '.$this->type.' '.$this->name.' made a poo poo on the carpet';
	}
}

class Dog extends Animal {
	protected $type = 'dog';
	public function __construct ($name) {
		$this->name = $name;
	}
}

$MyDog = new Dog('Go6ko');
$MyDog->MakePooPoo();
?>
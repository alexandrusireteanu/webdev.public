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
}

class Dog extends Animal {
	protected $type = 'dog';


	public function MakePooPoo () {
		echo 'The stupid dog '.$this->name.' made a very big poo poo on the carpet<br />';
	}

}

class Cat extends Animal {
	protected $type = 'cat';

	public function MakePooPoo () {
		echo $this->name.' made a very small poo poo on the bed<br />';
	}


}

$MyDog = new Dog('Go6ko');
$MyDog->MakePooPoo();

$MyGirfriendsCat = new Cat('Pisi');
$MyGirfriendsCat->MakePooPoo();
?>
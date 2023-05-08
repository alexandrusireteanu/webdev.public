<?php
	class Dog {
		private $name;
		private $speed;
		
		public function __construct($name, $speed) {
			$this->name = $name;
			$this->speed = $speed;
		}
		
		public function setName($name) {
			$this->name = $name;
		}
		
		public function setSpeed($speed) {
			$this->speed = $speed;
		}
		
		public function printDog() {
			echo "I am a dog. My name is $this->name. ";
			echo "I have speed $this->speed\n";
		}
	}
	
	$pesho = new Dog("Pesho kucheto", 10);
	$kiro = new Dog ("Kiro kucheto", 8);
	
	$sharo = $pesho;
	//$sharo = clone $pesho;
	$sharo->setName("Sharo");
	$sharo->setSpeed(50);
	
	$pesho->printDog();
	$kiro->printDog();
	$sharo->printDog();
?>
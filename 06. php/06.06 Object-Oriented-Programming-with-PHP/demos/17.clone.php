<?php
class CloneExample {
	private $fileName;
	private $fp = null;
	public function open ($file) {
		$this->fileName = $file;
		$this->fp = fopen ($file, 'r');
	}
	public function close () {
		if ($this->fp) {
			fclose($this->fp);
			$this->fp = null;
		}
	}

	public function __clone () {
		// reopen the file for the new object
		if ($this->fp) {
			echo 'Copy constructor found opened file ('.$this->fileName.'), reopening<br />';
			$this->fp = fopen($this->fileName, 'r');
		}
	}
	public function testReadability () {
		if ($this->fp) {
			echo ('Trying to read a char from the file: '.fread ($this->fp, 1).'<br />');
		}
	}

	public function __destruct () {
		$this->close();
	}
}

$obj1 = new CloneExample();
$obj1->open('1.first-class.php');
$obj2 = clone $obj1;
$obj1->testReadability();
$obj2->testReadability();
//unset ($obj1);
$obj1->close();
$obj2->testReadability();
?>
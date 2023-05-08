<?php

class FileAccess {
	var $res = null;

	function __construct ($name) {
		if ($name)
			$this->openFile($name);
	}

	function __destruct () {
		$this->closeFile();
	}

	function openFile ($name) {
		if ($name) {
			if ($this->res = fopen ($name, 'r'))
				echo 'File was opened<br />';
		}

		return (bool)$this->res;
	}

	function closeFile () {
		if ($this->res) {
			fclose ($this->res);
			echo 'File was closed';
		}
	}
}

$test = new FileAccess('1.first-class.php');
unset($test);

?>
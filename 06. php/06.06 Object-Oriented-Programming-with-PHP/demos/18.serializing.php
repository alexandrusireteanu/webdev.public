<?php

class A {
	public $var;
	public function myPrint () { echo $this->var; }
}

$obj = new A;
$obj->var = 10;
$data = serialize ($obj);
// store $data in a file
file_put_contents ('data.dat', $data);

unset ($obj);

// in a new page:
$data = file_get_contents ('data.dat');
$new_obj = unserialize ($data);
$new_obj->myPrint(); // prints 10

unlink('data.dat');

?>
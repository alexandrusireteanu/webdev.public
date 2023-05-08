<?php

class HelloWorld {
	function __construct ($test) {
		echo $test."<br \>";
	}
	function MyPrint () {
		echo "Hellow object oriented world!";
	}
}
$myFirstObject = new HelloWorld('Hi');
$myFirstObject->MyPrint();

?>
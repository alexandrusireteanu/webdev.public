<?php
// example for command line usage of PHP Script
if (php_sapi_name() === "cli") {
	echo "Hello command line";
} else {
	die("Command line only");
}

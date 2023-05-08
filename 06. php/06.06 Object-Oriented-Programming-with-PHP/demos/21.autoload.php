<?
function __autoload ($class_name) {
	$name = "includes/".$class_name.".inc.php";
	if (file_exists ($name))
		include $name;
	else
		echo 'Class not found';
}

/**
 * Try to use the class
 */
$obj = new DB();


?>

<?php
define('SECRET', 183);

// Encrypt the file
$file_contents = file_get_contents("logo.png");
encrypt($file_contents, SECRET);
file_put_contents("logo-encrypted.png", $file_contents);

// Decrypt the file
$file_contents = file_get_contents("logo-encrypted.png");
encrypt($file_contents, SECRET);
file_put_contents("logo-decrypted.png", $file_contents);

function encrypt(&$data, $secret_key) {
	for ($i=0; $i<strlen($data); $i++) {
		$data{$i} = chr(ord($data{$i}) ^ $secret_key);
	}
}
?>
<?php
$db = mysql_connect ("salexis_ro-webdev-1384939", "salexis_ro", "");

if ($db === false) {
	echo "Error connecting server!\n";
}
if (mysql_selectdb ("hr", $db) === false) {
	echo "Error connecting database!\n";
}
else {
	echo "Connected to database successfully.\n";
}

$res = mysql_query ("select * from EMPLOYEES");
if ($res !== false) {
	echo "SQL query executed.\n";
}
?>
<?php
$db = mysql_connect ("salexis_ro-webdev-1384939", "salexis_ro", "");
if ($db === false) {
	echo "Error connecting to MySQL server!";
	exit;
}
if (mysql_select_db ("hr") === false) {
	echo "Error connecting to database HR!";
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Our First SQL Query</title>
</head>
<body>
<?php
$res = mysql_query ("select * from EMPLOYEES");
$row = mysql_fetch_row($res);
if ($row) {
	print_r($row);
} else {
	echo "Table is empty.";
}
?>
</body>
</html>
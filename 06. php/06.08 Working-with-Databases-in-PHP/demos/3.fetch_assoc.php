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
<!DOCTYPE html>
<html>
<head>
	<title>Fetch Associative Array</title>
</head>
<body>
<?php
$res = mysql_query ("select * from EMPLOYEES");
$row = mysql_fetch_assoc($res);
if ($row)
	print_r($row);
else
	echo "Table is empty";

?>
</body>
</html>
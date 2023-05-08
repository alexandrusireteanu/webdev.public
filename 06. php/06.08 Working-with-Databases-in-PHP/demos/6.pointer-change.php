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
	<title>Rows in Reversed Order</title>
</head>
<body>
<?php
$res = mysql_query ("select EMPLOYEE_ID,FIRST_NAME from EMPLOYEES");
$count = mysql_num_rows($res);
for ($i = $count - 1; $i >= 0; $i--) {
	mysql_data_seek($res, $i);
	$row = mysql_fetch_assoc($res);
	print_r($row);
}
?>
</body>
</html>
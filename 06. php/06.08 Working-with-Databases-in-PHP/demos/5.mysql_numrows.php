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
	<title>Rows Count</title>
</head>
<body>
<?php
$res = mysql_query ("select EMPLOYEE_ID,FIRST_NAME from EMPLOYEES");
echo mysql_num_rows($res);
?>
</body>
</html>
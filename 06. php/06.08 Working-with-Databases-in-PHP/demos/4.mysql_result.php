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
	<title>Fetch Single Value</title>
</head>
<body>
<?php
$res = mysql_query ("select EMPLOYEE_ID,FIRST_NAME from EMPLOYEES");
$name = mysql_result($res, 0, 1);
if ($name)
	echo $name;
else
	echo "Table is empty";

?>
</body>
</html>
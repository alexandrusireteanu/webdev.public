<?php
$db = mysql_connect ("salexis_ro-webdev-1384939", "salexis_ro", "");
if ($db === false) {
	echo "Error connecting to MySQL server!";
	exit;
}
if (mysql_selectdb ("hr") === false) {
	echo "Error connecting to database HR!";
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert New Row in DB</title>
</head>
<body>
<?php
$employee_name = mysql_real_escape_string($_POST['employee_name']);
if ($employee_name) {
	$res = mysql_query (
		"insert into EMPLOYEES values (null, '".$employee_name."', null, null, null, null, null, null, null, null, null)");
	echo "Inserted in MySQL with ID: ". mysql_insert_id();
} else {
?>
	<form method="post" action="7.insert-id.php">
		<label>Name:</label><input type="text" name="employee_name" value="" />
		<input type="submit" value="Insert" />
	</form>
<?php
}
?>
</body>
</html>
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
	<title>Show Table from Database</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<td style="background:#CCCCCC">Country</td>
		<td style="background:#CCCCCC">Region</td>
	</tr>
<?php
$res = mysql_query ("SELECT country_name, region_name FROM COUNTRIES c JOIN REGIONS r ON c.region_id=r.region_id;");
while ($row = mysql_fetch_assoc($res)) {
	$country = htmlspecialchars($row['country_name']);
	$region = htmlspecialchars($row['region_name']);	
?>
	<tr>
		<td><?php echo $country ?></td>
		<td><?php echo $region ?></td>
	</tr>
<?php
}
?>
</table>
</body>
</html>
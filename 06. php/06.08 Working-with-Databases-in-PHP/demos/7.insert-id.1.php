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
$employee_lname = mysql_real_escape_string($_POST['employee_lname']);
$employee_email = mysql_real_escape_string($_POST['employee_email']);
$employee_phone = mysql_real_escape_string($_POST['employee_phone']);
$employee_hire = mysql_real_escape_string($_POST['employee_hire']);
$employee_jobid = mysql_real_escape_string($_POST['employee_jobid']);
$employee_salary = mysql_real_escape_string($_POST['employee_salary']);
$employee_commission = mysql_real_escape_string($_POST['employee_commission']);
$employee_managerid = mysql_real_escape_string($_POST['employee_managerid']);
$employee_departmentid = mysql_real_escape_string($_POST['employee_departmentid']);

if ($employee_name) {
	$res = mysql_query (
		"insert into EMPLOYEES values (null, '".$employee_name."', 
		'".$employee_lname."', '".$employee_email."', '".$employee_phone."', '".$employee_hire."', '".$employee_jobid."', '".$employee_salary."', '".$employee_commission."', '".$employee_managerid."', '".$employee_departmentid."')");
	echo "Inserted in MySQL with ID: ". mysql_insert_id();
	echo "<br \>";
	
	$max = mysql_query("SELECT * FROM EMPLOYEES WHERE EMPLOYEE_ID=(SELECT MAX(EMPLOYEE_ID) FROM EMPLOYEES);");
	$last = mysql_fetch_assoc($max);
	print_r($last);
	echo "<br \>";
	
	$add = mysql_query("update EMPLOYEES set PHONE_NUMBER=PHONE_NUMBER+1 where SALARY > 20");
	echo mysql_affected_rows();
	//echo mysql_errno().": ".mysql_error();
	//mysql_free_results();
	//mysql_close();
} else {
?>
	<form method="post" action="7.insert-id.1.php">
		<label>Name:</label><input type="text" name="employee_name" value="" /><br />
		<label>LName:</label><input type="text" name="employee_lname" value="" /><br />
		<label>Email:</label><input type="email" name="employee_email" value="" /><br />
		<label>Phone:</label><input type="text" name="employee_phone" value="" /><br />
		<label>Hire:</label><input type="date" name="employee_hire" value="" /><br />
		<label>JobID:</label>
			<select name="employee_jobid">
				<option>AC_ACCOUNT</option>
				<option>AC_MGR</option>
				<option>AD_ASST</option>
				<option>AD_PRES</option>
				<option>AD_VP</option>
			</select>
		<br />
		<label>Salary:</label><input type="text" name="employee_salary" value="" /><br />
		<label>Commission:</label><input type="text" name="employee_commission" value="" /><br />
		<label>ManagerID:</label><input type="text" name="employee_managerid" value="101" readonly /><br />
		<label>DepartmentID:</label><input type="text" name="employee_departmentid" value="10" readonly /><br />
		<input type="submit" value="Insert" />
	</form>
<?php
}
?>
</body>
</html>
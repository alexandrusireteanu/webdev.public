<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title></title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	?>
	<strong>Your input was:</strong><br />
	Name: <?=$_POST['name']?> <br />
	Age: <?=$_POST['age']?> <br />
	Sex: <?=$_POST['sex']?> <br />
	Description: <?=$_POST['description']?> <br />
	Interests: <?=$_POST['interests']?> <br />
	Newsletter: <?=$_POST['newsletter']?> <br /><br />
	<?php
	//print_r($_POST);
}
?>
<form method="post" action="">
	Your name: <input type="text" name="name" value="" /><br />
	Age: <select name="age">
		<option value="< 12">&lt; 12</option>
		<option value="1-18">13-18</option>
		<option value="19-25">19-25</option>
		<option value="25-40">25-40</option>
		<option value="40-60">40-60</option>
		<option value="> 60">&gt; 60</option>
	</select><br />
	Sex: <input type="radio" name="sex" value="male" /> Male  <input type="radio" name="sex" value="female" /> Female<br />
	Describe yourself: <br /><textarea rows="3" cols="40" name="description"></textarea><br />
	<?
	// In order the interests to work, you need the name ... :)
	?>
	Interests:<br /> <select multiple="multiple" name="interests">
		<option value="PHP" selected="selected">PHP</option>
		<option value="Java">Java</option>
		<option value="ASP">ASP</option>
		<option value="Perl">Perl</option>
		<option value="Python">Python</option>
		<option value="Ruby">Ruby</option>
	</select><br />
	Send me newsletter: <input type="checkbox" name="newsletter" checked="checked" /><br />
	<input type="submit" value="Go!" />
</form>
</body>
</html>





<?php
/*
foreach ($_POST['interests'] as $names)
		{
		        print "$names ";
		}
*/
?>
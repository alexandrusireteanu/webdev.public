<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title></title>
	</head>
	<body>
		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if ($_FILES['myfile'] && is_uploaded_file($_FILES['myfile']['tmp_name'])) {
				$chunks = explode('.', $_FILES['myfile']['name']);
				$extension = $chunks[count($chunks) - 1];
				if (move_uploaded_file($_FILES['myfile']['tmp_name'], dirname(__FILE__) . DIRECTORY_SEPARATOR . "uploadedfile." . $extension))
					echo "You uploaded file named " . $_FILES['myfile']['name'] . "<br />" . "Extension: " . $extension . "<br />" . "Size: " . $_FILES['myfile']['size'] . " bytes<br />";
				else
					echo "Ooops! Unable to move the file!";
			}
		}
	?>
		<form method="post" enctype="multipart/form-data">
			<input type="file" name="myfile" />
			<input type="submit" value="Go!" />
		</form>
	</body>
</html>

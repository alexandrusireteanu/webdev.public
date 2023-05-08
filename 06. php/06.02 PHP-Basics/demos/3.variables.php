<!DOCTYPE html>
<html>	
	<head>
		<title></title>
	</head>
	<body>
		<?php
		$arr = array(1,2,3,"rado" => 123123, "venci" => 2323, "niki" => 213123);
                echo "<pre>";
                var_dump($arr);
                echo "</pre>";
                
                echo "<br />";
                foreach ($arr as $key => $value) {
                    echo $key . ":" . $value . "<br />";
                }
                echo "<br />";
                
                $asd;
                var_dump($asd);
	?>
	</body>
</html>

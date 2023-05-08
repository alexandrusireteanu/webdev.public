<?php
$spec = array (
	0 => array ("pipe", "r"),
	1 => array ("pipe", "w"),
	2 => array ("file", "mylog.log", "a")
);
$env = array ("PATH" => "/bin/bash");
$p = proc_open("/bin/bash", $spec, $pipes, "/", $env);
if (is_resource($p)) {
	$procstdin = $pipes[0];
	$procstdout = $pipes[1];
	fwrite ($procstdin, "/bin/date\n"); // DO NOT FORGET the new line!
	echo fread ($procstdout, 128);
	//echo stream_get_contents($procstdout);
	fclose($procstdin);
	fclose($procstdout);
	proc_close($p);
} else {
	echo 'Unable to start process!';
}
?>
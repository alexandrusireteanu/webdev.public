<?php
// url.com/gallery.php?gallery_id=1&picture_id=2
//$assoc = array("key2" => "value");

//if(isset($assoc["key"])) {
    
//}
if (isset($_GET["gosh"]) && $_GET["gosh"] !== "") {
    echo "Hello " . $_GET["gosh"];
    echo "<br />";
    echo strlen($_GET["gosh"]);
}
?>
<br />
<a href="2.get-test.php?gosh=gosh">First</a>
<br />
<a href="2.get-test.php?gosh=midas">Second</a>
<br />
<a href="2.get-test.php?gosh=nan">Third</a>
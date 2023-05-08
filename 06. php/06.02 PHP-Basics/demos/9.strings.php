<?php
$double_quoted = "This is a double quoted string 'with a single quoted inside'";
echo $double_quoted;
echo "<br />";

$the_other_way_around = 'This is a double quoted string "with a single quoted inside"';
echo $the_other_way_around;
echo "<br />";

$heredoc = <<< EOT
asdf !<br />
new line
EOT;
echo $heredoc;
echo "<br />";


$val = 5;
echo "String with a parsed variable: $val";
echo "<br />";
echo 'String with a parsed variable: $val';
// note there is no closing php tag :)

echo "<br />";
$str1 = "this is \"PHP\"";
echo $str1;

echo "<br />";
$str2 = 'Arnold once said: "I\'ll be back"';
echo $str2;

echo "<br />";
$saying = "I'll be back!";
$str3 = "Arnold once said: $saying";
echo $str3;

echo "<br />";
$sayings = array ('arni' => "I'll be back!");
$str4 = "Arnold once said: ${sayings['arni']}";
echo $str4;
<?php
function page1() {
    echo "page1";
}

function page2() {
    echo "page2";
}

function page3() {
    echo "page3";
}
var_dump($_GET);
$page = $_GET["page"];

if (function_exists($page)) {
    $page();
} else {
    echo "No such page";
}

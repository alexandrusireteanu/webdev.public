<?
require "./Library/db.php";
require "./Library/DB/MySQL.php";

use Project::DB::MySQL;

$connection = new MySQL::DB('localhost', 'test', 'test', 'test');

?>
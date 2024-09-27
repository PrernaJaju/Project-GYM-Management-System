
<?php
$db = pg_connect("host=localhost port=5432 user=postgres password=postgres");

$sql="create database prerna";
$result = pg_query($sql);
?>
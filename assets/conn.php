<?php 
$host = "localhost";
$port = "5432";
$dbname = "assessment2";
$user = "postgres";
$password = "lse34233"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
?>
<?php 
$host = "ec2-52-87-107-83.compute-1.amazonaws.com";
$port = "5432";
$dbname = "dchnm0uhvk8aiu";
$user = "xfdrzkvbmvrlsk";
$password = "2dd6e2fb165814190e5d04e373b7fe8c76e79373153dd070eb3a799d16c8c289"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
?>

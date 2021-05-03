<?php

	require_once 'conn.php';
	session_start();
	$semester = $_GET["semester"];

	global $dbconn;

	$result = pg_query($dbconn, "DELETE FROM public.data WHERE semester=$semester");

	header("location: data_ipk.php");


?>
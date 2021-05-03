<?php 
    require_once 'conn.php';
    session_start();
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];

    $result  = pg_query($dbconn, "UPDATE public.data
  SET ipk='$ipk' WHERE semester = $semester");


    header("location: data_ipk.php");
?>




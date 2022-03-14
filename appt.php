<?php
	$email= $_GET["email"];
	$appt_date = $_GET["appt_date"];
    $from_location = $_GET["from_location"];
    $to_location = $_GET["to_location"];
    $status = $_GET["status"];
   

	require_once('db_create.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO ticket_booking VALUES ( '', '$email', '$appt_date', '$from_location', '$to_location', '$status' )" )
		or die("Can not execute query");

	//echo "Record inserted:<br>  = $f0 <br> f1 = $f1";

	echo "<p><a href=index.php>READ all records</a>";
?>
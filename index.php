<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM ticket_booking" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>id</th> <th>name</th> <th>appt_date</th> <th>from_location</th> <th>to_location</th> <th>status</th>  \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $id </td>";
		echo "<td> $name </td>";
        echo "<td> $appt_date </td>";
        echo "<td> $from_location </td>";
        echo "<td> $to_location </td>";
        echo "<td> $status </td>";
		echo "<td> <a href = 'add_booking.php?id=$id'> addBooking </a> </td>";
		echo "<td> <a href = 'confirm_booking.php?id=$id'> ConfirmBooking </a> </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=create_input.php>CREATE a new record</a>";
?>
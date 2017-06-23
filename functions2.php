<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database_for_coloredcow";

	   $event_name=  @$_POST['event_name'];
	   $event_theme= @$_POST['event_theme'];
	   $event_date=  @$_POST['event_date'];
	   $event_venue= @$_POST['event_venue'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}


	$sql = "INSERT INTO new_event (event_name, event_theme, event_date, event_venue)
	VALUES ('$event_name', '$event_theme', '$event_date', '$event_venue')";

	if ($conn->query($sql) === TRUE) 
	{
	    echo "Information has been successfully saved.";
	} else 

	{
	    echo "Error: " . $sql . "<br>" . $conn->error ;
	
	}
	

	$conn->close();
?>
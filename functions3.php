<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";

			   $guest_name=    @$_POST['guest_name'];
			   $guest_emailid= @$_POST['guest_emailid'];
			   $phone_number=  @$_POST['phone_number'];

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
			    die("Connection failed: " . $conn->connect_error);
			}

			
			$sql = "INSERT INTO new_guests (guest_name, guest_emailid, phone_number)
					VALUES ('$guest_name', '$guest_emailid', '$phone_number')";

			if ($conn->query($sql) === TRUE) 
			{
			    echo "Information has been successfully saved.";
			} else 

			{
			    echo "Error:"  . $sql . "<br>" . $conn->error;
			}

			$conn->close();
?>
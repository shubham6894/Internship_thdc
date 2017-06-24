<?php
		

		 function events()
		{
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
			    return ("Information has been successfully saved.");
			} 

			else 

			{
			    return "Error: " . $sql . "<br>" . $conn->error ;
			
			}
			

			$conn->close();
			
		}


		function guest_details()
		{
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
			    return "Information has been successfully saved.";
			} else 

			{
			    return "Error:"  . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			
		}
		


		function update_details()
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";

			$your_email= @$_POST['your_email'];
			
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
			    die("Connection failed: " . $conn->connect_error);
			}

			$k="SELECT guest_emailid FROM new_guests WHERE guest_emailid='$your_email'";
			$result=mysqli_query($conn,$k);
			$p=mysqli_num_rows($result);

			if ($p>0) 
			{
				$sql = "UPDATE new_guests
						SET status='YES'
						WHERE guest_emailid='$your_email'";

				if ($conn->query($sql) === TRUE) 
				{
				    return "THANK YOU FOR YOUR PRECIOUS TIME....WE WILL BE WAITING FOR YOU...";
				} 

				else 
				{
				    return "Error:"  . $sql . "<br>" . $conn->error;
				}
			
			}
			
			else
			{
				return "SORRY BUT YOU ARE NOT IN OUR GUEST LIST.HOPE TO SEE YOU ANOTHER TIME";
			}


			$conn->close();
			
		}


		function show_events()
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT event_name, event_theme, event_date, event_venue FROM new_event ORDER BY `event_date` asc limit 1";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "<h6>EVENT NAME:</h6>" . $row["event_name"]. "<br><br><h6>EVENT THEME:</h6>" . $row["event_theme"]. "<br><br><h6>EVENT DATE:</h6>" . $row["event_date"]. "<br><br><h6>EVENT VENUE:</h6>" . $row["event_venue"]. "<br><hr class='my-1'><br>";
			    }
			} else
			{
			    echo "0 results";
			}
			$conn->close();
			
		}


		function rsvp()
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";

													   
			// Create connection
			$conn1 = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn1->connect_error) 
				{
				    die("Connection failed: " . $conn1->connect_error);
				}


			$result1 = "SELECT * FROM new_guests "; 
			$result2 = mysqli_query($conn1,$result1);
			if(mysqli_num_rows($result2) == 0)
				{ 
					("no records found"); 
				} 
			else 
				{ 
					//echo 

			// 		"<table border='1'> 
			// 		<tr> 
			// 		<th> guest_name </th> 
					 
					 
			// 		<th> status </th>
			// 		<th> guest_emailid </th> 
					 
			// 		</tr>";

			// while($row1 = mysqli_fetch_assoc($result2)) 
			// 	{ 
			// 		echo "<tr>"; 
			// 		echo "<td>" . $row1['guest_name'] . "</td>";  
			// 		echo "<td>" . $row1['status'] . "</td>"; 
			// 		echo "<td>" . $row1['guest_emailid'] . "</td>"; 
			// 		echo "</tr>";

			// 	}

			// 		echo "</table>";
		echo "<table class='table table-hover table-striped  table-bordered'>";
   echo "<thead>";
    echo "<tr>";
      echo "<th>"."#"."</th>";
      echo "<th>"."Guest Name"."</th>";
      echo "<th>"."Status"."</th>";
      echo "<th>"."Guest Emailid"."</th>";
    echo "</tr>";
   echo "</thead>";
  echo "<tbody>";
    
      $x=1;
      while ($row1 = mysqli_fetch_assoc($result2)) 
      {
     echo "<tr class='table-danger'>"; 	
      
      echo "<th scope='row'>".$x."</th>";
      
      echo "<td>". $row1['guest_name']. "</td>";
      echo "<td>". $row1['status']. "</td>";
      echo "<td>". $row1['guest_emailid']. "</td>";
      
    echo "</tr>";
    
  echo "</tbody>";
 
	$x=$x+1;				
				} //end close off the if statement
		echo "</table>";		
		}
		$conn1-> close();
	}
?> 
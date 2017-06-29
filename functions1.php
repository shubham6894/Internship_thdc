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
			   $guest_gender=  @$_POST['guest_gender'];

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
			    die("Connection failed: " . $conn->connect_error);
			}

			
			$sql = "INSERT INTO new_guests (guest_name, guest_emailid, phone_number, guest_gender)
					VALUES ('$guest_name', '$guest_emailid', '$phone_number', '$guest_gender')";

			if ($conn->query($sql) === TRUE) 
			{
			    return "Information has been successfully saved.";
			} else 

			{
			    return "Error:"  . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			
		}

		function requests()
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";

			   $request_name=    @$_POST['request_name'];
			   $request_emailid= @$_POST['request_emailid'];
			   $request_gender=  @$_POST['request_gender'];
			   $phonenumber=     @$_POST['phonenumber'];

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
			    die("Connection failed: " . $conn->connect_error);
			}

			
			$sql = "INSERT INTO new_guests_requests (request_name, request_emailid, phonenumber, request_gender)
					VALUES ('$request_name', '$request_emailid', '$phonenumber', '$request_gender')";

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
					
		echo "<table class='table table-hover table-striped  table-bordered table-responsive'>";
   echo "<thead>";
    echo "<tr>";
      echo "<th>"."#"."</th>";
      echo "<th>"."Guest Name"."</th>";
      echo "<th>"."Status"."</th>";
      echo "<th>"."Guest Emailid"."</th>";
      echo "<th>". "Phone Number". "</th>";
      echo "<th>". "Gender". "</th>";
    echo "</tr>";
   echo "</thead>";
  echo "<tbody>";
    
      $x=1;
      while ($row1 = mysqli_fetch_assoc($result2)) 
      {
     echo "<tr class='table-danger'>"; 	
      
      echo "<th scope='row'>".$x."</th>";
      
      echo "<td width='20%'>". $row1['guest_name']. "</td>";
      echo "<td width='20%'>". $row1['status']. "</td>";
      echo "<td width='20%'>". $row1['guest_emailid']. "</td>";
      echo "<td width='20%'>". $row1['phone_number']. "</td>";
      echo "<td width='20%'>". $row1['guest_gender']. "</td>";
    echo "</tr>";
    
  echo "</tbody>";
 
	$x=$x+1;				
				} //end close off the if statement
		echo "</table>";		
		}
		$conn1-> close();
	}

	function submit_requests()
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


			$result3 = "SELECT * FROM new_guests_requests "; 
			$result4 = mysqli_query($conn1,$result3);
			if(mysqli_num_rows($result4) == 0)
				{ 
					("no records found"); 
				} 
			else 
				{ 
					
		echo "<table class='table table-hover table-striped  table-bordered'>";
	   	echo "<thead>";
	    echo "<tr>";
	    echo "<th>"."#"."</th>";
	    echo "<th>"."Guest Name"."</th>";
        echo "<th>"."Guest Email-id"."</th>";
        echo "<th>"."Phone Number"."</th>";
        echo "<th>"."Gender"."</th>";
	    echo "<th>"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."APPROVAL"."</th>";
	    echo "</tr>";
	   	echo "</thead>";
	  	echo "<tbody>";
    
      $y=1;
      while ($row2 = mysqli_fetch_assoc($result4)) 
      {
     echo "<tr class='table-danger'>"; 	
      
      echo "<th scope='row'>".$y."</th>";
      
      echo "<td width='17%'>". $row2['request_name']. "</td>";
      echo "<td width='17%'>". $row2['request_emailid']. "</td>";
      echo "<td width='17%'>". $row2['phonenumber']. "</td>";
      echo "<td width='17%'>". $row2['request_gender']. "</td>";
	  echo "<td width='35%'><button type='button' class='approve btn btn-info' id='".$row2["request_id"]."'>APPROVE</button>"."&nbsp;&nbsp;"."<button type='button' class='reject btn btn-danger' id='".$row2["request_id"]."'>REJECT</button></td>";
      	
    echo "</tr>";
    
  echo "</tbody>";
 
	$y=$y+1;				
				} //end close off the if statement
		echo "</table>";		
		}
		$conn1-> close();
	}

	if(isset($_POST["acton"])=="approve")
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

		$request_id= mysqli_real_escape_string($conn1, $_POST["request_id"]);	
		$result5= "SELECT * FROM new_guests_requests WHERE request_id='$request_id'";
		$result6= mysqli_query($conn1, $result5);
		$row= mysqli_fetch_assoc($result6);
		
		$name= $row['request_name'];
		$email= $row['request_emailid'];
		$phone= $row['phonenumber'];
		$gender= $row['request_gender'];

		$result7= "INSERT INTO new_guests(guest_name, guest_emailid, phone_number, guest_gender, status)
					VALUES('$name', '$email', '$phone', '$gender', 'YES')";
		// die($result7);
		
		if(mysqli_query($conn1, $result7)===TRUE){
			echo $name."request accepted";
			$result8= "DELETE FROM new_guests_requests WHERE request_id='$request_id'";
			mysqli_query($conn1, $result8);

		}
		else{
			echo "Error: " .$result7."<br>". $conn1->error;
		}
		

		$conn1->close();

	}


	if(isset($_POST["actin"])=="reject")
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

		$request_id= mysqli_real_escape_string($conn1, $_POST["request_id"]);	
		// $result5= "SELECT * FROM new_guests_requests WHERE request_id='$request_id'";
		// $result6= mysqli_query($conn1, $result5);
		// $row= mysqli_fetch_assoc($result6);
		
		// $name= $row['request_name'];
		// $email= $row['request_emailid'];
		// $phone= $row['phonenumber'];
		// $gender= $row['request_gender'];

		// $result7= "INSERT INTO new_guests(guest_name, guest_emailid, phone_number, guest_gender, status)
		// 			VALUES('$name', '$email', '$phone', '$gender', 'YES')";
		// die($result7);
		
		// if(mysqli_query($conn1, $result7)===TRUE){
		// 	echo $name."request accepted";
			$result9= "DELETE FROM new_guests_requests WHERE request_id='$request_id'";
			if(mysqli_query($conn1, $result9)===TRUE){
				echo "rejected";

		}
		else{
			echo "Error: " .$result9."<br>". $conn1->error;
		}
		

		$conn1->close();

	}
?> 
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
			
			$k="SELECT guest_emailid, phone_number FROM new_guests WHERE guest_emailid='$guest_emailid' OR phone_number='$phone_number' ";
			$l="SELECT request_emailid, phonenumber FROM new_guests_requests WHERE request_emailid='$guest_emailid' OR phonenumber='$phone_number' ";
			// die($qry);
			$resultk=mysqli_query($conn,$k);
			$resultl=mysqli_query($conn,$l);

			$m=mysqli_num_rows($resultk);
			$n=mysqli_num_rows($resultl);
			if ($m>0)  {
				
				die("This Person is already in our GUEST LIST.");
			}
			
			if ($n>0) {
					die("This person has already REQUESTED for the event");
				}	
			
			$sql = "INSERT INTO new_guests (guest_name, guest_emailid, phone_number, guest_gender)
					VALUES ('$guest_name', '$guest_emailid', '$phone_number', '$guest_gender')";

			if ($conn->query($sql) === TRUE) 
			{
			    return "New Guest Information has been successfully saved.";	
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

			$k="SELECT guest_emailid, phone_number FROM new_guests WHERE guest_emailid='$request_emailid' OR phone_number='$phonenumber' ";
			$l="SELECT request_emailid, phonenumber FROM new_guests_requests WHERE request_emailid='$request_emailid' OR phonenumber='$phonenumber' ";
			// die($qry);
			$resultk=mysqli_query($conn,$k);
			$resultl=mysqli_query($conn,$l);

			$m=mysqli_num_rows($resultk);
			$n=mysqli_num_rows($resultl);
			if ($m>0)  {
				
				die("This Person is already in our GUEST LIST.");
			}
			
			if ($n>0) {
					die("This person has already REQUESTED for the event");
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
						SET status='CONFIRM'
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
			       
			        echo "<br><h4><span style='font-family: Bangers;'>EVENT NAME:</span><span style='font-size:30px;'>" . $row["event_name"]. "</span></h4> 
			        <br><h4><span style='font-family: Bangers;'>EVENT THEME:</span><span style='font-size:30px;'>" . $row["event_theme"]. "</h4> 
			        <br><h4><span style='font-family: Bangers;'>EVENT DATE:</span><span style='font-size:30px;'>" . $row["event_date"]. "</h4> 
			        <br><h4><span style='font-family: Bangers;'>EVENT VENUE:</span><span style='font-size:30px;'>" . $row["event_venue"]. "</h4><hr class='my-1'><br>";
			        
			    }
			} else
			{
			    echo "0 results";
			}
			$conn->close();
			
		}


		function rsvp()
			{
				//die("teri");
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";
			
			$conn1 = new mysqli($servername, $username, $password, $dbname);
			if ($conn1->connect_error) {
			    die("Connection failed: " . $conn1->connect_error);
			} 
			$output = ""; 
			$procedure = "
				CREATE PROCEDURE selectguest()
				BEGIN  
					SELECT * FROM new_guests;
				END;
				";
				if(mysqli_query($conn1, "drop PROCEDURE IF EXISTS selectguest")){
					if (mysqli_query($conn1,$procedure)) {
						$query ="CALL selectguest()";
						$result1= mysqli_query($conn1,$query);
						// die("me");
						$output .='<table class="table table-hover table-striped table-bordered table-responsive">';
						$output .='<thead>';
						$output .=	'<tr>';
						$output .=  '<th>#</th>';	
						$output .=	'<th>Name</th>';			
						$output .=	'<th>Email</th>';		
						$output .=	'<th>Phone No</th>';	
						$output .=	'<th>Gender</th>';
						$output .=	'<th>Status</th>';							
						$output .=	'</tr>';
						$output .=	'</thead>';
						$output .=	'<tbody>';	
						
						if (mysqli_num_rows($result1)>0) {
							$x=1;
							while ($row=mysqli_fetch_array($result1)) {
								$output .='<tr class="table-danger">'; 	
		 				        
		 				        $output .='<th scope="row">'.$x.'</th>';
								
								$output .='<td width="20%">'.$row["guest_name"].'</td>';	
								$output .='<td width="20%">'.$row["guest_emailid"].'</td>';
								$output .='<td width="20%">'.$row["phone_number"].'</td>' ;
								$output .='<td width="20%">'.$row["guest_gender"].'</td>' ;
								$output .='<td width="20%">'.$row["status"].'</td>' ;
								$output .='</tr>';
								$x=$x+1;		
							}
						}else{

							$output .='<tr class="table-info">';
							$output .='<td colspan="6">NO GUESTS IN THE LISTS</td>';
							$output .=	'</tr>';
							
						}
						$output .='</tbody>';
						
						
						$output .='</table>';
						// var_dump($output);
						// die("over");
						echo $output;
					}
				}						
			}


	function submit_requests()
			{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";
			

			$conn1 = new mysqli($servername, $username, $password, $dbname);
			
			if ($conn1->connect_error) {
			    die("Connection failed: " . $conn1->connect_error);
			} 
			
			$output = ''; 
			$procedure = "
				CREATE PROCEDURE select_requested_guest()
				BEGIN  
					SELECT * FROM new_guests_requests;
				END;
				";
				
				if(mysqli_query($conn1, "drop PROCEDURE IF EXISTS select_requested_guest"))
				{
					if (mysqli_query($conn1,$procedure)) 
					{
						$query ="CALL select_requested_guest()";
						$result3= mysqli_query($conn1,$query);
						$output .='
								<table class="table table-hover table-striped
								table-bordered table-responsive">
									<thead>
										<tr>	
											<th>#</th>
											<th>Guest Name</th>
											<th>Guest Email-id</th>
											<th>Phone No.</th>
											<th>Gender</th>
											<th>Status</th>
											<th>APPROVAL</th>
										</tr>
									</thead>
									<tbody>	
						';
		    			if (mysqli_num_rows($result3) > 0){
							$y=1;
							while ($row2=mysqli_fetch_array($result3)) {
								$output .='
										<tr class="table-danger">
										<th scope="row">'.$y.'</th>	
											<td width="13%">'.$row2["request_name"].'</td>
											<td width="18%">'.$row2["request_emailid"].'</td>
											<td width="13%">'.$row2["phonenumber"].'</td>
											<td width="13%">'.$row2["request_gender"].'</td>
											<td width="13%">'.$row2["status"].'</td>
											<td width="30%">
											<button type="button" class="approve btn btn-info" id="'.$row2["request_id"].'">APPROVE</button> &nbsp; 
											<button type="button" class="reject btn btn-danger" id="'.$row2["request_id"].'">REJECT</button>
											</td>
										</tr>
								';
							$y=$y+1;
							}
						}else{

							$output .='
										<tr class="table-info">
											<td colspan="6"> NO REQUESTS YET !!!!!!!</td>
										</tr>
							';
						}
						$output .='</tbody>
								</table>';
						echo $output;
					}
				}						
			$conn1->close();
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
							VALUES('$name', '$email', '$phone', '$gender', 'CONFIRM')";
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
					$results=" SELECT status FROM new_guests_requests WHERE status='REJECTED' AND request_id='$request_id'";
					$confirm=mysqli_query($conn1, $results);
					if (mysqli_num_rows($confirm)>0) {
						die("ALREADY REJECTED");
					}else{
					$result9= "UPDATE new_guests_requests 
								SET status='REJECTED' 
								WHERE request_id='$request_id'";
					
					if(mysqli_query($conn1, $result9)===TRUE){
						echo "rejected";
				}	
				else{
					echo "Error: " .$result9."<br>". $conn1->error;
				}}
					
				

				$conn1->close();

			}

?> 
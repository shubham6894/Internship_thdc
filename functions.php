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

		$conn = new mysqli($servername, $username, $password, $dbname);
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
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}
		
		$k="SELECT guest_emailid, phone_number FROM new_guests WHERE guest_emailid='$guest_emailid' OR phone_number='$phone_number' ";
		$l="SELECT request_emailid, phonenumber FROM new_guests_requests WHERE request_emailid='$guest_emailid' OR phonenumber='$phone_number' ";
		$resultk=mysqli_query($conn,$k);
		$resultl=mysqli_query($conn,$l);

		$m=mysqli_num_rows($resultk);
		$n=mysqli_num_rows($resultl);
		if ($m>0)  
		{	
			die("This Person is already in our GUEST LIST.");
		}
		
		if ($n>0) 
		{
			die("This person has already REQUESTED for the event");
		}	
		
		$sql = "INSERT INTO new_guests (guest_name, guest_emailid, phone_number, guest_gender,status)
				VALUES ('$guest_name', '$guest_emailid', '$phone_number', '$guest_gender','PENDING')";

		if ($conn->query($sql) === TRUE) 
		{
		    return "New Guest Information has been successfully saved.";	
		} 
		else 
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

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}

		$k="SELECT guest_emailid, phone_number FROM new_guests WHERE guest_emailid='$request_emailid' OR phone_number='$phonenumber' ";
		$l="SELECT request_emailid, phonenumber FROM new_guests_requests WHERE request_emailid='$request_emailid' OR phonenumber='$phonenumber' ";
		$resultk=mysqli_query($conn,$k);
		$resultl=mysqli_query($conn,$l);

		$m=mysqli_num_rows($resultk);
		$n=mysqli_num_rows($resultl);
		if ($m>0)  
		{	
			die("This Person is already in our GUEST LIST.");
		}
		
		if ($n>0) 
		{
			die("This person has already REQUESTED for the event");
		}

		$sql = "INSERT INTO new_guests_requests (request_name, request_emailid, phonenumber, request_gender,status)
				VALUES ('$request_name', '$request_emailid', '$phonenumber', '$request_gender','REQUESTED')";

		if ($conn->query($sql) === TRUE) 
		{
		    return "Request has been successfully saved.";
		} 
		else 
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

		$your_email= @$_POST['user_email'];
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}
		
		$k="SELECT * FROM new_guests WHERE guest_emailid='$your_email'";
		$result=mysqli_query($conn,$k);
		$p=mysqli_num_rows($result);
		
		$l="SELECT * FROM new_guests WHERE status='CONFIRM' AND guest_emailid='$your_email'";
		$result1=mysqli_query($conn,$l);
		$m=mysqli_num_rows($result1);
		if ($m>0) 
		{
			die("YOU ARE ALREADY CONFIRMED IN OUR GUEST LIST. THANK YOU!!");
		}

		if ($p>0) 
		{
			$row= $result->fetch_assoc();
			$uniquecode=md5(uniqid(rand()));
			$encryptuniquecode=base64_encode($uniquecode);
			
			echo "<a target='_blank' href='http://ec2-13-59-90-252.us-east-2.compute.amazonaws.com/Internship_thdc/rsvp_confirmation_page.php/?passkey=$encryptuniquecode'>CLICK TO RSVP</a>";
			$sql="UPDATE new_guests SET random_token='$uniquecode' WHERE guest_emailid='$your_email'";
			mysqli_query($conn, $sql);
		}
		else
		{
			echo "SORRY BUT YOU ARE NOT IN OUR GUEST LIST.HOPE TO SEE YOU ANOTHER TIME";
		}
		$conn->close();		
	}

	function rsvpconfirm()
	{
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="database_for_coloredcow";
		$conn=new mysqli($servername, $username,$password,$dbname);
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}	
		$id_guest=$_POST['guestid'];	
		$updatestatus=" UPDATE new_guests
						SET status='CONFIRM'
						WHERE guestid='$id_guest' ";				
		if(mysqli_query($conn,$updatestatus)===TRUE)
		{
			echo "<h4>YOUR RESPONSE IS SUCCESSFULLY UPDATED <br><a role='button' class='btn btn-outline-success' href='http://localhost/Internship%20RSVP/index.php'>HOME</a></h4>";
		}
		else
		{
			echo "error";
		}		
	}

	function show_events()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "database_for_coloredcow";

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT event_name, event_theme, event_date, event_venue FROM new_event ORDER BY `event_date` asc limit 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
		    while($row = $result->fetch_assoc()) 
		    {   
		        echo "<br><span style='font-size:60px;'>" . $row["event_name"]. "</span><br> 
		        <br><span style='font-size:30px;'><i class='fa fa-calendar' aria-hidden='true'></i>&nbsp;" . $row["event_date"]. "</span><br> 
		        <br><span style='font-size:30px;'><i class='fa fa-map-marker fa-lg' aria-hidden='true'></i>&nbsp;" . $row["event_venue"]. "</span><br><hr class='my-1'><br>";  
		    }
		} 
		else
		{
		    echo "NO EVENTS TO BE DISPLAYED....";
		}
		$conn->close();		
	}

	function rsvp()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "database_for_coloredcow";
		
		$conn1 = new mysqli($servername, $username, $password, $dbname);
		if ($conn1->connect_error) 
		{
		    die("Connection failed: " . $conn1->connect_error);
		} 
		$output = ""; 
		$procedure = "
						CREATE PROCEDURE selectguest()
						BEGIN  
							SELECT * FROM new_guests;
						END;
						";
			if(mysqli_query($conn1, "drop PROCEDURE IF EXISTS selectguest"))
			{
				if (mysqli_query($conn1,$procedure)) 
				{
					$query ="CALL selectguest()";
					$result1= mysqli_query($conn1,$query);
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
					
					if (mysqli_num_rows($result1)>0) 
					{
						$x=1;
						while ($row=mysqli_fetch_array($result1)) 
						{
							$output .='<tr class="table-danger">'; 	
	 				        $output .='<th scope="row">'.$x.'</th>';
							$output .='<td width="20%">'.$row["guest_name"].'</td>';	
							$output .='<td width="20%">'.$row["guest_emailid"].'</td>';
							$output .='<td width="20%">'.$row["phone_number"].'</td>' ;
							$output .='<td width="20%">'.$row["guest_gender"].'</td>' ;
							
							if ($row['status']=='CONFIRM') 
							{
								$output .='<td width="20%" style="color : green">'.$row["status"].'</td>' ;
							}
							else
							{
								$output .='<td width="20%" style="color:red;">'.$row["status"].'</td>' ;	
							}	
							$output .='</tr>';
							$x=$x+1;		
						}
					}
					else
					{
						$output .='<tr class="table-info">';
						$output .='<td colspan="6">NO GUESTS IN THE LISTS</td>';
						$output .=	'</tr>';	
					}
						$output .='</tbody>';						
						$output .='</table>';
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
		if ($conn1->connect_error) 
		{
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
							<tbody>';
				    			if (mysqli_num_rows($result3) > 0)
				    			{
									$y=1;
									while ($row2=mysqli_fetch_array($result3)) 
									{
										$output .='
												<tr class="table-danger">
													<th scope="row">'.$y.'</th>	
													<td width="13%">'.$row2["request_name"].'</td>
													<td width="18%">'.$row2["request_emailid"].'</td>
													<td width="13%">'.$row2["phonenumber"].'</td>
													<td width="13%">'.$row2["request_gender"].'</td>';
													if ($row2['status']=='REQUESTED') 
													{
														$output .='<td width="13%" style="color : blue">'.$row2["status"].'</td>' ;
													}
													else
													{
														$output .='<td width="13%" style="color:red;">'.$row2["status"].'</td>' ;	
													}
													
													$output .='<td width="30%">
													<button type="button" class="approve btn btn-info" id="'.$row2["request_id"].'">Approve</button> &nbsp; 
													<button type="button" class="reject btn btn-danger" id="'.$row2["request_id"].'">Reject</button>
													</td>
												</tr>
											';
									$y=$y+1;
									}
								}
								else
								{
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
	
	function showallevents()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "database_for_coloredcow";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM new_event ORDER BY 'event_date'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		    while($row = $result->fetch_assoc()) 
		    {
		        echo "<h6>EVENT NAME:</h6> ". $row['event_name']." <br><br><h6>EVENT DATE:</h6> ". $row['event_date']." <br><br><h6>EVENT VENUE:</h6> ". $row['event_venue']." <br><br>
		        <button type='button' class='edit btn btn-info' id='".$row["event_id"]."' data-toggle='modal' data-target='#editModal' data-whatever='@mdo'> Edit </button> &nbsp; 
				<button type='button' class='delete btn btn-danger' id='".$row["event_id"]."'> Delete </button> <hr>";
		    }
		} 
		else
		{
		    echo "0 results";
		}
		$conn->close();
	}

	if(isset($_POST["acton"])=="approve")
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "database_for_coloredcow";										   
		$conn1 = new mysqli($servername, $username, $password, $dbname);
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
		if(mysqli_query($conn1, $result7)===TRUE)
		{
			echo $name."  REQUEST ACCEPTED";
			$result8= "DELETE FROM new_guests_requests WHERE request_id='$request_id'";
			mysqli_query($conn1, $result8);
		}
		else
		{
			echo "Error: " .$result7."<br>". $conn1->error;
		}
		$conn1->close();
	}

	function reject_guest()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "database_for_coloredcow";										   
		$conn1 = new mysqli($servername, $username, $password, $dbname);
		if ($conn1->connect_error) 
		{
			die("Connection failed: " . $conn1->connect_error);
		}
		
		$request_id= mysqli_real_escape_string($conn1, $_POST["request_id"]);	
		$results=" SELECT status FROM new_guests_requests WHERE status='REJECTED' AND request_id='$request_id'";
		$confirm=mysqli_query($conn1, $results);
		if (mysqli_num_rows($confirm)>0) 
		{
			die("ALREADY REJECTED");
		}
		else
		{
			$result9= "UPDATE new_guests_requests 
						SET status='REJECTED' 
						WHERE request_id='$request_id'";
			
			if(mysqli_query($conn1, $result9)===TRUE)
			{
				echo "REJECTED";
			}	
			else
			{
				echo "Error: " .$result9."<br>". $conn1->error;
			}
		}
		$conn1->close();
	}

	function extract_event_data()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "database_for_coloredcow";

		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		} 
		$event_id=$_POST["event_id"];
		$sql = "SELECT * FROM new_event WHERE event_id='$event_id' ";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		    $row = $result->fetch_assoc();
		    echo $row["event_name"].",".$row["event_date"].",".$row["event_venue"].",".$row["event_id"];
		} 
		else
		{
		    echo "0 results";
		}
		$conn->close();
	}

	function update_event_data()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "database_for_coloredcow";

	   	$event_name=  @$_POST['update_event_name'];
	   	$event_date=  @$_POST['update_event_date'];
	   	$event_venue= @$_POST['update_event_venue'];
	   	$event_id=    @$_POST["update_event_id"];
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "UPDATE new_event
				SET event_name='$event_name',event_date= '$event_date',event_venue= '$event_venue'
				WHERE event_id='$event_id' ";
		
		if ($conn->query($sql) === TRUE) 
		{  
		    echo "Information has been successfully updated";
		} 
		else 
		{
		    return "Error: " . $sql . "<br>" . $conn->error ;
		}
		$conn->close();
	}

	function delete_event()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "database_for_coloredcow";

		$event_id= @$_POST["update_event_id"];
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "DELETE FROM new_event
				WHERE event_id='$event_id' ";
		if ($conn->query($sql) === TRUE) 
		{	    
		    echo "Information has been successfully deleted";
		} 
		else 
		{
		    return "Error: " . $sql . "<br>" . $conn->error ;
		}
		$conn->close();
	}
?> 
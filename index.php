<!doctypxe html>
<html>
	<head>
		<title>ColoredCow</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>
		
			<body style="background-color:transparent;"><center>

				  
				<nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-faded">
					
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="				navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						
						<a class="navbar-brand" href="#">ColoredCow</a>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="host_control_page.php">NEW EVENT <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#">Disabled</a>
									</li>
								</ul>
							    
							</div>
				</nav>

					<div class="container-fluid">
						
						<div class="container">
							<?php
								require("functions.php");
								update_details();

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
								        echo "<h6>EVENT NAME:</h6>" . $row["event_name"]. "<br><br><h6>EVENT THEME:</h6>" . $row["event_theme"]. "<br><br><h6>EVENT DATE:</h6>" . $row["event_date"]. "<br><br><h6>EVENT VENUE:</h6>" . $row["event_venue"]. "<br>------------------------------------------------------------------------------------<br><br>";
								    }
								} else
								{
								    echo "0 results";
								}
								$conn->close();
							?>
							<a href="allevents.php" class="btn btn-link" role="button">Show All Events</a>

						 <hr>
						</div>
	
							<div class="container">
								<div class="row">
									<div class="col-lg-6">
										<div class="alert alert-success" role="alert">
  											<strong>THANK YOU!</strong> FOR YOUR PRECIOUS TIME  .
										</div>
									<center><h4>PLEASE ENTER YOUR DETAILS AND PREFERENCES</h4></center>
										<form method="POST" action="#">
												<div class="form-group row">
												  	<label for="example-text-input" class="col-2 col-form-label">YOUR EMAIL</label>
											  		<div class="col-10">
											    		<input class="form-control" type="text" placeholder="Enter your email-id" name="your_email" id="email-id">
													</div>
												</div>
											
									

												<div class="form-group row">
												 <!--  	<label for="example-text-input" class="col-2 col-form-label">FOOD PREFERENCE
												  	</label>
										  		<div class="col-6">
														    

												<div class="form-check form-check-inline">
														  <label class="form-check-label">
														    <input class="form-check-input" type="radio" name="preference" id="inlineRadio1" value="VEG"> VEG.
														  </label>
												</div>

												<div class="form-check form-check-inline">
														  <label class="form-check-label">
														    <input class="form-check-input" type="radio" name="preference" id="inlineRadio2" value="NONVEG"> NON-VEG.
														  </label>

												</div>
												 -->							
												<!-- </div> -->
												<div class="col-10">
												<button class="btn btn-outline-success" type="Submit" name="Submit">RSVP</button>
												</div>
												</div>
										</form>

									
									</div>
									
								
									<div class="col-lg-6">							
									 
										<div id="accordion" role="tablist" aria-multiselectable="true">
										  <div class="card">
										    <div class="card-header" role="tab" id="headingOne">
										      <h5 class="mb-0">
										        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										          WANT TO SEE WHO ELSE IS COMING?
										        </a>
										      </h5>
										    </div>

										    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
										      <div class="card-block">
											<div class="container">
											
  		
											
											<?php
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


											$result1 = "SELECT * FROM new_guests limit 10"; 
											$result2 = mysqli_query($conn1,$result1);
											if(mysqli_num_rows($result2) == 0)
											{ 
											echo("no records found"); 
											} else 
											{ 
											echo 

											"<table border='1'> 
											<tr> 
											<th> guest_name </th> 
											 
											 
											<th> status </th>
											<th> guest_emailid </th> 
											 
											</tr>";

											while($row1 = mysqli_fetch_assoc($result2)) 
											{ 
											echo "<tr>"; 
											echo "<td>" . $row1['guest_name'] . "</td>"; 
											// echo "<td>" . $row1['phone_number'] . "</td>"; 
											// echo "<td>" . $row1['food_preference'] . "</td>"; 
											echo "<td>" . $row1['status'] . "</td>"; 
											echo "<td>" . $row1['guest_emailid'] . "</td>"; 
											echo "</tr>";

											}

											echo "</table>"; 
											} //end close off the if statement
											?>	        



										      </div>
										    </div>
										  </div>


									  
									</div>
							</div>
						</div>
																	

						<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
						
			</body>
	
</html>
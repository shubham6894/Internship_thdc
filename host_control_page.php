<!doctypxe html>	
<html>
	<head>
		<title>RSVP</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
	</head>
		
			<body style="background-color:transparent;"><center>

				  
				<nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-faded">
					
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						
						<a class="navbar-brand" href="#">RSVP</a>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
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
										events();
										guest_details();

									?>
									<center><h1>ADD NEW EVENT</h1></center>
									<form method="POST" action="#">
									
									<div class="form-group row">
									  	<label for="example-text-input" class="col-2 col-form-label">Event Name</label>
								  		<div class="col-6">
								    		<input class="form-control" type="text" placeholder="Enter a Name for the Event" name="event_name" id="event">
										</div>
									</div>
							
									
									<div class="form-group row">
							  			<label for="example-text-input" class="col-2 col-form-label">Event Theme</label>
								  			<div class="col-6">
								    			<input class="form-control" type="text" placeholder="Enter a Theme For the Event" name="event_theme" id="theme">
								  			</div>
									</div>
								
									
									<div class="form-group row">
				  						<label for="example-date-input" class="col-2 col-form-label">Event Date</label>
					  						<div class="col-6">
					    						<input class="form-control" type="date" value="" name="event_date" id="date">
					  						</div>
									</div>
								
									
									
									<div class="form-group row">
							  			<label for="example-text-input" class="col-2 col-form-label">Event Venue</label>
							  				<div class="col-6">
							    				<input class="form-control" type="text" placeholder="Enter the location for the Event" name="event_venue"id="venue">
									  		</div>
									</div>
								
									
									<button class="btn btn-outline-success" type="Submit" name="Submit">Submit</button>
									</form>
							</div>
								
									
							
							<div class="container">
								<hr>
									
									<center><h1>ADD NEW GUESTS</h1></center>
												
									<form method="POST" action="#">
										<div class="form-group row">
										  	<label for="Guests" class="col-2 col-form-label">GUESTS</label>
										  		<div class="col-1">
													<label class="custom-control custom-checkbox">
													  	<input type="checkbox" class="custom-control-input">
													  	<span class="custom-control-indicator"></span>
													  	<span class="custom-control-description">ALL</span>
													</label>
												</div>
								
										</div>
										

										<div class="form-group row">
											<label for="New Guests" class="col-2 col-form-label">New Guests: </label>
												<div class="col-6">
												   	<input class="form-control" type="text" placeholder="Enter Name of the Guest" name="guest_name" id="guest_name">

								  				</div>
										</div>
										

										<div class="form-group row">
											<label for="example-text-input" class="col-2 col-form-label"> </label>
										  		<div class="col-6">
										    		<input class="form-control" type="text" placeholder="Enter Email id of the Guest" name="guest_emailid" id="guest_emailid">
										    	</div>
										</div>

										<div class="form-group row">
											<label for="example-text-input" class="col-2 col-form-label"> </label>
										  		<div class="col-6">
										    		<input class="form-control" type="number" placeholder="Enter phone number of the Guest" name="phone_number" id="phone_number">
										    	</div>
										</div>
									

									<button class="btn btn-outline-success" type="Submit" name="Submit1">Submit</button>
									</form>	
							</div>
						</div>
						
						<!-- <script type="text/javascript" src="main.js"></script>> -->
						<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
						
			</body>
	
</html>
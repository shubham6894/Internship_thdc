<!doctype html>	
<html>
	<head>
		<title>RSVP</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			
	</head>
		
			<body><center>

				  
				<nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse">
					
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						
						<a class="navbar-brand" href="#">RSVP</a>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="admin.php">Home<span class="sr-only">(current)</span></a>
									</li>
									<!-- <li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#">Disabled</a>
									</li> -->
								</ul>
							    
							</div>
				</nav>
					
						<div class="container-fluid">
							

							<div class="container">

							
					<div class="jumbotron">
  			<?php
			require("functions1.php");
			show_events();
			?>
			<hr>
			<div class="row">
							<div class="col-lg-6">
			<u><h5>SEE ALL PREVIOUS EVENTS</u> <span class="badge badge-default">click on the link below</span></h5>
			<a href="allevents1.php" class="btn btn-success" role="button">Show All Events</a>
			</div>
			<div class="col-lg-6">
					<u><h5>CREATE A NEW EVENT </u><span class="badge badge-default">click on the button below</span></h5>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ADD NEW EVENT</button>
					</div>
					</div>
					</center>

			<form id="event_form">				
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">NEW EVENT</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			     
			      <div class="modal-body" style="background-color: whitesmoke;">
			        <form id="event_form">
			          <div class="form-group">
			            <label for="event-name" class="form-control-label">EVENT NAME:</label>
			            <input type="text" class="form-control" placeholder="Enter a Name for the Event" name="event_name" id="event_name" required>
			          </div>
			          <div class="form-group">
			            <label for="event-theme" class="form-control-label">EVENT THEME:</label>
			            <input type="text" class="form-control" placeholder="Enter a Theme for the Event" name="event_theme" id="event_theme" required>
			          </div>
			          <div clas s="form-group">
			            <label for="event-date" class="form-control-label">EVENT DATE:</label>
			            <input type="date" class="form-control" placeholder="Enter a Date for the Event" name="event_date" id="event_date" required>
			          </div>
			          <div class="form-group">
			            <label for="event-venue" class="form-control-label">EVENT VENUE:</label>
			            <input type="text" class="form-control" placeholder="Enter a Venue for the Event" name="event_venue" id="event_venue" required>
			          </div>
			          
			        
			      </div>
			     
			      <div class="modal-footer">
			        <button type="button" class="btn btn-success" name="Submit" id="Submit_event">CREATE</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			        </form> 
			      </div>
			    </div>
			  </div>
			</div>
								
									 
									<!-- <center><h1>ADD NEW EVENT</h1></center>
									<form id="event_form">
									
									<div class="form-group row">
									  	<label for="example-text-input" class="col-2 col-form-label">Event Name</label>
								  		<div class="col-lg-6">
								    		<input class="form-control" type="text" placeholder="Enter a Name for the Event" name="event_name" id="event_name" required>
										</div>
									</div>
							
									
									<div class="form-group row">
							  			<label for="example-text-input" class="col-2 col-form-label">Event Theme</label>
								  			<div class="col-lg-6">
								    			<input class="form-control" type="text" placeholder="Enter a Theme For the Event" name="event_theme" id="event_theme" required>
								  			</div>
									</div>
								
									
									<div class="form-group row">
				  						<label for="example-date-input" class="col-2 col-form-label">Event Date</label>
					  						<div class="col-lg-6">
					    						<input class="form-control" type="date" name="event_date" id="event_date" required>
					  						</div>
									</div>
								
									
									
									<div class="form-group row">
							  			<label for="example-text-input" class="col-2 col-form-label">Event Venue</label>
							  				<div class="col-lg-6">
							    				<input class="form-control" type="text" placeholder="Enter the location for the Event" name="event_venue" id="event_venue" required>
									  		</div>
									</div>
								
									
									<button class="btn btn-outline-success" type="button" name="Submit" id="Submit_event">Submit</button>
									</form>

							</div>
								
								<div class="container">
								<hr>
									
									<center><h1>ADD NEW GUESTS</h1></center>
												
									<form method="POST" id="guest_form">
										<!-- <div class="form-group row">
										  	<label for="Guests" class="col-lg-2 col-form-label">GUESTS</label>
										  		<div class="col-lg-1">
													<label class="custom-control custom-checkbox">
													  	<input type="checkbox" class="custom-control-input">
													  	<span class="custom-control-indicator"></span>
													  	<span class="custom-control-description">ALL</span>
													</label>
												</div>
								
										</div> -->
										
										<!-- <div class="form-group row">
											<label for="New Guests" class="col-2 col-form-label">New Guests: </label>
												<div class="col-lg-6">
												   	<input class="form-control" type="text" placeholder="Enter Name of the Guest" name="guest_name" id="guest_name" required>

								  				</div>
										</div>
										

										<div class="form-group row">
											<label for="example-text-input" class="col-2 col-form-label"> </label>
										  		<div class="col-lg-6">
										    		<input class="form-control" type="text" placeholder="Enter Email id of the Guest" name="guest_emailid" id="guest_emailid" required>
										    	</div>
										</div>

										<div class="form-group row">
											<label for="example-text-input" class="col-2 col-form-label"> </label>
										  		<div class="col-lg-6">
										    		<input class="form-control" type="number" placeholder="Enter phone number of the Guest" name="phone_number" id="phone_number" required>
										    	</div>
										</div>
									

									<button class="btn btn-outline-success" type="button" name="Submit" id="Submit_guests">Submit</button>
									</form>	
							</div> --> 
						</div>
						


						<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
						</script>

						<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
						</script>

						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
						</script>
						
			</body>
						<script type="text/javascript" src="main1.js"></script>
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
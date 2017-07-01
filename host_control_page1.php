<!doctype html>	
<html>
	<head>
		<title>RSVP</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css?family=Luckiest Guy" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Margarine" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
			
	</head>
		
			<body>

				  
				<nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse" style="height: 70px;">
					
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						
						<a class="navbar-brand" href="#" style="font-family: 'Pacifico';">'EVENTS'</a>

							<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link" href="admin.php" style="font-family: 'Luckiest Guy'; font-size: 20px;">SOIREE<span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="index1.php" style="font-family: 'Luckiest Guy'; font-size: 20px;">GUESTS<span class="sr-only">(current)</span></a>
									</li>
									
								</ul>
							    
							</div>
				</nav>
					
						<div class="container-fluid">
									

							<div class="container">
									<center>
							
					<div class="jumbotron text-white" style="background-image: url('black-wallpaper-10.jpg'); ">
					<div class="alert alert-danger col-lg-6" role="alert" style="font-family: 'Bangers'; font-size: 30px;">
  											<strong>LATEST EVENT!</strong> WITH DETAILS.
										</div>
  			<?php
			require("functions1.php");
			show_events();
			?>
			</div>
			</center>
			</div>
			
			<hr>
			<div class="container">
			
			<div class="jumbotron text-white" style="background-image: url('black-wallpaper-10.jpg');">
			<div class="row">
			<div class="col-lg-6">
			<center>
							<div class="container">
							<div style="width: 105%; border: 2px dashed whitesmoke; padding-bottom:45px;">
							<h5 style="font-family: 'Margarine'; font-size: 23px; padding-top:45px; ">SEE ALL PREVIOUS EVENTS<span class="badge badge-success">click on the button below</span></h5>
							<a href="allevents1.php" class="btn btn-outline-success" role="button">Show All Events</a>
							</div>
							</div>
							</center>


			
			</div>
			<div class="col-lg-6">
					
					<center>
							<div class="container">
							<div style="width: 105%; border: 2px dashed whitesmoke; padding-bottom:45px;">
							<h5 style="font-family: 'Margarine'; font-size: 23px; padding-top:45px; ">CREATE A NEW EVENT<span class="badge badge-success">click on the button below</span></h5>
							<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ADD NEW EVENT</button>
							</div>
							</div>
							</center>

					
					</div>
					</div>
					</div>
					
					</div>
					


			<div class="container">				
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="modal-title" id="exampleModalLabel">NEW EVENT</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			     
			      <div class="modal-body" style="background-color: whitesmoke;">
			        
			        <form id="event_form">
			          <div class="form-group">
			            <label for="event-name" class="form-control-label"><h6>EVENT NAME:</h6></label>
			            <div class="col-lg-8">
			            <input type="text" class="form-control" placeholder="Enter a Name for the Event" name="event_name" id="event_name" required>
			            </div>
			          </div>
			          <div class="form-group">
			            <label for="event-theme" class="form-control-label"><h6>EVENT THEME:</h6></label>
			            <div class="col-lg-8">
			            <input type="text" class="form-control" placeholder="Enter a Theme for the Event" name="event_theme" id="event_theme" required>
			            </div>
			          </div>
			          <div class="form-group">
			            <label for="event-date" class="form-control-label"><h6>EVENT DATE:</h6></label>
			            <div class="col-lg-8">
			            <input type="date" class="form-control" placeholder="Enter a Date for the Event" name="event_date" id="event_date" required>
			            </div>
			          </div>
			          <div class="form-group">
			            <label for="event-venue" class="form-control-label"><h6>EVENT VENUE:</h6></label>
			            <div class="col-lg-8">
			            <input type="text" class="form-control" placeholder="Enter a Venue for the Event" name="event_venue" id="event_venue" required>
			            </div>
			          </div>
			          
			        
			     
			     
			      <div class="modal-footer">
			        <button type="button" class="btn btn-success" name="Submit" id="Submit_event">CREATE</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			         
			      </div>
					</form>			    
			    </div>
			  </div>
			</div>
			</div>
								
			</div>
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
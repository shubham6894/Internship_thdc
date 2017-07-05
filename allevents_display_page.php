<!doctype html>
<html>
	<head>
		<title>AllEvents</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css?family=Luckiest Guy" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link href="https://fonts.googleapis.com/css?family=Paprika" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
	<style type="text/css">
        .btn:hover{
            cursor: pointer;
        }
        a:hover{
            cursor: pointer;
            background-color:grey ;
        }
    </style>
	</head>
		
			<body style="background-color:transparent;"><center>
						<nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse">
					
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						
						<a class="navbar-brand" href="#" style="font-family: 'Pacifico';">ColoredCow</a>

							<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
								<ul class="navbar-nav ">
									<li class="nav-item active">
										<a class="nav-link" href="index.php"><H5 style="font-family: 'Luckiest Guy'; font-size: 20px;">
										<i class="fa fa-home" aria-hidden="true"></i>
										HOME</H5> <span class="sr-only">(current)</span></a>
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

						<div class="container" style="font-family: 'Bangers'; font-size: 25px;">
						<h3 style="font-family: 'Paprika'; font-size: 50px;""><span class="badge badge-info">ALL EVENTS</span></h3>
						<hr>

									<!-- <a href='index.php'> <h6>HOME</h6></a> -->
									<!-- <?php
										
										
										// require("functions.php");
										// update_details();

										
									?> -->
									<div id="all_events">
										
									</div>
									</div>
						<div class="container">				
						<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="editModalLabel" style="font-family: 'Bangers'; font-size: 30px;">EDIT EVENT</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						     
						      <div class="modal-body" style="background-color: whitesmoke;">
						        
						        <form id="edit_event">
						          <div class="form-group">
						            <label for="event-name" class="form-control-label"><h6>EVENT NAME:</h6></label>
						            <div class="col-lg-8">
						            <input type="text" class="form-control" placeholder="Enter a Name for the Event" name="update_event_name" id="update_event_name" required>
						            </div>
						          </div>
						          
						          <div class="form-group">
						            <label for="event-date" class="form-control-label"><h6>EVENT DATE:</h6></label>
						            <div class="col-lg-8">
						            <input type="date" class="form-control" placeholder="Enter a Date for the Event" name="update_event_date" id="update_event_date" required>
						            </div>
						          </div>
						          
						          <div class="form-group">
						            <label for="event-venue" class="form-control-label"><h6>EVENT VENUE:</h6></label>
						            <div class="col-lg-8">
						            <input type="text" class="form-control" placeholder="Enter a Venue for the Event" name="update_event_venue" id="update_event_venue" required>
						            </div>
						          </div>
						          <input type="hidden" name="update_event_id" id="update_event_id">
						        
						     
						     
						      <div class="modal-footer">
						        <button type="button" class="btn btn-success" name="update_event" id="update_event">Update</button>
						        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						         
						      </div>
								</form>			    
						    </div>


									<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
									</script>
									
									<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
									</script>
									
									<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
									</script>
						
			</body>
			<script type="text/javascript" src="main.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>			
</html>
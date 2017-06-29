<!doctype html>
<html>
	<head>
		<title>ColoredCow</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>
		
			<body>

				  
				<nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse" style="width:100%">
					
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						
						<a class="navbar-brand" href="#">'GUESTS'</a>

							<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link" href="admin.php">Soiree<span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="host_control_page1.php">Events<span class="sr-only">(current)</span></a>
									</li>
									
								</ul>
							    
							</div>
				</nav>

					<div class="container-fluid">
					<div class="container">
							
							<h1> All Guests Details <span class="badge badge-warning">Below</span></h1>
							
							<hr>
							<?php
								require("functions1.php");
							?>
							
							
							<div class="jumbotron text-white" style="background-image: url('69714266-event-wallpapers.jpg');opacity:0.6;">
							<div class="row">
								<div class="col-lg-6">
							<center>
							<div class="container">
							<div style="width: 105%; border: 2px dashed whitesmoke; padding-bottom:45px;">
							<h5 style="padding-top:45px; ">SEE ALL PREVIOUS EVENTS<span class="badge badge-danger">click on the button below</span></h5>
							<a href="allevents1.php" class="btn btn-outline-danger" role="button">Show All Events</a>
							</div>
							</div>
							</center>
							</div>
							
							<div class="col-lg-6">
							<center>
							<div class="container">
							<div style="width: 105%; border: 2px dashed whitesmoke; padding-bottom:45px;">
							<h5 style="padding-top:45px; ">ADD A NEW GUEST TO THE LIST<span class="badge badge-info">click on the button below</span></h5>
							<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">ADD NEW GUEST</button>
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
			        <h3 class="modal-title" id="exampleModalLabel">NEW GUEST</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			     
			      <div class="modal-body" style="background-color: whitesmoke;">
			      
			        
			        <form id="guest_form">
			          <div class="form-group">
			            <label for="recipient-name" class="form-control-label"><h6>GUEST NAME:</h6></label>
			            <div class="col-lg-8">
			            <input type="text" class="form-control" placeholder="Enter the guest Name" name="guest_name" id="guest_name" required>
			          </div>
			          	</div>
			          
			          <div class="form-group">
			            <label for="recipient-email" class="form-control-label"><h6>GUEST EMAIL:</h6></label>
			            <div class="col-lg-8">
			            <input type="email" class="form-control" placeholder="Enter the guest Email " name="guest_emailid" id="guest_emailid" required>
			          </div>
			          </div>
			          
			          <div class="form-group">
			            <label for="example-text-input" class="form-control-label"><h6>GUEST PHONE NUMBER: </h6></label>
					  		<div class="col-lg-8">
					    	<input class="form-control" type="number" placeholder="Enter phone number of the Guest" name="phone_number"  id="phone_number" required>
			          </div>
			          </div>
			          
			          <div class="form-group">
			            <label for="recipient-name" class="form-control-label"><h6>GENDER:</h6></label>
			            <label class="custom-control custom-radio">
						  <input name="guest_gender" value="male" type="radio" class="custom-control-input" required>
						  <span class="custom-control-indicator"></span>
						  <span class="custom-control-description">MALE</span>
						</label>
						<label class="custom-control custom-radio">
						  <input name="guest_gender" value="female" type="radio" class="custom-control-input" required>
						  <span class="custom-control-indicator"></span>
						  <span class="custom-control-description">FEMALE</span>
						</label>
			          </div>
			          
			        
			      
			     
			      <div class="modal-footer">
			        <button type="button" class="btn btn-success" name="Submit" id="Submit_guests">Submit</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			        </div>
			        </form>
			        </div> 
			      
			    </div>
			  </div>
			</div>
				</div>
									
							
						<hr>
							
								<!-- <div class="row">
									<div class="col-lg-6">
										<div class="alert alert-success" role="alert">
  											<strong>THANK YOU!</strong> FOR YOUR PRECIOUS TIME.
										</div>
											<center><h4>PLEASE ENTER YOUR DETAILS</h4></center>
										<form method="POST" id="rsvp_form">
												<div class="form-group row">
												  	<label for="email" class="col-2 col-form-label">YOUR EMAIL</label>
											  		<div class="col-10">
											    		<input type="email" class="form-control" placeholder="Enter your email-id" <a href="allevents1.php" class="btn btn-success btn-lg" role="button">Show All Events</a>name="your_email" id="email-id" required>
													</div>
												</div>
											
									

												<div class="form-group row">
												
												<div class="col-10">
												<button class="btn btn-outline-success" type="button" id="Submit_rsvp">RSVP</button>
												</div>
												</div>
										</form>

									
									</div>
									
								
									<div class="col-lg-6"> -->							
										<div class="container">				 
										<div id="accordion" role="tablist" aria-multiselectable="true">
										  <div class="card">
										    <div class="card-header" role="tab" id="headingOne">
										      <h5 class="mb-0">
										        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										         <center> PREVIOUS EVENTS GUESTS LISTS</center>
										        </a>
										      </h5>
										    </div>

										    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
										      <div class="card-block">
										      <div class="container">			
												<?php
												rsvp();
												?>		
												</div>
											   </div>		
											</div>   
										    </div>
										  </div>
										 </div>
						
						<hr>
						<div class="container">
						<center><h1>REQUESTED GUESTS <span class="badge badge-warning">NEW</span></h1>
						<hr>
						<?php
						submit_requests();
						?></center>
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
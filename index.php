<!DOCTYPE html>
<html>
<head>
	<title>SOIREE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Margarine" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Luckiest Guy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin Sketch" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Paprika" rel="stylesheet">

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
<body>

	<nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse">
					
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		
		<a class="navbar-brand" href="#" style="font-family: 'Pacifico';">'SOIREE' <u>2017</u></a>

		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="guests_control_page.php" style="font-family: 'Luckiest Guy'; font-size: 20px;}">GUESTS<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="events_control_page.php" style="font-family: 'Luckiest Guy'; font-size: 20px;">EVENTS<span class="sr-only"></span></a>
			</li>
			
			</ul>
		    
		</div>
	</nav>
		<div class="jumbotron text-white" style="background-image: url('RSVP_IMAGES/homebackground.jpg'); font-family: Paprika;" >
							<center><h1 style="font-family: 'Cabin Sketch'; font-size: 60px; color: peachpuff;"> ----THE LATEST EVENT <span class="badge badge-primary">Soiree</span>----</h1>
							<?php
							require("functions.php");
							show_events();
							?>
							</center>
						</div>
					
			<div class="jumbotron text-white" style="background-image: url('RSVP_IMAGES/homebackground.jpg');">
						<div class="row">
						<div class="col-lg-6">
							<center>
							<div class="container">
							<div style="width: 100%; border: 2px dashed gray; padding-bottom:45px">
							<h5 style="font-family: 'Margarine'; font-size: 23px; padding-top:45px; ">Confirm your RSVP status <span class="badge badge-danger">click on the button below</span>
							</h5>
							<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalLong">
							  Get 'RSVP' Link
							</button>
							</div>
							</div>
							</center>
						</div>
						
						<div class="col-lg-6">
							<center>
							<div class="container">
							<div style="width: 100%; border: 2px dashed gray; padding-bottom:45px;"	>
							<h5 style="font-family: 'Margarine'; font-size: 23px; padding-top:45px; ">Want to join the party? <span class="badge badge-primary">click on the button below</span></h5>
							<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
							'Request' N Get Invitation
							</button>
							</div>
							</div>
							</center>
						</div>
						</div>
						</div> 
					<div class="container-fluid">
			
						
			
			<div class="container">
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      
			      <div class="modal-header">
			        <h3 class="modal-title" id="exampleModalLongTitle" style="font-family: 'Bangers'; font-size: 30px;">NEW RSVP</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" style="background-color: whitesmoke;">
			      	<form class="form-group" id="rsvp_form">
			            <label for="recipient-name" class="form-control-label"><h6>ENTER THE EMAIL ADDRESS:</h6></label>
			            <input type="email" class="form-control" placeholder="someone@example.com" name="user_email" id="user_email" required>
			            <p id="msg"></p>
			        </form>
				  </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-success" id="Submit_rsvp">GET LINK</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			       </div>
			    </div>
			  </div>
			  </div>
			  </div>
			

			
			<div class="container">
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      
			      <div class="modal-header">
			        <h3 class="modal-title" id="exampleModalLabel" style="font-family: 'Bangers'; font-size: 30px;">NEW REQUEST</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			     
			     <form id="request_form">
				      <div class="modal-body" style="background-color: whitesmoke;">
					          <input type="hidden" class="form-control" name="request_id" id="request_id">
					          
					          <div class="form-group">
					            <label for="recipient-name" class="form-control-label"><h6>YOUR NAME:</h6></label>
					            <div class="col-lg-8">
					            <input type="text" class="form-control" placeholder="Enter Your Name" name="request_name" id="request_name" required>
					          	</div>
					          </div>
					          
					          <div class="form-group">
					            <label for="recipient-name" class="form-control-label"><h6>YOUR EMAIL:</h6></label>
					            <div class="col-lg-8">
					            <input type="email" class="form-control" placeholder="Enter Your Email " name="request_emailid" id="request_emailid" required>
					          	</div>
					          </div>

					          <div class="form-group">
					            <label for="recipient-number" class="form-control-label"><h6>Phone Number:</h6></label>
					            <div class="col-lg-8">
					            <input type="number" class="form-control" placeholder="Enter Your ph.no. " name="phonenumber" id="phonenumber" required>
					          	</div>
					          </div>
					          
					          <div class="form-group">
					            <label for="recipient-name" class="form-control-label"><h6>GENDER:</h6></label>
					            <label class="custom-control custom-radio">
								  <input name="request_gender" value="male" type="radio" class="custom-control-input" required>
								  <span class="custom-control-indicator"></span>
								  <span class="custom-control-description">MALE</span>
								</label>
								<label class="custom-control custom-radio">
								  <input name="request_gender" value="female" type="radio" class="custom-control-input" required>
								  <span class="custom-control-indicator"></span>
								  <span class="custom-control-description">FEMALE</span>
								</label>
					          </div>
				      </div>
			     
			     	  <div class="modal-footer">
			     		   <button type="button" class="btn btn-success" id="Submit_request">Send Request</button>
			     		   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			        
			     	  </div>
			     </form> 
			    </div>
			  </div>
			</div>
			 </div>
		
			<hr>
				<div class="container">

					<center><h1 style="font-family: 'Bangers'; font-size: 50px;">Events&nbsp;<span class="badge badge-info">pictures</span> <i class="fa fa-camera-retro fa-1x"></i></h1></center>
							
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="11"</li>
						  </ol>
						  
						  <div class="carousel-inner" role="listbox">
						    <div class="carousel-item active">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree1.jpg" alt="First slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 1.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree2.jpg" alt="Second slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 2.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree3.jpg" alt="Third slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 3.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree4.jpg" alt="fourth slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 4.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree5.jpg" alt="fifth slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 5.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree6.jpg" alt="sixth slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 6.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree7.jpg" alt="seventh slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 7.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree8.jpg" alt="eighth slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 8.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree9.jpg" alt="ninth slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 9.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree10.jpg" alt="tenth slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 10.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree11.jpg" alt="eleventh slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 11.</h3>  
							  </div>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="RSVP_IMAGES/soiree12.jpg" alt="twelveth slide" style="width:100%;height: 600px;">
						      <div class="carousel-caption d-none d-md-block">
							    <h3 style="font-family: Frijole; color: lavender;">#SOIREE 12.</h3>  
							  </div>
						    </div>
						    
						  </div>
						  
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						
						</div>
				</div>
						<hr>
						
						<div class="container">
							<div class="jumbotron" style="background-color: pink; ">
 	 			
							  <h1 class="display-1">Hello, People!</h1>
							  <p class="lead">Come and join the party..Lets make the the day better together.</p>
							  <hr class="my-4">
							  <h4 class="text-primary">Send us a <b style="font-family: Margarine;">REQUEST</b> in case you are not invited. </h4>
							  <!-- <p class="lead">
							    <a class="btn btn-info btn-lg" href="#" role="button">SEE MORE</a>
							  </p> -->
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
			<script type="text/javascript" src="main.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet">


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
				<a class="nav-link" href="index1.php">GUESTS<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="host_control_page1.php">EVENTS<span class="sr-only"></span></a>
			</li>
			
			</ul>
		    
		</div>
	</nav>
		<div class="jumbotron text-white" style="background-image: url('black-wallpaper-19.jpg');">
							<center><h1 style="font-family: 'frijole';"> ----THE LATEST EVENT <span class="badge badge-primary">New</span>----</h1>
							<?php
							require("functions1.php");
							show_events();
							?>
							</center>
						</div>
						</div>
			<div class="jumbotron text-white" style="background-image: url('black-wallpaper-19.jpg');">
						<div class="row">
						<div class="col-lg-6">
							<center>
							<div class="container">
							<div style="width: 100%; border: 2px dashed gray; padding-bottom:45px">
							<h5 style="font-family: 'Love Ya Like A Sister';padding-top:45px; ">Confirm your RSVP status <span class="badge badge-danger">click on the button below</span>
							</h5>
							<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalLong">
							  RSVP
							</button>
							</div>
							</div>
							</center>
						</div>
						
						<div class="col-lg-6">
							<center>
							<div class="container">
							<div style="width: 100%; border: 2px dashed gray; padding-bottom:45px;"	>
							<h5 style="font-family: 'Love Ya Like A Sister';padding-top:45px; ">Want to join the party? <span class="badge badge-primary">click on the button below</span></h5>
							<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">REQUEST
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
			        <h3 class="modal-title" id="exampleModalLongTitle">NEW RSVP</h3>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      
			      <div class="modal-body" style="background-color: whitesmoke;">
			  		  <div class="form-group">
			            <label for="recipient-name" class="form-control-label"><h6>ENTER THE EMAIL ADDRESS:</h6></label>
			            <div class="col-lg-10">
			            <input type="text" class="form-control" placeholder="someone@example.com" id="recipient-name">
			          </div>
			          </div>
				  </div>
			      
			      <div class="modal-footer">
			        <a href="#" role="button" class="btn btn-success" >GET LINK</a>
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
			        <h3 class="modal-title" id="exampleModalLabel">NEW REQUEST</h3>
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

					<center><h1>Events<span class="badge badge-success">clicks</span> <i class="fa fa-camera-retro fa-1x"></i></h1></center>
							
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
						  </ol>
						  
						  <div class="carousel-inner" role="listbox">
						    <div class="carousel-item active">
						      <img class="d-block img-fluid" src="14753441_1746791318871454_97768673508346665_o.jpg" alt="First slide" style="width:100%;height: 500px;">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="14884683_1746791322204787_4086761520496955659_o.jpg" alt="Second slide" style="width:100%;height: 500px;">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="17097340_1801526630064589_4934918446811234698_o.jpg" alt="Third slide" style="width:100%;height: 500px;">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="17157621_1801444896739429_3568265074552533962_o.jpg" alt="Third slide" style="width:100%;height: 500px;">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="17620499_1813898782160707_9209937346699936697_o.jpg" alt="Third slide" style="width:100%;height: 500px;">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="17799135_1813900882160497_1059668741200254439_n.jpg" alt="Third slide" style="width:100%;height: 500px;">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="17758327_1813898875494031_1698159385545969705_o.jpg" alt="Third slide" style="width:100%;height: 500px;">
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
							  <p class="text-primary">Send us a REQUEST in case you are not invited. </p>
							  <p class="lead">
							    <a class="btn btn-info btn-lg" href="#" role="button">SEE MORE</a>
							  </p>
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
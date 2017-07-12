<!DOCTYPE html>
<html>
<head>
	<title>	SOIREE</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Margarine" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Luckiest Guy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Marcellus SC" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Paprika" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Marcellus SC" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	
		<nav class=" navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">				
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#" style="font-family: ;"><img src="RSVP_IMAGES/logo.png" width="180" height="45" class="d-inline-block align-top" alt=""></a>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a role="button" class="btn btn-outline-secondary" href="guests_control_page.php" style="font-family: 'Oswald'; font-size: 17px;">
						GUESTS<span class="sr-only">(current)</span>
					</a>
				</li>&nbsp;
				<li class="nav-item active">
					<a role="button" class="btn btn-outline-secondary" href="events_control_page.php" style="font-family: 'Oswald'; font-size: 17px;">EVENTS<span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>

	
	<body  style="padding-top: 100px;" >
	<div class="container">
		<div  style="font-family:">
			<center>
				<h1 style="font-family:sans-serif; font-size: 60px; color: indigo; padding-top: 20px;" class="main heading"></h1>
			</center>
			<br>
		</div>	
		<div class="row">
			<div class="col col-sm-12 col-md- col-lg-6 about">
				<h5 style="font-family: 'Marcellus SC'; font-size: 85px; color:goldenrod;">Soiree</h5>
				<br>
			  	<p class="lead" style="font-family: inherit;padding-bottom: 5px;">ColoredCow celebrates every first Saturday of the month with family and friends. This custom has been started to take a little time off from work and enjoy some moments in life. we believe in sharing moments and learning with each other. Come and join us over music, food, drinks and some moments full of laughter and joy.</p>
				<hr>
				<center>
			  		<div class="col-md-8 col-xs-12">
						<h5 style="font-family: 'Marcellus SC'; font-size: 23px; color:white; align-content: center;">Confirm your Presence</h5>
						<button type="button" class="btn btn-outline-warning btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">RSVP</button>		
					</div>
					
				</center>

			</div>
			<div class="col col-sm-12 col-md-12 col-lg-6 eventdata" style=" font-family: Paprika;">
				<h1 style="font-family: 'Marcellus SC'; font-size: 25px; color:goldenrod; padding-top: 15px; ">Coming Up...</h1>
				<div style="font-family: 'Marcellus SC'">
				<?php
					require("functions.php");
					show_events();
				?>
				</div>
				<hr>
			<center>
			<div class="col-md-8 col-sm-12" >
						<h5  class="" style="font-family: 'Marcellus SC'; font-size: 23px; color:white;align-content: center;">Wanna join the party?</h5>
						<button type="button" class="btn btn-outline-warning btn-lg btn-block" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Request Invite</button>
					</div>
					</center>
			</div>	
		</div>	
		<div class="container">
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content"> 
					  	<div class="modal-header">
							<h3 class="modal-title" id="exampleModalLongTitle" style="font-family: 'Marcellus SC'; font-size: 30px;">RSVP</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" id="closersvp">&times;</span></button>
					    </div>
					    <form class="form-group" id="rsvp_form">
					    <div class="modal-body" style="background-color: whitesmoke;">
							
								<label for="recipient-name" class="form-control-label">
									<h6>Enter the email address:</h6>
								</label>
								<input type="email" class="form-control" placeholder="someone@example.com" name="user_email" id="user_email" maxlength="30" required>
								<p id="msg"></p>
							
					    </div>
					    <div class="modal-footer pull-left">
							<button type="button" class="btn btn-success" id="Submit_rsvp">Get Link</button>	
					    </div>
					    </form>
					</div>
			    </div>
			</div>
		</div>

<div class="container">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel" style="font-family: 'Marcellus SC'; font-size: 30px;">&nbsp;&nbsp;New Request</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close"><span aria-hidden="true">&times;</span></button>
                          </div>
                         <form id="request_form">
                              <div class="modal-body" style="background-color: whitesmoke;">
                                  <p id="msg2"></p>
                                <input type="hidden" class="form-control" name="request_id" id="request_id">
                                <div class="form-group">
                                    <label for="recipient-name" class="form-control-label">
                                        <h6>&nbsp;&nbsp;&nbsp;Your Name:</h6>
                                    </label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" placeholder="" name="request_name" id="request_name" maxlength="30" required>
                                    </div>
                                 </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="form-control-label">
                                        <h6>&nbsp;&nbsp;&nbsp;Your Email:</h6>
                                    </label>
                                    <div class="col-lg-8">
                                        <input type="email" class="form-control" placeholder="someone@example.com" name="request_emailid" id="request_emailid" maxlength="30" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-number" class="form-control-label">
                                        <h6>&nbsp;&nbsp;&nbsp;Mobile Number:</h6>
                                    </label>
                                    <div class="col-lg-8">
                                        <input type="number" class="form-control"  placeholder="10 digit mobile no." name="phonenumber" id="phonenumber" max="9999999999" required>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="recipient-name" class="form-control-label">
                                        <h6>&nbsp;&nbsp;&nbsp;Gender:</h6>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input name="request_gender" value="Male" type="radio" class="custom-control-input" required>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Male</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input name="request_gender" value="Female" type="radio" class="custom-control-input" required>
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Female</span>
                                    </label>
                                </div>
                              </div>
                              <div class="modal-footer pull-left">
                                   &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-success"  id="Submit_request">Request</button>
                              </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr style="border-width: 3px">
			<center>
				<h1 style="font-family: 'Marcellus SC'; font-size: 50px; color: goldenrod; padding-top: 30px;"><i class="fa fa-camera-retro fa-1x"></i>&nbsp;Event Gallery</h1>
			</center>		
			<div class="container" style="width:765px;">
			<div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1">	</li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2">	</li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3">	</li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4">	</li>
					<li data-target="#carouselExampleIndicators" data-slide-to="6">	</li>
					<li data-target="#carouselExampleIndicators" data-slide-to="7">	</li>
					<li data-target="#carouselExampleIndicators" data-slide-to="8">	</li>
					<li data-target="#carouselExampleIndicators" data-slide-to="9">	</li>
					<li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
					  	<img class="d-block img-fluid images_carousel" src="RSVP_IMAGES/soiree1.jpg" alt="First slide">
					  	<div class="carousel-caption d-none d-md-block">
							<h3 style="font-family: Oswald; color: darkorange;">#SOIREE 1.</h3>  
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block img-fluid images_carousel" src="RSVP_IMAGES/soiree2.jpg" alt="Second slide">
					  	<div class="carousel-caption d-none d-md-block">
							<h3 style="font-family: Oswald; color: darkorange;">#SOIREE 2.</h3>  
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block img-fluid images_carousel" src="RSVP_IMAGES/soiree3.jpg" alt="Third slide">
					  	<div class="carousel-caption d-none d-md-block">
							<h3 style="font-family: Oswald; color: darkorange;">#SOIREE 3.</h3>  
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block img-fluid images_carousel" src="RSVP_IMAGES/soiree4.jpg" alt="fourth slide">
					  	<div class="carousel-caption d-none d-md-block">
							<h3 style="font-family: Oswald; color: darkorange;">#SOIREE 4.</h3>  
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block img-fluid images_carousel" src="RSVP_IMAGES/soiree5.jpg" alt="fifth slide">
					  	<div class="carousel-caption d-none d-md-block">
							<h3 style="font-family: Oswald; color: darkorange;">#SOIREE 5.</h3>  
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block img-fluid images_carousel" src="RSVP_IMAGES/soiree7.jpg" alt="seventh slide">
					  	<div class="carousel-caption d-none d-md-block">
							<h3 style="font-family: Oswald; color: darkorange;">#SOIREE 7.</h3>  
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block img-fluid images_carousel" src="RSVP_IMAGES/soiree8.jpg" alt="eighth slide">
					  	<div class="carousel-caption d-none d-md-block">
							<h3 style="font-family: Oswald; color: darkorange;">#SOIREE 8.</h3>  
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block img-fluid images_carousel" src="RSVP_IMAGES/soiree9.jpg" alt="ninth slide">
					  	<div class="carousel-caption d-none d-md-block">
							<h3 style="font-family: Oswald; color: darkorange;">#SOIREE 9.</h3>  
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block img-fluid images_carousel" src="RSVP_IMAGES/soiree11.jpg" alt="eleventh slide">
					  	<div class="carousel-caption d-none d-md-block">
							<h3 style="font-family: Oswald; color: darkorange;">#SOIREE 11.</h3>  
					  	</div>
					</div>
					<div class="carousel-item">
					  	<img class="d-block img-fluid images_carousel" src="RSVP_IMAGES/soiree12.jpg" alt="twelveth slide">
					  	<div class="carousel-caption d-none d-md-block">
							<h3 style="font-family: Oswald; color: darkorange;">#SOIREE 12.</h3>  
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
	</div>	
	<div id="footer" class="sticky-bottom">
	<hr>
		<p>Copyright &copy; ColoredCow || 2017 </p>
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
	<script type="text/javascript" src="main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
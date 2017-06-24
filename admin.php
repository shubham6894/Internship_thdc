<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body><center>
	<nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse">
					
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		
		<a class="navbar-brand" href="#">ADMIN</a>

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
		
		<div class="container-fluid">
						
		<div class="container">
							<h1>Previous Events<span class="badge badge-default">clicks</span></h1>
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner" role="listbox">
						    <div class="carousel-item active">
						      <img class="d-block img-fluid" src="3D Wallpaper3.jpg" alt="First slide" style="width:100%;height: 450px;">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="7a8ffbdf8aeb6079049928642539f172.jpg" alt="Second slide" style="width:100%;height: 450px;">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block img-fluid" src="cool-wallpapers-hd-8087-8418-hd-wallpapers.jpg" alt="Third slide" style="width:100%;height: 450px;">
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
			<h1> Events Details <span class="badge badge-default">New</span></h1>
			<hr>

			<!-- <?php
				//require("functions.php");
				//show_events();

			?> -->
			<!-- <a href="#" class="btn btn-link" role="button">Show All Events</a> -->
			
			<!-- Button trigger modal -->
			<div class="jumbotron" style="background-color: pink; ">
  			
  <h1 class="display-1">Hello, world!</h1>
  <p class="lead">Come and join the party..Lets make the the day better together.</p>
  <hr class="my-4">
  <p>Send us a REQUEST in case you are not invited. </p>
  <p class="lead">
    <a class="btn btn-info btn-lg" href="#" role="button">SEE MORE</a>
  </p>
</div>
<?php
			require("functions1.php");
			show_events();
			?>
			

			<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModalLong">
			  RSVP
			</button>
			<!-- Modal -->
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">NEW RSVP</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" style="background-color: whitesmoke;">
			  <h5>ENTER THE EMAIL ADDRESS</h5>
			  <div class="form-group">
			            <label for="recipient-name" class="form-control-label">EMAIL:</label>
			            <input type="text" class="form-control" id="recipient-name">
			          </div>
				  </div>
			      <div class="modal-footer">
			        <a href="#" role="button" class="btn btn-success"  >GET LINK</a>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			      </div>
			    </div>
			  </div>
			</div>
			
			<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">REQUEST</button>

			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">NEW REQUEST</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			     
			      <div class="modal-body" style="background-color: whitesmoke;">
			        <form>
			          <div class="form-group">
			            <label for="recipient-name" class="form-control-label">NAME:</label>
			            <input type="text" class="form-control" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="form-control-label">EMAIL:</label>
			            <input type="text" class="form-control" id="recipient-name">
			          </div>
			          <div class="form-group">
			            <label for="recipient-name" class="form-control-label">GENDER:</label>
			            <label class="custom-control custom-radio">
						  <input id="radio1" name="radio" type="radio" class="custom-control-input">
						  <span class="custom-control-indicator"></span>
						  <span class="custom-control-description">MALE</span>
						</label>
						<label class="custom-control custom-radio">
						  <input id="radio2" name="radio" type="radio" class="custom-control-input">
						  <span class="custom-control-indicator"></span>
						  <span class="custom-control-description">FEMALE</span>
						</label>
			          </div>
			        </form>
			      </div>
			     
			      <div class="modal-footer">
			        <button type="button" class="btn btn-success">REQUEST</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			        
			      </div>
			    </div>
			  </div>
			</div>
			 <hr>
		</div>
		</div>
















	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
	</script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
	</script>


</body>
</html>
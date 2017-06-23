<!doctypxe html>
<html>
	<head>
		<title>AllEvents</title>
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
										<a class="nav-link" href="index.php"><H5>BACK</H5> <span class="sr-only">(current)</span></a>
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

						<div class="container">
						<h3><span class="badge badge-default">ALL EVENTS</span></h3>
						<hr>

									<!-- <a href='index.php'> <h6>HOME</h6></a> -->
									<?php
										
										
										require("functions.php");
										// update_details();

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

										$sql = "SELECT event_name, event_theme, event_date, event_venue FROM new_event ORDER BY `event_date`";
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
									
									</div>

									<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
									</script>
									
									<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
									</script>
									
									<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
									</script>
						
			</body>
	
</html>
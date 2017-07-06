<!doctype html>
<html>
<head>
	<title>
		RSVP PAGE
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Luckiest Guy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
        .btn:hover
        {
            cursor: pointer;
        }
        a:hover
        {
            cursor: pointer;
            background-color:grey ;
        }
    </style>
</head>
<body>
	
	<nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse" style="height: 70px;">				
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">	
			</span>
		</button>
		<a class="navbar-brand" href="#" style="font-family: 'Pacifico';">
			'RSVP'
		</a>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav ">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">
						<H5 style="font-family: 'Luckiest Guy'; font-size: 20px;">
							<i class="fa fa-home" aria-hidden="true">
							</i>
							HOME
						</H5>
					    <span class="sr-only">
					    	(current)
					    </span>
				    </a>
				</li>
			</ul>				    
		</div>
	</nav>
		
		<?php
			$output='';
			$output .='<div class="container">';
			if(isset($_GET["passkey"]))
			{
				$receivedcode=$_GET['passkey'];
				$decryptcode=base64_decode($receivedcode);
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "database_for_coloredcow";

				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) 
				{
				    die("Connection failed: " . $conn->connect_error);
				}

				$sql=" SELECT * FROM new_guests WHERE random_token='$decryptcode'";
				$result=mysqli_query($conn,$sql);
				$row = $result->fetch_assoc();	
				$output .='	<h4>
						   		<strong>
						   			Thank you!
						   		</strong> 
						   		Please press RSVP button to get your status CONFIRM.
						   	</h4>
							<br>
							
							<div>
								<form id="rsvp_details_form">
									<label for="recipient-name" class="form-control-label">
										<h6>
											GUEST NAME:
										</h6>
									</label>
									<br>
									<input type="text" id="rsvp_name" name="rsvp_name" value="'.$row["guest_name"].'" readonly>
									<br><br>
									<label for="recipient-email" class="form-control-label">
										<h6>
											GUEST EMAIL:
										</h6>
									</label>
									<br>
									<input type="email"	 id="rsvp_email" name="rsvp_email" value="'.$row["guest_emailid"].'" readonly>
									<br><br>
									<label for="example-text-input" class="form-control-label">
										<h6>
											GUEST PHONE NUMBER: 
										</h6>
									</label>
									<br>
									<input type="number" id="rsvp_phone" name="rsvp_phone" value="'.$row["phone_number"].'" readonly>
									<br><br>
									<label for="recipient-name" class="form-control-label">
										<h6>
											GENDER:
										</h6>
									</label>
									<br>
									<input type="text" id="rsvp_gender" name="rsvp_gender" value="'.$row["guest_gender"].'" readonly>
									<input type="hidden" id="guestid" name="guestid" value="'.$row["guestid"].'">
									<br>
									<br>
									<input type="button" class="btn btn-success" id="confirm_rsvp" value="RSVP">
								</form>	
								<p id="msgconfirm">
								</p>
							</div>
						</div>';
			}
			else
			{
				$output .='	<h4>
								warning! page not found. please check the address again
							</h4>
							<div>
							   	<a class="btn btn-success" href="http://localhost/Internship%20RSVP/index.php">
							   		HOME
							   	</a>
							</div>
							</div>';
			}
			echo $output;
		?>

		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous">
		</script>
</body>
		<script type="text/javascript" src="http://localhost/Internship%20RSVP/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#confirm_rsvp").on("click",function()
		{
			var confirmForm= $('#rsvp_details_form');
			var dataString = "action=rsvpconfirm&"+confirmForm.serialize();
			$.ajax(
			{
				type: "POST",
				url: "http://localhost/Internship%20RSVP/ajax.php",
				data: dataString,
				success: function(result)
				{
					$("#msgconfirm").html(result);
				}
			});
		});
	});
</script>
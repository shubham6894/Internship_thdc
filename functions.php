<?php
		// if(isset($_POST['Submit'])&& function_exists($_POST['Submit']))
		// {
		// 	$action= $_POST['Submit'];
		// 	$var= isset($_POST['Submit'])? $_POST['Submit'] : null;
		// 	$getData= $action($var);
		// }
		

		function events()
		{
		if (isset($_POST['Submit']))
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";

			   $event_name=  @$_POST['event_name'];
			   $event_theme= @$_POST['event_theme'];
			   $event_date=  @$_POST['event_date'];
			   $event_venue= @$_POST['event_venue'];

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
			    die("Connection failed: " . $conn->connect_error);
			}


			$sql = "INSERT INTO new_event (event_name, event_theme, event_date, event_venue)
			VALUES ('$event_name', '$event_theme', '$event_date', '$event_venue')";

			if ($conn->query($sql) === TRUE) 
			{
			    echo "<h1>Information has been successfully saved.</h1> <a href='host_control_page.php'>HOME</a><hr>";
			} else 

			{
			    echo "Error: " . $sql . "<br>" . $conn->error ."<a href='host_control_page.php'> HOME</a><hr>";
			
			}
			

			$conn->close();
		}
		}
?>

<?php
		function guest_details()
		{
		if (isset($_POST['Submit1']))
		{	
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";

			   $guest_name=    @$_POST['guest_name'];
			   $guest_emailid= @$_POST['guest_emailid'];
			   $phone_number=  @$_POST['phone_number'];

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
			    die("Connection failed: " . $conn->connect_error);
			}

			
			$sql = "INSERT INTO new_guests (guest_name, guest_emailid, phone_number)
					VALUES ('$guest_name', '$guest_emailid', '$phone_number')";

			if ($conn->query($sql) === TRUE) 
			{
			    echo "<h1>"."Information has been successfully saved."."</h1>"."<a href='host_control_page.php'>"."HOME"."</a><hr>";
			} else 

			{
			    echo "Error:"  . $sql . "<br>" . $conn->error ."<a href='host_control_page.php'> HOME</a><hr>";
			}

			$conn->close();
		}
		}
?>


<?php
		function update_details()
		{
		if (isset($_POST['Submit']))
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";

			   // $guest_name=    @$_POST['guest_name'];
			   $your_email= @$_POST['your_email'];
			   $preference= @$_POST['preference'];
			   // $phone_number=  @$_POST['phone_number'];

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) 
			{
			    die("Connection failed: " . $conn->connect_error);
			}

			$k="SELECT guest_emailid FROM new_guests WHERE guest_emailid='$your_email'";
			$result=mysqli_query($conn,$k);
			$p=mysqli_num_rows($result);

			if ($p>0) 
			{
				$sql = "UPDATE new_guests
					SET status='YES', food_preference='$preference'
					WHERE guest_emailid='$your_email'";

			if ($conn->query($sql) === TRUE) 
			{
			    echo "<h1>THANK YOU FOR YOUR PRECIOUS TIME....WE WILL BE WAITING FOR YOU...</h1> <a href='index.php'> HOME</a><hr>";
			} 

			else 
			{
			    echo "Error:"  . $sql . "<br>" . $conn->error ."<a href='index.php'> HOME</a><hr>";
			}
			
			}
			
			else
			{
				echo"<h1>SORRY! BUT YOU ARE NOT IN OUR GUEST LIST. HOPE TO SEE YOU ANOTHER TIME</h1> <a href='index.php'> HOME</a><hr>";
			}


			$conn->close();
		}
		}
?>
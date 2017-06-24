<?php

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "database_for_coloredcow";

			   $your_email= @$_POST['your_email'];
			
			
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
						SET status='YES'
						WHERE guest_emailid='$your_email'";

				if ($conn->query($sql) === TRUE) 
				{
				    echo "THANK YOU FOR YOUR PRECIOUS TIME....WE WILL BE WAITING FOR YOU...";
				} 

				else 
				{
				    echo "Error:"  . $sql . "<br>" . $conn->error;
				}
			
			}
			
			else
			{
				echo "SORRY BUT YOU ARE NOT IN OUR GUEST LIST. HOPE TO SEE YOU ANOTHER TIME";
			}


			$conn->close();
?>
						<?php	
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "pregnancy";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $pregnancy);
							// Check connection
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							}
						?>	
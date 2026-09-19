<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:lightgrey;color: #fff;padding: 5px;">Patient List</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../dbConn.php');
					$conn= mysqli_connect('localhost', 'root', '','pregnancy');
					$sql = " SELECT * FROM registration";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								
								<th>Patient Name</th>
								
								<th>Age</th>
								<th>Place</th>
								<th>Phone</th>
								<th>Email </th>
								<th>Action</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								
								echo "<td>".$row['fullname']."</td>";
								
								echo "<td>".$row['age']."</td>";
								echo "<td>".$row['place']."</td>";
								echo "<td>".$row['phone']."</td>";
								echo "<td>".$row['email']."</td>";
								
								
								echo "<td><button type='submit' name='submit' style='color:#000;'>Update</button><button type='submit' name='submit' style='color:#000;'>Delete</button></td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

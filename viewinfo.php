<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:lightgrey;color: #fff;padding: 5px;">Patient Medical Records</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../dbConn.php');
					$conn= mysqli_connect('localhost', 'root', '','pregnancy');
					$sql = " SELECT * FROM patient";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								
								<th>ID</th>
								
								<th>Patient Name</th>
								<th>Admission Data</th>
								<th>Symptoms</th>
								<th>Historical Data </th>
								<th>Allergies</th>
                                <th>Pregnancy Duration</th>
                                <th>Other Data</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['name']."</td>";
								
								echo "<td>".$row['lastadmission']."</td>";
								echo "<td>".$row['symptoms']."</td>";
								echo "<td>".$row['historical']."</td>";
								echo "<td>".$row['allergies']."</td>";
								echo "<td>".$row['information']."</td>";
                                echo "<td>".$row['AOB']."</td>";
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

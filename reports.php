<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">REPORTS</h3>
		
		
	</div>
	<div class="dashboard" style="background-color:#fff;margin-top:3px;width:100%;margin-bottom:20px;">

<select name="status" id="booked" style="margin-left:10px;display:inline;margin-bottom:10px;">
	   <option value="all">Date Booked</option>
	   <option value="today">Today</option>
	   <option value="week">Last one week</option>
   </select>

   <select name="status" id="status" style="display:inline;margin-bottom:10px;">
	   <option value="0">Appointment Status</option>
	   <option value="1">Allowed</option>
	   <option value="2">Denied</option>
   </select>

   
</div>

	<div class="gig"></div>	
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>
    <script>
		$(document).ready(function(){
			$('#status').on('input',function(){
				var st=$(this).val();
				$.ajax({
			url	:	"gen.php",
			method:	"POST",
			data	:{st:st},
			success	:function(data){
				$(".gig").html(data);
			}
		})
			})
			//
			$.ajax({
			url	:	"gen.php",
			method:	"POST",
			data	:{st:0},
			success	:function(data){
				$(".gig").html(data);
			}
		})
			//
			$('#booked').on('input',function(){
				var st1=$(this).val();
				$.ajax({
			url	:	"gen.php",
			method:	"POST",
			data	:{st1:st1},
			success	:function(data){
				$(".gig").html(data);
			}
		})
			})
			//
		})
	</script>

 
			



	
</body>
</html>

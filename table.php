<?php include('reserve.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <p> Current Bookings>>>>>>>>>> <a href="Patient.php" target="_blank">
            <button>Click To View Current Patient's Information</button> </p>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin View </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="browse.php">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jQuery.js"></script>
  
</head>

<body>

<script>
document.getElementById("demo").innerHTML = Date();
</script>

<header>
        <!-- Header -->
  <div style="background-color: green;" class="header" id="home">

    <!-- Navbar -->
          </div>
    </nav>
</div>
</header>

 <div class="table-responsive">
  <?php
  $server="localhost";
  $user="root";
  $password="";
  $database="pregnancy";
  $connect=mysqli_connect($server,$user,$password,$database);
   $query ="SELECT * FROM reserve ";
   $sqldata = mysqli_query($connect,$query) or die('error getting information');
   $fetchQuery = mysqli_query($connect,$query);
   
   ?>
                       <table style="background-color: white; width:100%; padding: 16px; border-spacing:16px;" id="employees_data" class="table2">
                              <th>
                             <tr  style="font-size: 20px; font-weight: bold; color:#34495e; ">
                                    
                                      <td>Name</td>
                                      <td>Email</td>                                   
</tr></th>                                
                    <?php
                  
                            while($row = mysqli_fetch_array($fetchQuery)){?>

                            <tr>

                              <form action="" method="post" role="form">
                                      <td><?php  echo $row["Name"];?></td>
                                      <td><?php  echo $row["Email"];?></td>    
                                      
          </td>                            

                              </form>
                            </tr>
                            <?php }     
                            
  ?>    
                                                                 
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                 </body>
                       
</html>
                                  

<?php
if(isset($_POST['st'])){
    $st=$_POST['st'];
    if($st==0){?>

           
               <div class="all_user" style="margin-top:30px; margin-left: 40px;">
                   <?php 
                       include('../dbConn.php');
                       $sql = " SELECT * FROM appointment";
                       $conn= mysqli_connect('localhost', 'root', '','pregnancy');
                       $result = mysqli_query($conn,$sql);
                       $count = mysqli_num_rows($result);
   
                       if($count>=1){
                           echo "<table border='1' align='center' style='width:90%;padding:20px;' style='margin-top:30px; margin-left: 40px;' cellpadding='32'>
                               <tr>
                                   <th>SN</th>
                                   <th>Expert Name</th>
                                   <th>Expert Contact</th>
                                   <th>Expertise</th>
                                   <th>Patient Name</th>
                                   <th>Patient Contact</th>
                                   <th>Patient Email</th>
                                   <th>Patient Address</th>
                                   <th>Date</th>
                                   <th>Appointment Status</th>								
                               </tr>";
                               $sn=0;
                           while($row=mysqli_fetch_array($result)){
                               $sn++;
                               $ss=$row['status'];
                               if($ss==0){
                                   $state="Pending confirmation";
                               }
                               if($ss==1){
                                   $state="Accepted";
                               }
                               if($ss==2){
                                   $state="Denied";
                               }
                                   echo "<tr>";
                                   echo "<td>".$sn."</td>";
                                   echo "<td>".$row['name']."</td>";
                                   echo "<td>".$row['contact']."</td>";
                                   echo "<td>".$row['expertise']."</td>";
                                   echo "<td>".$row['pname']."</td>";
                                   echo "<td>".$row['pcontact']."</td>";
                                   echo "<td>".$row['email']."</td>";
                                   echo "<td>".$row['address']."</td>";
                                   echo "<td>".$row['dates']." ".$row['tyme']."</td>";
                                   echo "<td>".$state."</td>";
                                   echo "</tr>";
                           }
                           echo "</table>";
                       }
                       else{
                           print "<br><p align='center'>Sorry, No match found for your search result..!!!</p>";
                       }
   
                       ?>
               </div><?php
    }
    if($st==1){?>

           
               <div class="all_user" style="margin-top:30px; margin-left: 40px;">
                   <?php 
                       include('../dbConn.php');
                       $sql = " SELECT * FROM appointment where status=1";
                       $conn= mysqli_connect('localhost', 'root', '','pregnancy');
                       $result = mysqli_query($conn,$sql);
                       $count = mysqli_num_rows($result);
   
                       if($count>=1){
                           echo "<table border='1' align='center' style='width:90%;padding:20px;' style='margin-top:30px; margin-left: 40px;' cellpadding='32'>
                               <tr>
                                   <th>SN</th>
                                   <th>Expert Name</th>
                                   <th>Expert Contact</th>
                                   <th>Expertise</th>
                                   <th>Patient Name</th>
                                   <th>Patient Contact</th>
                                   <th>Patient Email</th>
                                   <th>Patient Address</th>
                                   <th>Date</th>
                                   <th>Appointment Status</th>								
                               </tr>";
                               $sn=0;
                           while($row=mysqli_fetch_array($result)){
                               $sn++;
                               $ss=$row['status'];
                               if($ss==0){
                                   $state="Pending confirmation";
                               }
                               if($ss==1){
                                   $state="Accepted";
                               }
                               if($ss==2){
                                   $state="Denied";
                               }
                                   echo "<tr>";
                                   echo "<td>".$sn."</td>";
                                   echo "<td>".$row['name']."</td>";
                                   echo "<td>".$row['contact']."</td>";
                                   echo "<td>".$row['expertise']."</td>";
                                   echo "<td>".$row['pname']."</td>";
                                   echo "<td>".$row['pcontact']."</td>";
                                   echo "<td>".$row['email']."</td>";
                                   echo "<td>".$row['address']."</td>";
                                   echo "<td>".$row['dates']." ".$row['tyme']."</td>";
                                   echo "<td>".$state."</td>";
                                   echo "</tr>";
                           }
                           echo "</table>";
                       }
                       else{
                           print "<br><p align='center'>Sorry, No match found for your search result..!!!</p>";
                       }
   
                       ?>
               </div><?php
    }
    if($st==2){
        ?>

   
       <div class="all_user" style="margin-top:30px; margin-left: 40px;">
           <?php 
               include('../dbConn.php');
               $sql = " SELECT * FROM appointment where status=2";
               $conn= mysqli_connect('localhost', 'root', '','pregnancy');
               $result = mysqli_query($conn,$sql);
               $count = mysqli_num_rows($result);

               if($count>=1){
                   echo "<table border='1' align='center' style='width:90%;padding:20px;' style='margin-top:30px; margin-left: 40px;' cellpadding='32'>
                       <tr>
                           <th>SN</th>
                           <th>Expert Name</th>
                           <th>Expert Contact</th>
                           <th>Expertise</th>
                           <th>Patient Name</th>
                           <th>Patient Contact</th>
                           <th>Patient Email</th>
                           <th>Patient Address</th>
                           <th>Date</th>
                           <th>Appointment Status</th>								
                       </tr>";
                       $sn=0;
                   while($row=mysqli_fetch_array($result)){
                       $sn++;
                       $ss=$row['status'];
                       if($ss==0){
                           $state="Pending confirmation";
                       }
                       if($ss==1){
                           $state="Accepted";
                       }
                       if($ss==2){
                           $state="Denied";
                       }
                           echo "<tr>";
                           echo "<td>".$sn."</td>";
                           echo "<td>".$row['name']."</td>";
                           echo "<td>".$row['contact']."</td>";
                           echo "<td>".$row['expertise']."</td>";
                           echo "<td>".$row['pname']."</td>";
                           echo "<td>".$row['pcontact']."</td>";
                           echo "<td>".$row['email']."</td>";
                           echo "<td>".$row['address']."</td>";
                           echo "<td>".$row['dates']." ".$row['tyme']."</td>";
                           echo "<td>".$state."</td>";
                           echo "</tr>";
                   }
                   echo "</table>";
               }
               else{
                   print "<br><p align='center'>Sorry, No match found for your search result..!!!</p>";
               }

               ?>
       </div>
        <?php
    }
}
if(isset($_POST['st1'])){
    $st1=$_POST['st1'];
    $date=date("m/d/Y");
    if($st1=="today"){
        ?>
       <div class="all_user" style="margin-top:30px; margin-left: 40px;">
           <?php 
               include('../dbConn.php');
               $sql = " SELECT * FROM appointment where dates='$date'";
               $conn= mysqli_connect('localhost', 'root', '','pregnancy');
               $result = mysqli_query($conn,$sql);
               $count = mysqli_num_rows($result);

               if($count>=1){
                   echo "<table border='1' align='center' style='width:90%;padding:20px;' style='margin-top:30px; margin-left: 40px;' cellpadding='32'>
                       <tr>
                           <th>SN</th>
                           <th>Expert Name</th>
                           <th>Expert Contact</th>
                           <th>Expertise</th>
                           <th>Patient Name</th>
                           <th>Patient Contact</th>
                           <th>Patient Email</th>
                           <th>Patient Address</th>
                           <th>Date</th>
                           <th>Appointment Status</th>								
                       </tr>";
                       $sn=0;
                   while($row=mysqli_fetch_array($result)){
                       $sn++;
                       $ss=$row['status'];
                       if($ss==0){
                           $state="Pending confirmation";
                       }
                       if($ss==1){
                           $state="Accepted";
                       }
                       if($ss==2){
                           $state="Denied";
                       }
                           echo "<tr>";
                           echo "<td>".$sn."</td>";
                           echo "<td>".$row['name']."</td>";
                           echo "<td>".$row['contact']."</td>";
                           echo "<td>".$row['expertise']."</td>";
                           echo "<td>".$row['pname']."</td>";
                           echo "<td>".$row['pcontact']."</td>";
                           echo "<td>".$row['email']."</td>";
                           echo "<td>".$row['address']."</td>";
                           echo "<td>".$row['dates']." ".$row['tyme']."</td>";
                           echo "<td>".$state."</td>";
                           echo "</tr>";
                   }
                   echo "</table>";
               }
               else{
                   print "<br><p align='center'>Sorry, No match found for your search result..!!!</p>";
               }

               ?>
       </div>
        <?php
    }
    if($st1=="week"){
        ?>
        <div class="all_user" style="margin-top:30px; margin-left: 40px;">
        <?php 
            include('../dbConn.php');
            $sql = " SELECT * FROM appointment";
            $conn= mysqli_connect('localhost', 'root', '','pregnancy');
            $result = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($result);

            if($count>=1){
                echo "<table border='1' align='center' style='width:90%;padding:20px;' style='margin-top:30px; margin-left: 40px;' cellpadding='32'>
                    <tr>
                        <th>SN</th>
                        <th>Expert Name</th>
                        <th>Expert Contact</th>
                        <th>Expertise</th>
                        <th>Patient Name</th>
                        <th>Patient Contact</th>
                        <th>Patient Email</th>
                        <th>Patient Address</th>
                        <th>Date</th>
                        <th>Appointment Status</th>								
                    </tr>";
                    $sn=0;
                while($row=mysqli_fetch_array($result)){
                    $sn++;
                    $df=$row['dates'];
                    $dr=strtotime($df);
                    $d=strtotime($date);
                    $rem=ceil(($d-$dr)/60/60/24);
                    $ss=$row['status'];
                    if($ss==0){
                        $state="Pending confirmation";
                    }
                    if($ss==1){
                        $state="Accepted";
                    }
                    if($ss==2){
                        $state="Denied";
                    }
                    if($rem>7 || $rem<0){
                       continue;
                    }else{
                        echo "<tr>";
                        echo "<td>".$sn."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['contact']."</td>";
                        echo "<td>".$row['expertise']."</td>";
                        echo "<td>".$row['pname']."</td>";
                        echo "<td>".$row['pcontact']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['dates']." ".$row['tyme']."</td>";
                        echo "<td>".$state."</td>";
                        echo "</tr>"; 
                    }

                }
                echo "</table>";
            }
            else{
                print "<br><p align='center'>Sorry, No match found for your search result..!!!</p>";
            }

            ?>
    </div><?php
    }if($st1=="all"){
     ?>
        <div class="all_user" style="margin-top:30px; margin-left: 40px;">
        <?php 
            include('../dbConn.php');
            $sql = " SELECT * FROM appointment";
            $conn= mysqli_connect('localhost', 'root', '','pregnancy');
            $result = mysqli_query($conn,$sql);
            $count = mysqli_num_rows($result);

            if($count>=1){
                echo "<table border='1' align='center' style='width:90%;padding:20px;' style='margin-top:30px; margin-left: 40px;' cellpadding='32'>
                    <tr>
                        <th>SN</th>
                        <th>Expert Name</th>
                        <th>Expert Contact</th>
                        <th>Expertise</th>
                        <th>Patient Name</th>
                        <th>Patient Contact</th>
                        <th>Patient Email</th>
                        <th>Patient Address</th>
                        <th>Date</th>
                        <th>Appointment Status</th>								
                    </tr>";
                    $sn=0;
                while($row=mysqli_fetch_array($result)){
                    $sn++;
                    $ss=$row['status'];
                    if($ss==0){
                        $state="Pending confirmation";
                    }
                    if($ss==1){
                        $state="Accepted";
                    }
                    if($ss==2){
                        $state="Denied";
                    }
                        echo "<tr>";
                        echo "<td>".$sn."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['contact']."</td>";
                        echo "<td>".$row['expertise']."</td>";
                        echo "<td>".$row['pname']."</td>";
                        echo "<td>".$row['pcontact']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['dates']." ".$row['tyme']."</td>";
                        echo "<td>".$state."</td>";
                        echo "</tr>";
                }
                echo "</table>";
            }
            else{
                print "<br><p align='center'>Sorry, No match found for your search result..!!!</p>";
            }

            ?>
    </div><?php
    }
}
?>
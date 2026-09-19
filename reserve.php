<?php
$servername="localhost";
$username="root";
$password="";
$db="pregnancy";

$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	die("Connection Error".mysqli_connect_error());
}

if(isset($_POST['submit'])){
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	
	//validation rules
	
	$sql="INSERT INTO reserve (Name,Email)VALUES
    ('".$Name."','".$Email."')";
    if(mysqli_query($conn,$sql)){
    	echo "You're reserved successfully";
    }
    else{
    	echo "An error occured".mysqli_error($conn);
    }
}
?>
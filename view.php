<?php
session_start();
$db=mysqli_connect ('localhost', 'root', '' , 'pregnancy');
$name ="";
$address ="";
$contact="";
$email ="";
$expertise ="";
$userid ="";
$id=0;
$update=false;

if (isset($_POST['save'])) {
    $name =$_POST['name'];
	$address =$_POST['address'];
    $contact =$_POST['contact'];
	$email =$_POST['email'];
	$expertise =$_POST['expertise'];
	$userid =$_POST['userid'];

	mysqli_query($db, "INSERT INTO doctor (name, address,contact,email,expertise,userid) VALUES
	('$name', '$address', '$contact', '$email', '$expertise', '$userid' )");
	$_SESSION['message'] = "Records Saved";
	header ('location: addDoctor2.php');
}
if (isset($_POST['update'])){
	$id=$_POST['id'];
	$name =$_POST['name'];
	$address =$_POST['address'];
    $contact =$_POST['contact'];
	$email =$_POST['email'];
	$expertise =$_POST['expertise'];
	$userid =$_POST['userid'];

mysqli_query($db, "UPDATE doctor SET name='$name', address='$address', contact='$contact',
email='$email', expertise='$expertise', userid='$userid' WHERE id=$id");
$_SESSION['message'] = "Records Updated Successfully!";
header ('location: addDoctor2.php');

}
if (isset ($_GET['del'])){	
		$id=$_GET['del'];
		mysqli_query($db, "DELETE FROM diagnosis WHERE id=$id");
		$_SESSION['message'] ="Records Deleted!";
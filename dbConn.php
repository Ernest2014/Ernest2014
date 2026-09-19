<?php
$db=mysqli_connect("localhost","root","", "pregnancy");
if(!$db) {
    die("Connection Failed" . mysqli_connect_error());
}
?>
<?php 
$con = mysqli_connect("localhost","root","","pharmacy");
$id = $_POST['id'];
$query = "DELETE FROM events WHERE id = $id";
$fire = mysqli_query($con,$query) or die(mysqli_error($con));
?>
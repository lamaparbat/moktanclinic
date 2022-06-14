<?php
$con = mysqli_connect("localhost","root","","pharmacy");
//inserting the new subscriber
if(isset($_POST['subscribe_btn'])){
  $email = $_POST['email'];
  $insert_query = "INSERT INTO subscriber(email) VALUES('$email')";
  if(mysqli_query($con,$insert_query)){
    echo "<script>alert('Thank You!');</script>";
    echo "<script>location.assign('index.php');</script>";
  }
}
?>
<?php
$con = mysqli_connect("localhost","root","","pharmacy");
$subscriber = $id = "";

//getting the number of subscriber
$select_query = "SELECT * FROM subscriber";
$fire = mysqli_query($con, $select_query);
while(mysqli_fetch_assoc($fire)){
  $id++;
}
$subscriber = $id;
?>
?>
<html>
<head>
    <title>Moktan Clinic and Pathology lab Pvt.Ltd.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" type="text/css" href="material/bootstrap.min.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <link rel="stylesheet" type="text/css" href="style.css">
     <style>
     	*{
     		box-sizing: border-box;
     	}
      #map{
      	margin-top: 80px;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white text-white fixed-top">
  <a class="navbar-brand" href="#"><img class="animate__animated animate__zoomIn" src="material/images/logo.png" height="70px" width="400px"></a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-1 pr-3 animate__animated animate__bounceInRight">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<!-- map container -->
<div class="container" id="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.6699357628763!2d85.34911901503337!3d27.696594532571222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198643d8bfc9%3A0xd6b1636deb9aaa2c!2sMoktan%20Farmacy!5e0!3m2!1sen!2snp!4v1615884005827!5m2!1sen!2snp" width="100%" height="700" style="border:0;" allowfullscreen="" loading="active"></iframe>
</div>

<!-- footer -->
<div class="container-fluid footer">
  <div class="row subscribe">
    <div class="col-md-12">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-4" id="time"><br>
          <h5><b>Schedule to visit</b></h5>
          <h6><div id="dot"></div>Opening Time : 6:00 am</h6>
          <h6><div id="dot"></div>Closing Time : 8:00 pm</h6>
        </div>
        <div class="col-md-4 mb-2"><br>
          <h5><b>Subscribe to know the lates details</b></h5>
          <p class="ml-2 text-info">No.of subscriber: <?php echo $subscriber; ?></p>
          <form method="post" action="subscriber.php">
            <textarea placeholder="Enter your email or Phone Number" id="subscribe_input" required="" name="email"></textarea>
            <input type="submit" id="link" name="subscribe_btn">
          </form>
        </div>
        <div class="col-md-4">
          <img id="subscribe_img" src="material/images/img10.png" height="220px" width="350px">
        </div>
      </div>
      </div>
    </div>
  </div>
  <div class="row footer_body">
    <div class="col-md-3">
      <h5> MEDICAL SERVICES</h5>
      <p><div id="dot"></div> E.C.G</p>
      <p><div id="dot"></div> Pathology Lav</p>
      <p><div id="dot"></div> Pharmacy Ultrasound</p>
      <p><div id="dot"></div> Family Planning Counselling</p>
      <p><div id="dot"></div> General O.P.D / Specialist O.P.D</p>
      <p><div id="dot"></div> Minor Surgery(Dressing, Stitching)</p>
    </div>
    <div class="col-md-3">
      <h5> ABOUT US</h5>
      <p><div id="dot"></div> E.C.G</p>
      <p><div id="dot"></div> Pathology Lav</p>
      <p><div id="dot"></div> Pharmacy Ultrasound</p>
      <p><div id="dot"></div> Family Planning Counselling</p>
      <p><div id="dot"></div> General O.P.D / Specialist O.P.D</p>
      <p><div id="dot"></div> Minor Surgery(Dressing, Stitching)</p>
    </div>
    <div class="col-md-3">
      <h5>LATEST EVENT</h5>
      <p><div id="dot"></div>Free Eye Sibir</p>
      <p><div id="dot"></div>Blood Donation Programmer</p>
      <p><div id="dot"></div>Covid-19 Checkup(P.C.R Test)</p>
      <p><div id="dot"></div>Free Dengue Checkup(Rural areas)</p>
    </div>
    <div class="col-md-3" id="contact_link">
      <h5 id="contact">CONTACT US</h5>
      <p><img src="material/images/fb.png" height="30px" width="30px">&nbsp &nbsp Dilip Moktan</p>
      <p><img src="material/images/group.png" height="30px" width="30px">&nbsp &nbsp Moktan Pharmacy</p>
      <p><img src="material/images/phone.png" height="25px" width="25px">&nbsp &nbsp 01-4116615/98151018098</p>
      <p><img src="material/images/google.png" height="26px" width="26px">&nbsp &nbsp dmoktan1983@gmail.com</p>
      <p><a href="map.php" class="text-white"><img src="material/images/location.png" height="32px" width="32px">&nbsp &nbsp Baburam Acharya Sadak,Sinamangal-9</p></a>
    </div>
  </div>
  <div class="row policy">
    <div class="col-md-12">
      <p id="copyright">&#169;2021 Moktan Clinic & Pathology Lab Ltd.</p>
      <div id="policy_link">
        <a href="#" class="mr-3">Terms of services</a>
        <a href="#" class="mr-3">Privacy </a>
        <a href="#" class="mr-3">Policy </a>
        <a href="map.php" class="mr-3">Map </a>
      </div>
    </div>
  </div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html> 
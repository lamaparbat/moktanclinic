<?php
$con = mysqli_connect("localhost","root","","pharmacy");
$subscriber = $id = "";

//getting the number of subscriber
$select_query = "SELECT * FROM subscriber";
$fire = mysqli_query($con, $select_query) or die(mysqli_error($con));
while(mysqli_fetch_assoc($fire)){
  $id++;
}
$subscriber = $id;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Moktan Clinic and Pathology lab Pvt.Ltd.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" type="text/css" href="material/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Owl Stylesheets -->
  <link rel="stylesheet" type="text/css" href="material/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="material/owl.theme.default.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white text-white fixed-top">
  <a class="navbar-brand" href="#"><img class="animate__animated animate__zoomIn" src="material/images/logo.png" height="70px" width="410px"></a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-1 pr-3 animate__animated animate__bounceInRight">
      <li class="nav-item active">
        <a class="nav-link" href="#homepage">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about_link">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services_link">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#event_link">EVENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">ADMIN</a>
      </li>
    </ul>
  </div>
  <h6 id="nepali_font">(Moktan Pharmacy/मोक्तान फार्मेसी)</h6>
</nav>

<!-- homepage -->
<div class="container-fluid homepage" id="homepage">
  <img class="animate__animated animate__zoomInUp" id="img_quotes" src="material/images/quotes.png" height="200px" width="300px">
  <div class="row mr-auto">
    <div class="col-md-12">
      <a href="#event_link" style="text-decoration:none;"><button id="visit" class="animate__animated animate__zoomIn"> VISIT US</button></a>
      <a href="#contact" style="text-decoration:none;"><button id="subscribe" class="animate__animated animate__zoomIn">SUBSCRIBE</button></a>
    </div>
  </div>
</div>
<!-- medical qoutes -->
<div class="container-fluid quotes mt-3" >
    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-4">
            <img class="animate__animated animate__zoomIn" src="material/images/img8.png" height="170px" width="140px">
          </div>
          <div class="col-md-8">
            <b><h5 class="animate__animated animate__zoomIn">Consultation</h5></b>
            <p class="animate__animated animate__zoomIn">There is no greater wealth than wisdom, no greater poverty than ignorance; no greater heritage than culture and no greater support than consultation.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-4">
            <img class="animate__animated animate__zoomIn" src="material/images/diagnosis.png" height="170px" width="140px">
          </div>
          <div class="col-md-8">
            <b><h5 class="animate__animated animate__zoomIn" id="diagnosis">Diagnosis</h5></b>
            <p class="animate__animated animate__zoomIn">Good doctors understand the responsibility better than previlige and practice accountability better than business.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-4">
            <img class="animate__animated animate__zoomIn" src="material/images/img9.png" height="160px" width="150px">
          </div>
          <div class="col-md-8">
            <b><h5 class="animate__animated animate__zoomIn" id="online">Online help</h5></b>
            <p class="animate__animated animate__zoomIn">Contact your doctor online and get help by the end of the next working day or sooner Or you can contact from the given phone number.</p>
          </div>
        </div>
    </div>
</div>
<div id="about_link"></div>
</div>
<!-- about us -->
<div class="container-fluid bg-dark about">
  <h5 class="text-center" id="about_title">About Us</h5> 
</div>
<div id="services_link"></div> 
<!-- medical services -->
<div class="container-fluid services mt-5" id="services">
  <h5 class="text-center" id="about_title">Medical Services</h5>
  <div class="row">
    <div class="col-md-8">
      <h6><div id="dot"></div>General O.P.D / Specialist O.P.D</h6>
      <h6><div id="dot"></div>Pathology Lab</h6>
      <h6><div id="dot"></div>Pharmacy</h6>
      <h6><div id="dot"></div>Ultrasound</h6>
      <h6><div id="dot"></div>E.C.G, ECHO</h6>
      <h6><div id="dot"></div>Minor Surgery ( Dressing,  Stitching,  I & D)</h6>
      <h6><div id="dot"></div>Family planning counselling</h6>
      <h6><div id="dot"></div>Mental Counseling</h6>
      <h6><div id="dot"></div>Nebulization</h6>
      <h6><div id="dot"></div>Oxygen ( Home delivery )</h6>
      <h6><div id="dot"></div>Online Counseling</h6>
      <h6><div id="dot"></div>Home services ( for disable patient )</h6>
      <h6><div id="dot"></div>Nursing Services</h6>
      <h6><div id="dot"></div>Immunization as well as Medical equipments are available</h6>
    </div>
    <div class="col-md-4">
      <img src="material/images/img8.png" height="450px" width="500px">
    </div>
  </div>
  <div class="pt-5 mt-5" id="event_link"></div>
</div>
<!-- event -->
<div class="container-fluid events" id="event">
  <h5 class="text-center" id="about_title">Events</h5>
       <!-- owl carousel -->
       <div class="owl-carousel owl-theme">
         <!-- items -->
         <?php 
         $con = mysqli_connect("localhost","root","","pharmacy");
         $select_query = "SELECT * FROM events";
         $fire = mysqli_query($con, $select_query) or die(mysqli_error($con));
         while($row = mysqli_fetch_assoc($fire)){
         ?>
         <div class="item">
           <div class="card">
             <img src="material/upload/<?php echo $row['src']; ?>" class="card-img-top" height="380px">
             <div class="card-body">
               <h6 class="card-title"><?php echo $row['title']; ?></h6>
               <p class="card-text" style="font-size: 15px;"><?php echo $row['caption']; ?><br>
               <a href="#" id="useful_link">#<?php echo $row['link']; ?></a>
             </p>
             </div>
           </div>
         </div>
        <?php } ?>
         <!-- end of items -->
      </div>
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
        <div class="col-md-4"><br>
          <h5><b>Subscribe to know the lates details</b></h5>
          <p class="ml-2 text-info">No.of subscriber: <?php echo $subscriber; ?></p>
          <form method="post" action="subscriber.php">
            <textarea placeholder="Enter your email or Phone Number" name="email" id="subscribe_input" required=""></textarea>
            <input type="submit" name="subscribe_btn" value="SUBSCRIBE" id="link">
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
      <p><div id="dot"></div> E.C.G, ECHO</p>
      <p><div id="dot"></div> Pathology Lab</p>
      <p><div id="dot"></div> Pharmacy</p>
      <p><div id="dot"></div> Family Planning Counselling</p>
      <p><div id="dot"></div> General O.P.D / Specialist O.P.D</p>
      <p><div id="dot"></div> Minor Surgery(Dressing, Stitching)</p>
    </div>
    <div class="col-md-3">
      <h5> ABOUT US</h5>
      <p><div id="dot"></div></p>
      <p><div id="dot"></div>Dilip Moktan(Managing Director)</p>
      <p><div id="dot"></div> Moktan Pharmacy</p>
    </div>
    <div class="col-md-3">
      <h5>LATEST EVENT</h5>
      <p><div id="dot"></div>Free Health camp</p>
      <p><div id="dot"></div>Blood Donation Programme</p>
    </div>
    <div class="col-md-3" id="contact_link">
      <h5 id="contact">CONTACT US</h5>
      <p><img src="material/images/fb.png" height="30px" width="30px">&nbsp &nbsp Dilip Moktan</p>
      <p><img src="material/images/group.png" height="30px" width="30px">&nbsp &nbsp Moktan Pharmacy</p>
      <p><img src="material/images/phone.png" height="25px" width="25px">&nbsp &nbsp 01-4116615/98151018098</p>
      <p><img src="material/images/google.png" height="26px" width="26px">&nbsp &nbsp dmoktan1983@gmail.com</p>
      <a href="map.php" class="text-white"><p><img src="material/images/location.png" height="32px" width="32px">&nbsp &nbsp Sinamangal-9, Kathmandu</p></a>
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
<!-- owl carousel -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="material/owl.carousel.js"></script>

<!-- bootsrap -->
<script src="material/bootstrap.min.js"></script>
<script>
  //owl carousel
  $('.owl-carousel').owlCarousel({
    loop:false,
    margin:50,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        }
    }
})
$(document).scroll(function(id){
  var pos = scrollY;
  if(pos>500){
     $('.about').addClass('animate__animated animate__fadeIn');
     $('#about_title').addClass('animate__animated animate__zoomInRight');
  }
  if(pos>1100){
    $('.services #about_title').addClass('animate__animated animate__fadeIn');
    $('.services').addClass('animate__animated animate__fadeIn');
  }
  if(pos>1800){  
    $('.events #about_title').addClass('animate__animated animate__zoomInRight');
    $('.events .owl-carousel .item .card').addClass('animate__animated animate__zoomInRight');
    $('.events #link').addClass('animate__animated animate__zoomInRight');
  }
  if(pos>2450){  
    $('.footer .subscribe .col-md-12 .row h5').addClass('animate__animated animate__zoomIn');
    $('.footer .subscribe .col-md-12 .row h6').addClass('animate__animated animate__zoomInRight');
    $('.footer .subscribe #subscribe_input').addClass('animate__animated animate__zoomInUp');
    $('.footer .subscribe .col-md-12 .row .col-md-4 img').addClass('animate__animated animate__zoomIn');
    $('.footer #link').addClass('animate__animated animate__zoomIn'); 
  }
 })

</script>
</html>
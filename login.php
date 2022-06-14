<?php
$con = mysqli_connect("localhost","root","","pharmacy");
$login_result = "";
$login_result_label = $subscriber = $id = "";
  if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $email;
    echo $password;
    //select query
    $select_query = "SELECT * FROM personal_data";
    $fire = mysqli_query($con, $select_query) or die(mysqli_error($con));
    while($row = mysqli_fetch_assoc($fire)){
      if($row['email'] == $email && $row['password'] == $password){
        echo "<script>location.assign('admin.php');</script>";
        $login_result = "text-success";
        $login_result_label = "Successfully login!!";
      }else{
        $login_result = "text-danger";
        $login_result_label = "Login failed!!";
      }
    }
  }

//getting the number of subscriber
$select_query = "SELECT * FROM subscriber";
$fire = mysqli_query($con, $select_query);
while(mysqli_fetch_assoc($fire)){
  $id++;
}
$subscriber = $id;
?>
<html>
<head>
    <title>Moktan Clinic and Pathology lab Pvt.Ltd.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" type="text/css" href="material/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <style>
      #loading {
        width: 100%;
        height: 100vh;
        background-color: #fff;
        z-index: 1000;
        position: absolute;
      }
      .navbar #nav_link{
        margin-top: -5px;
        visibility: hidden;
      }
      .form{
        padding-top: 150px;
        margin-bottom: 150px;
        text-align: center;
        font-family: 'PT Sans Narrow', sans-serif;
      }
      .form .row{
        padding-top: 80px;
        padding-bottom: 90px;
        border-radius: 20px;
        box-shadow: -1px 1px 5px 7px rgba(182,182,182,0.75);
        -webkit-box-shadow: -1px 1px 5px 7px rgba(182,182,182,0.75);
        -moz-box-shadow: -1px 1px 5px 7px rgba(182,182,182,0.75);
      }
      .form .row .col-md-4 img{
        margin-left: 100px;
      }
      .form .row .col-md-8 #email{
        padding: 8px;
        padding-left: 30px;
        width: 300px;
        border-radius: 20px;
        outline: none;
        border: 1px solid black;
        margin-bottom: 20px;
      }
      .form .row .col-md-8 #email:hover{
       box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
       -webkit-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
       -moz-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
      }
      .form .row .col-md-8 #password{
        padding: 8px;
        padding-left: 30px;
        margin-bottom: 10px;
        width: 300px;
        border-radius: 20px;
        outline: none;
        border: 1px solid black;
      }
      .form .row .col-md-8 #password:hover{
        box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
        -webkit-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
        -moz-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
      }
      #login{
        padding-left: 3px;
        padding-right: 10px;
        margin-right: 10px;
        margin-top: 10px;
        font-size: 15px;
        height: 40px;
        width: 130px;
        background: rgb(12,78,148);
        background-image: linear-gradient(to right bottom, #051937, #00215a, #1a267b, #422399, #6f0ab2);
        color: white;
        font-family: 'PT Sans Narrow', sans-serif;
        border-radius: 20px;
        outline-style: none;
        border: 1px solid white;
        cursor: pointer;
      }
      #login:hover{
        color: #D9D9D9; 
        box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
        -webkit-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
        -moz-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
      }
      #create{
        padding-left: 3px;
        padding-right: 10px;
        margin-top: 10px;
        font-size: 15px;
        height: 40px;
        width: 150px;
        background: rgb(12,78,148);
        background-image: linear-gradient(to right bottom, #051937, #00215a, #1a267b, #422399, #6f0ab2);
        color: white;
        font-family: 'PT Sans Narrow', sans-serif;
        border-radius: 50px;
        outline-style: none;
        border: 1px solid white;
        cursor: pointer;
      }
      #create:hover{
        color: #D9D9D9; 
        box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
        -webkit-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
        -moz-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
      }
      @media(max-width: 1000px){
        .navbar #nav_link{
          visibility: visible;
        }
        .form{
          padding-top: 30px;
          margin-bottom: 50px;
        }
        .form .row{
          padding-bottom: 0;  
          box-shadow: none;
        }
        .form .row .col-md-4 img{
          margin-left: 0px;
        }
        .form .row .col-md-8 h5{
          margin-top: 30px;
          font-size: 20px;  
        }
      }
    </style>
</head>
<body>
<!-- preloader -->
<div id="loading"></div>

<!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white text-white fixed-top">
  <a class="navbar-brand" href="#"><img class="animate__animated animate__zoomIn" src="material/images/logo.png" height="70px" width="410px"></a>
  </div>
  <a href="index.php"><img src="material/images/home.png" height="25px" width="25px" id="nav_link"></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-1 pr-3 animate__animated animate__bounceInRight">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
  <h6 id="nepali_font">(मोक्तान फार्मेसी)</h6>
</nav>

<!-- form container -->
<div class="container form mt-5">
  <div class="row">
    <div class="col-md-4">
      <img src="material/images/svg2.svg" height="300px" width="300px" class="img-fluid">
    </div>
    <div class="col-md-8">
      <h5><b>LOGIN FORM</b></h5><br>
      <p class="<?php echo $login_result; ?>" id="login_result"><?php echo $login_result_label; ?></p>
      <form method="post" action="login.php">
        <input type="text" name="email" id="email" placeholder="Enter email or phone number" required=""><br>
        <input type="password" name="password" id="password" placeholder=" Enter password" required=""><br>
        <input type="submit" name="submit" id="login">
        <a class="text-dark" href="update.php" id="forget_link">Forget Password?</a>
     </form>
    </div>
    </div>
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
<!-- bootsrap -->
<script src="material/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  //preloader
  setTimeout(function(){
      $('#loading').fadeToggle();
  },500);

  $('#create').click(function(){
    location.assign('signup.php');
  })
</script>
</html> 
<?php
$con = mysqli_connect("localhost","root","","pharmacy");
$id = $check = $login_result = $login_result_label = $subscriber = $id1 = "";

if(isset($_POST['update'])){
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

$select_query = "SELECT * FROM personal_data";
$fire = mysqli_query($con, $select_query) or die(mysqli_error($con));
while($row = mysqli_fetch_assoc($fire)){
  if($row['email'] == $username){
    $id = $row['id'];
    $check = "true";
  }else{
    $check = "false";
  }

//update if check is true
if($check == "true"){
  if($password == $repassword){
    $update_query = "UPDATE personal_data SET password = '$password' WHERE id = '$id'";
    mysqli_query($con,$update_query) or die(mysqli_error($con));
    $login_result = "text-success";
    $login_result_label = "Successfully Updated!!";
  }else{
    $login_result = "text-danger";
    $login_result_label = "Password not matched!!";
  }
}else{
  $login_result = "text-danger";
  $login_result_label = "Email is not correct!!";
}
}

}

//getting the number of subscriber
$select_query = "SELECT * FROM subscriber";
$fire = mysqli_query($con, $select_query) or die(mysqli_error($con));
while(mysqli_fetch_assoc($fire)){
  $id1++;
}
$subscriber = $id1;
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
      /*preloader*/
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
        text-align: center;
        font-family: 'PT Sans Narrow', sans-serif;
      }
      .form .row{
        padding-top: 100px;
        padding-bottom: 50px;
        border-radius: 20px;
        box-shadow: -1px 1px 5px 7px rgba(182,182,182,0.75);
        -webkit-box-shadow: -1px 1px 5px 7px rgba(182,182,182,0.75);
        -moz-box-shadow: -1px 1px 5px 7px rgba(182,182,182,0.75);
      }
      .form .row .col-md-4 img{
        margin-left: 50px
      }
      .form .row .col-md-8 #uname{
        margin-top: -10px;
        padding: 8px;
        padding-left: 30px;
        width: 300px;
        border-radius: 20px;
        outline: none;
        border: 1px solid black;
        margin-bottom: 20px;
      }
      .form .row .col-md-8 #uname:hover{
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
        margin-bottom: 20px;
      }
      .form .row .col-md-8 #password:hover{
        box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
        -webkit-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
        -moz-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
      }
      .form .row .col-md-8 #repassword{
        padding: 8px;
        padding-left: 30px;
        margin-bottom: 10px;
        width: 300px;
        border-radius: 20px;
        outline: none;
        border: 1px solid black;
      }
      .form .row .col-md-8 #repassword:hover{
        box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
        -webkit-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
        -moz-box-shadow: -1px 0px 5px 4px rgba(182,182,182,0.75);
      }
      #login{
        padding-left: 3px;
        padding-right: 10px;
        margin-right: 10px;
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
          padding-top: 50px;
        }
        .form .row{
          padding-top: 0;
          box-shadow: none;
        }
        .form .row .col-md-4 img{
          height: 260px;
          width: 350px;
          margin-left: 0px
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
      <img src="material/images/update.png" height="290px" width="400px">
    </div>
    <div class="col-md-8">
      <h5><b>UPDATE PASSWORD</b></h5><br>
      <p class="<?php echo $login_result; ?>" id="login_result"><?php echo $login_result_label; ?></p>
      <form method="post" action="update.php">
        <input type="text" name="username" id="uname" placeholder="Enter email or phone number"><br>
        <input type="password" name="password" id="password" placeholder=" Enter new password"><br>
        <input type="password" name="repassword" id="repassword" placeholder=" Enter password again"><br>
        <input type="submit" name="update" value="Update" id="login">
      </form>
    </div>
  </div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  setTimeout(function(){
      $('#loading').fadeToggle();
  },500);
</script>
</html> 
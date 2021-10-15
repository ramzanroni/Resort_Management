
<?php
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>resort</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style type="text/css">
    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      /*min-width: 0;*/
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0,0,0,.125);
      border-radius: .25rem;
    }

    .card-body {
      flex: 1 1 auto;
      /* min-height: 1px;*/
      padding: 1rem;
    }

    .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
    }

    .gutters-sm>.col, .gutters-sm>[class*=col-] {
      padding-right: 8px;
      padding-left: 8px;
    }
    .mb-3, .my-3 {
      margin-bottom: 1rem!important;
    }

    .bg-gray-300 {
      background-color: #e2e8f0;
    }
    .h-100 {
      height: 100%!important;
    }
    .shadow-none {
      box-shadow: none!important;
    }


    .container .title{
      color: #1a1a1a;
      text-align: center;
      margin-bottom: 10px;
    }

    .content {
      position: relative;
      width: 100%;
      max-width: 600px;
      margin: auto;
      overflow: hidden;
    }

    .content .content-overlay {
      background: rgba(0,0,0,0.7);
      position: absolute;
      height: 99%;
      width: 100%;
      left: 0;
      top: 0;
      bottom: 0;
      right: 0;
      opacity: 0;
      -webkit-transition: all 0.4s ease-in-out 0s;
      -moz-transition: all 0.4s ease-in-out 0s;
      transition: all 0.4s ease-in-out 0s;
    }

    .content:hover .content-overlay{
      opacity: 1;
    }

    .content-image{
      width: 600px;
      height: 450px; 
    }

    .content-details {
      position: absolute;
      text-align: center;
      padding-left: 1em;
      padding-right: 1em;
      width: 100%;
      top: 50%;
      left: 50%;
      opacity: 0;
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      -webkit-transition: all 0.3s ease-in-out 0s;
      -moz-transition: all 0.3s ease-in-out 0s;
      transition: all 0.3s ease-in-out 0s;
    }

    .content:hover .content-details{
      top: 50%;
      left: 50%;
      opacity: 1;
    }

    .content-details h3{
      color: #fff;
      font-weight: 25px;
      letter-spacing: 0.15em;
      margin-bottom: 0.5em;
      text-transform: uppercase;
    }

    .content-details p{
      color: #fff;
      font-size: 15px;
    }

    .fadeIn-bottom{
      top: 80%;
    }

    .fadeIn-top{
      top: 20%;
    }

    .fadeIn-left{
      left: 20%;
    }

    .fadeIn-right{
      left: 80%;
    }

  </style>
  

</head>
<body>
  <!-- header section starts  -->
  <header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>R</span>esort</a>

    <nav class="navbar">
      <a style="color: orange;" href="index.php">Home</a>
      <a href="room_view.php">Room</a>
      <a href="service.php">services</a>
      <a href="gallery.php">gallery</a>
      <a href="review.php">review</a>
      <a href="about.php">About</a>
      <a href="contact.php">contact</a>
    </nav>
    <div class="icons">
      <!-- <i class="fas fa-search" id="search-btn"></i> -->

      <div class="dropdown float-right">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
         <?php  
         if (isset($_SESSION['name'])) 
         {
          ?>
          <i  id="login-btn"><?php echo $_SESSION['name']; ?></i>
          <?php
        }
        else{
          ?>
          <i class="fas fa-user" id="login-btn"></i>
          <?php
        }
        ?>
      </button>
      <div class="dropdown-menu ">
        <?php  
        if (isset($_SESSION['name'])) 
        {
          ?>
          <a style="font-family: cursive; font-size: 20px;" class="dropdown-item p-2 text-center " href="profile.php">Profile</a>
          <a style="font-family: cursive; font-size: 20px;" class="dropdown-item p-2 text-center " href="update_password.php">Change Password</a>
          <a style="font-family: cursive; font-size: 20px;" class="dropdown-item p-2 text-center " href="booking_history.php">My Booking History</a>
          <a style="font-family: cursive; font-size: 20px;" class="dropdown-item p-2 text-center " href="logout.php">Log Out</a>
          <?php
        }
        else
        {
          ?>
          <a style="font-family: cursive; font-size: 20px;" class="dropdown-item p-2 text-center " href="login.php">Login</a>
          <?php
        }

        ?>

      </div>
    </div>
  </div>



</header>

<div style="width: 100%; clear: both;margin-bottom: px;">
  <!-- header section ends -->

  <!-- Home section starts -->

  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner.jpg" alt="" width="1100" height="400">
      </div>
      <div class="carousel-item">
        <img src="images/banner2.jpg" alt="" width="1100" height="400">
      </div>
      <div class="carousel-item">
        <img src="images/banner4.jpg" alt="" width="1100" height="400">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div><br>


  <!-- Home section ends -->
  <div class="service" >
    <p class="text-center"><b style="font-family: URW Chancery L, cursive;">Our  Services</b></p>
    <hr>
  </div>

  <!-- Service galary starts -->
  <div class="container">
    <div class="row ">
      <div class="col-md-4 float-left shadow">
        <a target="_blank" href="images/IMG_1768.JPG">
          <img style="margin-top: 15px;" src="images/IMG_1768.JPG" alt="Cinque Terre" style="position: relative;" width="350px" height="250px">
        </a>
        <div class="desc"><b>SPECIAL ROOMS</b></div>
        
      </div>
      <div class="col-md-4 float-left shadow">
        <a target="_blank" href="images/bg_2.jpg">
          <img style="margin-top: 15px;" src="images/bg_2.jpg" alt="Cinque Terre" style="position: relative;" width="350px" height="250px">
        </a>
        <div class="desc"><b>SWIMMING POOL</b></div>
        
      </div>
      <div class="col-md-4 float-left shadow">
        <a target="_blank" href="images/2020-08-06.jpg">
          <img style="margin-top: 15px;" src="images/2020-08-06.jpg" alt="Cinque Terre" style="position: relative;" width="350px" height="250px">
        </a>
        <div class="desc"><b>PLAYGROUND</b></div>
        
      </div>
      
    </div>
  </div>
  <!-- Service galary ends -->



  <div  class="Welcome">
    <p style="font-size: 40px; margin-top: 70px; " class="text-center"><b style="font-family: URW Chancery L, cursive;">Welcome To The Resort </b></p>
    <p style="font-size: 20px;color: gray;" class="text-center"><b style="font-family: cursive;">A New Vision of Luxury Resort</b></p>
    <hr>



    <div class="container">
      <div class="row ">
        <div class="col-md-6 float-left p-3 shadow ">
          <a href="room_view.php">
            <div class="content">
              <div class="content-overlay"></div>
              <img class="content-image" src="images/IMG_1768.JPG">
              
              <div class="content-details fadeIn-bottom">
                <h3 style="font-size: 40px;color: white;" class="content-title">ROOM & SUITES</h3>
                <p style="font-size: 20px" class="content-text">This is 3 Star Deluxe Hotel Located Right On The Beach 100 Meter From Kolatoli Turning Point</p>
              </div>

            </div>
          </a>
        </div>
        <div class="col-md-6 float-left p-3 shadow ">
          <a href="about.php">
            <div class="content">
              <div class="content-overlay"></div>
              <img class="content-image" src="images/2020-02-24.jpg">
              <div class="content-details fadeIn-bottom">
                <h3 style="font-size: 40px;color: white;" class="content-title">DINE</h3>
                <p style="font-size: 20px" class="content-text">This is 3 Star Deluxe Hotel Located Right On The Beach 100 Meter From Kolatoli Turning Point</p>
              </div>

            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ">
        <div class="col-md-6 float-left p-3 shadow ">
          <a href="">
            <div class="content">
              <div class="content-overlay"></div>
              <img class="content-image" src="images/photo-1566073771259-6a8506099945.jfif">
              <div class="content-details fadeIn-bottom">
                <h3 style="font-size: 40px;color: white;" class="content-title">RELAX</h3>
                <p style="font-size: 20px" class="content-text">This is 3 Star Deluxe Hotel Located Right On The Beach 100 Meter From Kolatoli Turning Point</p>
              </div>

            </div>
          </a>
        </div>
        <div class="col-md-6 float-left p-3 shadow ">
          <a href="">
            <div class="content">
              <div class="content-overlay"></div>
              <img class="content-image" src="images/2021-02-09.jpg">
              <div class="content-details fadeIn-bottom">
                <h3 style="font-size: 40px;color: white;" class="content-title">ENJOY</h3>
                <p style="font-size: 20px" class="content-text">This is 3 Star Deluxe Hotel Located Right On The Beach 100 Meter From Kolatoli Turning Point</p>
              </div>

            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="container">
      <p style="font-size: 40px; margin-top: 60px; " class="text-center"><b style="font-family: URW Chancery L, cursive;">Recently Added Room</b></p>
      <hr>
      <div class="row mt-5">

        <?php  
        $sql=$con->query("SELECT * FROM `add_resort` LIMIT 3");
        while ($row=mysqli_fetch_assoc($sql)) 
        {
          ?>
          <div  class="col-md-4 m-0 p-0 float-left">
           <div style="margin: 5px;
           border: 1px solid #ccc;
           float: left;" class="shadow">
           <a style="text-decoration: none;" href="selected_resort.php?resort_id=<?php echo $row['id']; ?>">
            <img src="Dashboard/admin/images/<?php echo $row['image']; ?>" alt="Cinque Terre" style=" width: 370px; height: 255px;">
            <div class="desc"><b><?php echo $row['resort_name']; ?></b>
              <p> Room Type: <?php echo $row['troom']; ?></p>
              <p style="background-color: orange;" class="p-2 text-center text-white">BDT-<?php echo $row['price']." /= per/night"; ?></p>
            </div>
          </a>

        </div>
      </div>
      <?php
    }

    ?>

  </div>
</div>

<div class="container">
  <p style="font-size: 40px; margin-top: 60px; " class="text-center"><b style="font-family: URW Chancery L, cursive;">Our Happy Guest Says</b></p>
  <hr>
  <div style="margin-top: 50px;" class="row">
    <div style="font-size: 15px;" class="col-md-4">
      <img style="margin-left: 105px;" src="images/c1.jpg" class="rounded-circle" alt="Cinque Terre" width="150px" height="130px">
      
      <p class="star mt-3 text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
      <p style="font-size: 20px;color:black;text-align: center;" class="name">Nathan Smith</p>
      <p style="text-align: center; color: black; font-size: 20px;line-height: 5px;" class="position">Guests</p>
      <p style="color: black;text-align:center;">A small river named Duden flows by their place and supplies it with the necessary regelialia. </p><p style="margin-left: 130px;" class="btn btn-warning">See more</p>

    </div>
    <div style="font-size: 15px;" class="col-md-4">
      <img style="margin-left: 105px;" src="images/c2.jpg" class="rounded-circle" alt="Cinque Terre" width="150px" height="130px">
      
      <p class="star mt-3 text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
      <p style="font-size: 20px;color:black;text-align: center;" class="name">Nathan Smith</p>
      <p style="text-align: center; color: black; font-size: 20px;line-height: 5px;" class="position">Guests</p>
      <p style="color: black;text-align:center;">A small river named Duden flows by their place and supplies it with the necessary regelialia. </p><p style="margin-left: 135px;" class="btn btn-warning">See more</p>

    </div>
    <div style="font-size: 15px;" class="col-md-4">
      <img style="margin-left: 105px;" src="images/c1.jpg" class="rounded-circle" alt="Cinque Terre" width="150px" height="130px">
      
      <p class="star mt-3 text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
      <p style="font-size: 20px;color:black;text-align: center;" class="name">Nathan Smith</p>
      <p style="text-align: center; color: black; font-size: 20px;line-height: 5px;" class="position">Guests</p>
      <p style="color: black;text-align:center;">A small river named Duden flows by their place and supplies it with the necessary regelialia. </p><p style="margin-left: 135px;" class="btn btn-warning">See more</p>

    </div>

  </div>
</div>

<div class="container">
  <p style="font-size: 40px; margin-top: 60px; " class="text-center"><b style="font-family: URW Chancery L, cursive;">Our Team Members</b></p>
  <hr>
</div>
<div class="container">
  <div style="margin-top: 50px;" class="row">
    <div class="col-md-4">
      <img style="margin-left: 105px;" src="images/team-2.jpg" class="rounded-circle" alt="Cinque Terre" width="150px" height="130px">
      
      <p style="font-size: 20px;color:black;text-align: center;margin-top: 5px;" class="name">NAFISA YASMIN</p>
      <p style="text-align: center; color: black; font-size: 15px;line-height: 5px;" class="position">ID: 191015035</p>
      <p style="color: black;text-align:center;font-size: 15px;">Dept. of CSE </p>
      <p style="color: black;text-align:center;font-size: 15px;line-height: 3px;">Green University Of Bangladesh.</p>
    </div>
    <div class="col-md-4">
      <img style="margin-left: 105px;" src="images/tithi.jpeg" class="rounded-circle" alt="Cinque Terre" width="150px" height="130px">
      
      <p style="font-size: 20px;color:black;text-align: center;margin-top: 5px;" class="name">SAIMA AKTHER</p>
      <p style="text-align: center; color: black; font-size: 15px;line-height: 5px;" class="position">ID: 191015016</p>
      <p style="color: black;text-align:center;font-size: 15px;">Dept. of CSE </p>
      <p style="color: black;text-align:center;font-size: 15px;line-height: 3px;">Green University Of Bangladesh.</p>
    </div>
    <div class="col-md-4">
      <img style="margin-left: 105px;" src="images/mou.jpeg" class="rounded-circle" alt="Cinque Terre" width="150px" height="130px">
      
      <p style="font-size: 20px;color:black;text-align: center;margin-top: 5px;" class="name">SHANTA ISLAM MOU</p>
      <p style="text-align: center; color: black; font-size: 15px;line-height: 5px;" class="position">ID: 191015173</p>
      <p style="color: black;text-align:center;font-size: 15px;">Dept. of CSE </p>
      <p style="color: black;text-align:center;font-size: 15px;line-height: 3px;">Green University Of Bangladesh.</p>
    </div>

  </div>
</div>
<footer style="background-color: #404240; margin-top: 100px; margin-bottom: 0px; height: 300px;" class="ftco-footer ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md">
        <div style="margin-left: 30px;" class="ftco-footer-widget">
          <h2 class="ftco-heading-2">Resort</h2><br><br>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled">
            <li  class="ftco-animate"><a href="#"><span style="font-size: 25px;" class="fab fa-facebook-square"></span></a></li>
            <li class="ftco-animate"><a href="#"><span style="font-size: 25px;" class="fab fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span style="font-size: 25px;" class="fab fa-instagram-square"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div style="margin-left: 90px;"  class="ftco-footer-widget">
          <h2 class="ftco-heading-2">Useful Links</h2><br><br>
          <ul class="list-unstyled">
            <li><a style="margin-left: 5px;" href="#" class="py-2 d-block">Blog</a></li>
            <li><a style="margin-left: 5px;" href="#" class="py-2 d-block">Rooms</a></li>
            <li><a style="margin-left: 5px;" href="#" class="py-2 d-block">Amenities</a></li>
            <li><a style="margin-left: 5px;" href="#" class="py-2 d-block">Gift Card</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
       <div style="margin-left: 70px;" class="ftco-footer-widget">
        <h2 class="ftco-heading-2">Privacy</h2><br><br>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Career</a></li>
          <li><a href="#" class="py-2 d-block">About Us</a></li>
          <li><a href="#" class="py-2 d-block">Contact Us</a></li>
          <li><a href="#" class="py-2 d-block">Services</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget">
        <h2 class="ftco-heading-2">Have a Questions?</h2><br><br>
        <div class="block-23">
          <ul style="list-style-type: none;">
            <li><span class="fas fa-map-marker-alt"></span> <span style="margin-left: 10px;" class="text">New road, Sreemangal, Moulvibazar</span></li><br><br>
            <li><a href="#"><span class="fas fa-phone-alt"></span> <span style="margin-left: 10px;" class="text">+8801777777777</span></a></li><br><br>
            <li><a href="#"><span class="fas fa-envelope"></span> <span style="margin-left: 10px;" class="text">xyz@gmail.com</span></a></li>
          </ul><br><br><br>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>
</body>
</html>


<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  <script src="script.js"></script> -->

<?php
session_start();
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
</head>
<body>
  <!-- header section starts  -->
  <header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>R</span>esort</a>

    <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="room_view.php">Room</a>
      <a style="color: orange;" href="service.php">services</a>
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
<div>
  <img style="margin-top: 70px;" src="images/home-banner1.jpg" height="600px" width="100%">
</div><br>

<div class="container text-center">
  <h1 style="font-family: cursive; font-size: 50px; color:orange; padding: 5px;"  >Our Fecilities & Services</h1>
  <hr>
</div><br>
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
<div style="margin-top: 50px;" class="container-fluid">
  <div style="overflow: hidden;clear: both;" class="row float-left">
    <div class="col-md-6">
      <div class="col-md-12">
        <img src="images/2021-04-27.jpg" width="600px" height="350px">
      </div>
      <div style="margin-left: 8px" class="row float-left">
        <div class="col-md-5 p-2 m-2">
          <img src="images/photo-1623216216626-f8bfd191552d.jfif" width="295px" height="200px">
        </div>
        <div  class="col-md-5 p-2 m-2">
          <img style="margin-left:25px" src="images/photo-1626926938421-90124a4b83fa.jfif" width="295px" height="200px">
        </div>
      </div>
      <div class="col-md-12">
        <img src="images/photo-1575783970733-1aaedde1db74.jfif" width="600px" height="350px">
      </div>
      
    </div>
    <div style="font-size: 20px;margin-top: 30px" class="col-md-6 float-left">
      <h1 style="font-size: 35px; color: orange;font-family: cursive; text-align: center;margin-left: 60px;margin-bottom: 10px;">Facilities at our Resort</h1>
      <div>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      The main swimming pool, in three different levels in based inside a <span style="margin-left: 50px;">small valley.</span>
    </div>
    <div style="margin-left: 50px;">
      <ul style="list-style: none;">
        <p>It features the following:</p>
        <li >
          <span>✔</span>
          Open air Jacuzzi on the top layer.
        </li>
        <li>
          <span>✔</span>
          70' long main infinity edged pool in the middle layer with the sunken pool bar.
        </li>
        <li>
          <span>✔</span>
          50' long lap pool on the lower layer.
        </li>
        <li>
          <span>✔</span>
          Gymnasium with separate male and female steam bath facility.
        </li>
        <li>
          <span>✔</span>
          Separate male and female changing room with lockers.
        </li>
      </ul>
    </div>
    <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      A 1.4 km long circular multidimensional walking trail.<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Open air Amphitheater<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Children's Nursery Playground<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Air conditioned mosque

    </div>
    
  </div>
  
</div>
<div style="margin-left: 400px;margin-top: 30px;" class="container">
  <div style="margin-top: 100px;overflow: hidden;clear: both;"  class="row ">
    <div style="margin-top: 50px;font-size: 20px;line-height: 5px;" class="col-md-5 float-left">
      <h1 style="font-size:35px; color: orange;font-family: cursive; ">Sports Facilities</h1>  <br><br><br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      One hard court Tennis<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Two Badminton courts<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Canoeing<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Cycling<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Table Tennis<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Football

      
      
    </div>
    <div style="margin-top: 50px;font-size: 20px;margin-left: 20px" class="col-md-5 float-left">
      <h1 style="font-size: 35px; color: orange;font-family: cursive;">Services</h1><br>
       <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Free Wi-Fi in the entire resort premises<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Cable TV by fiber optic cable<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Shops<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Excursion tours<br>
      <img style="margin-left: 10px;" src="images/icon.png" width="50px" height="50px">
      Uninterrupted 24x7 full power supply

      
    </div>
    
  </div>
  
</div>
<br><br>


<footer style="background-color: #404240;" class="ftco-footer ">
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


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>
</body>
</html>
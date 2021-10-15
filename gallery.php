<?php
session_start();
$con = mysqli_connect("localhost","root","","resort") or die(mysql_error());

?>
<!DOCTYPE html>
<html>
<head>
  <title>resort</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

</head>
<body>
  <!-- header section starts  -->
   <header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>R</span>esort</a>

    <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="room_view.php">Room</a>
      <a href="service.php">services</a>
      <a style="color: orange" href="gallery.php">gallery</a>
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
    <div >
      <img style="margin-top: 70px;" src="images/home-banner1.jpg" height="600px" width="100%">
    </div><br><br>

<?php
include_once 'imageview.html';
?>









  <footer style="background-color: #404240;margin-top: 50px;" class="ftco-footer ">
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
<?php
session_start();
include_once 'conn.php';
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
      <a href="gallery.php">gallery</a>
      <a style="color: orange" href="review.php">review</a>
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
<!-- 
  review page -->
  <div class="container text-center">
    <h1 style="font-family: cursive; font-size: 50px; background-color:orange; color:#ffffff; padding: 5px;"  > Send Your Feedback / Review</h1>

  </div>

  <div style="margin-left: 300px;margin-right: 20px;" class="container-fluid ">
    <div class="row">
      <div style=" margin-top: 100px;" class="d-flex justify-content-center">
        <div class="content text-center">
          <div class="ratings"> <span class="product-rating">4.6</span><span style="font-size: 50px;">/5</span>
            <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="rating-text"> <span style="font-size: 20px;font-family: cursive;">46 ratings & 15 reviews</span> </div>
          </div>
        </div>
      </div>
      <form  style="margin-left: 150px; margin-top: 100px;" method="post" name="sentMessage" id="contactForm" >
                    <div class="control-group form-group">

                      <label class="contact-p1"><b>Full Name:</b></label>
                      <input type="text" class="form-control" name="name" id="name" required >
                      <p class="help-block"></p>

                    </div>  
                    <div class="control-group form-group">

                      <label class="contact-p1"><b>Phone Number:</b></label>
                      <input type="tel" class="form-control" name="phone" id="phone" required >
                      <p class="help-block"></p>

                    </div>
                    <div class="control-group form-group">

                      <label class="contact-p1"><b>Email Address:</b></label>
                      <input type="email" class="form-control" name="email" id="email" required >
                      <p class="help-block"></p>

                    </div>

                    <div class="control-group form-group">

                      <label class="contact-p1"><b>Send Message:</b></label><br>
                            <!-- <input type="text" class="form-control" name="message" id="message" required >
                              <p class="help-block"></p> -->
                              <textarea type="message" rows="4" cols="50" style="border: 2px solid; border-color: gray; " name="message" id="message"  placeholder="Enter text here...">  </textarea>

                            </div> 



                            <input style="padding: 3px; margin-top: 7px; font-size: 20px; background-color:orange" type="submit" name="sub" value="Send Now" class="btn"> 
                          </form>
                          <?php
                          if(isset($_POST['sub']))
                          {
                           $name =$_POST['name'];
                           $phone = $_POST['phone'];
                           $email = $_POST['email'];
                           $message = $_POST['message'];

                           $approval = "Not Allowed";

                           $sql=$con->query("INSERT INTO `review`( `fullname`, `phoneno`, `email`, `message`, `approval`) VALUES ('$name','$phone','$email','$message','$approval')");
                           if($sql)
                           {
                            echo "<script>
                              alert('Send Successfully.. !');
                              document.location = 'review.php';
                            </script>";
                          }
                          else
                          {
                            echo "<script>
                              alert('Something is worng.. !');
                              document.location = 'review.php';
                            </script>";
                          }
                        }
                        ?>

    </div>
  </div>
  <br><br>




  <!-- review ends -->







  <footer style="background-color: #404240;margin-top: 150px;" class="ftco-footer ">
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
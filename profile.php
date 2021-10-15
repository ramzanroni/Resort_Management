
<?php
session_start();
include ('conn.php');
if (!isset($_SESSION['email'])) 
{
  header("Location: index.php");
}
$email=$_SESSION['email'];
$name=$_SESSION['name'];
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

    

      <!-- user profile body -->
      <section class="spad">

    <div style="margin-top: 80px;font-size: 20px;" class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center text-white p-2 m-2" style="background-color: orange; font-size: 35px; font-family: cursive;">User Information</h2>
            </div>


            <div style="margin-top: 30px;margin-left: 300px;    " class="col-lg-6">
                <table class="table table-striped table-hover">
                   <?php
                   $sql_user=$con->query("SELECT * FROM `signup` WHERE `email`='$email'");

                   while ($row=mysqli_fetch_assoc($sql_user))
                   {
                       ?>

                       <tr>
                        <td>First Name: </td>
                        <td><?php echo $row['first_name']; ?></td>
                    </tr>
                    <tr>
                        <td>Last Name: </td>
                        <td><?php echo $row['last_name']; ?></td>
                    </tr>
                    <tr>
                        <td>Street Address: </td>
                        <td><?php echo $row['street_address']; ?></td>
                    </tr>
                    <tr>
                        <td>District: </td>
                        <td><?php echo $row['district']; ?></td>
                    </tr>
                    <tr>
                        <td>Upazila: </td>
                        <td><?php echo $row['upazila']; ?></td>
                    </tr>
                    <tr>
                        <td>City: </td>
                        <td><?php echo $row['city']; ?></td>
                    </tr>
                    <tr>
                        <td>Division: </td>
                        <td><?php echo $row['division']; ?></td>
                    </tr>

                    <tr>
                        <td>Nationality: </td>
                        <td><?php echo $row['nationality']; ?></td>
                    </tr>
                    <tr>
                        <td>Phoneno: </td>
                        <td><?php echo $row['phoneno']; ?></td>
                    </tr>
                    <tr>
                        <td>NID_No: </td>
                        <td><?php echo $row['nid_no']; ?></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>

                    <?php
                }

                ?>
            </table>
            <a style="font-size: 20px; background-color: orange; color: white; margin-top: 10px;margin-left: 180px" href="update_profile.php" class="btn" >Update Profile</a>
        </div>
    </div>
</div>
</section>


    <footer style="background-color: #404240; margin-top:100px;" class="ftco-footer ">
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
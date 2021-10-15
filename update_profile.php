<?php
session_start();
include ('conn.php');
if (!isset($_SESSION['email'])) 
{
  header("Location: update_profile.php");
}
$email=$_SESSION['email'];
$name=$_SESSION['name'];

if (isset($_POST['update'])) 
{
  $first_name =$_POST['first_name'];
  $last_name =$_POST['last_name'];
  $street_address =$_POST['street_address'];
  $district =$_POST['district'];
  $upazila =$_POST['upazila'];
  $city =$_POST['city'];
  $division =$_POST['division'];
  $nationality =$_POST['nationality'];
  $phoneno = $_POST['phoneno'];
  $nid_no = $_POST['nid_no'];
  $email_up = $_POST['email'];


  if ($first_name !="" && $last_name !="" && $street_address !="" && $district !=""  && $upazila !="" && $city !="" && $division !="" && $nationality !="" && $phoneno !=""  && $nid_no !="" && $email_up !="" )
  {
    $sql=$con->query("UPDATE signup SET first_name ='$first_name', last_name ='$last_name',street_address = '$street_address', district = '$district', upazila ='$upazila', city ='$city', division ='$division', nationality ='$nationality', phoneno ='$phoneno', nid_no ='$nid_no', email ='$email_up' WHERE email='$email'");
    if ($sql ==true) 
    {
      echo "<script>
      alert('Update Successful...!');
      document.location = 'profile.php';
      </script>";
    }
  }
  else
  {
    echo "<script>
    alert('Something is wrong....!');

    </script>";
  }
}

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

<section class="spad">

  <div class="container">
    <div class="row">
      <div style="margin-top: 90px;" class="col-lg-12">
        <h2 class="text-center text-white p-2" style="background-color: orange; font-size: 35px; font-family: cursive;">Update Information</h2>
      </div>

      <div style="font-size:22px; margin-left: 300px;margin-top: 20px; " class="col-lg-12 ">
        <form method="post">
         <?php
         $sql_user=$con->query("SELECT * FROM `signup` WHERE `email`='$email'");

         while ($row=mysqli_fetch_assoc($sql_user))
         {
           ?>
           <div class="form-group">
            <label>First_Name</label>
            <input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name']; ?>">
          </div>
          <div class="form-group">
            <label>Last_Name</label>
            <input type="text" name="last_name" class="form-control" value="<?php echo $row['last_name']; ?>">
          </div>
          <div class="form-group">
            <label>Street_Address</label>
            <input type="text" name="street_address" class="form-control" value="<?php echo $row['street_address']; ?>">
          </div>
          <div class="form-group">
            <label>District</label>
            <input type="text" name="district" class="form-control" value="<?php echo $row['district']; ?>">
          </div>

          <div class="form-group">
            <label>Upazila</label>
            <input type="text" name="upazila" class="form-control" value="<?php echo $row['upazila']; ?>" >
          </div>
          <div class="form-group">
            <label>City</label>
            <input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>">
          </div>
          <div class="form-group">
            <label>Division</label>
            <input type="text" name="division" class="form-control" value="<?php echo $row['division']; ?>">
          </div>
          <div class="form-group">
            <label>Nationality</label>
            <input type="text" name="nationality" class="form-control" value="<?php echo $row['nationality']; ?>">
          </div>
          <div class="form-group">
            <label>Phone_No</label>
            <input type="number" name="phoneno" class="form-control" value="<?php echo $row['phoneno']; ?>">
          </div>
          <div class="form-group">
            <label>NID_No</label>
            <input type="number" name="nid_no" class="form-control" value="<?php echo $row['nid_no']; ?>">
          </div>
          <label>Email</label>
          <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
        </div>


        <input style="font-size: 20px; background-color: orange; color: white; margin-left: 500px; margin-top: 20px;" type="submit" name="update" value="Update" class="btn" >
        <?php
      }
      ?>

    </form>
  </div>
</div>
</div>
<?php

?>
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
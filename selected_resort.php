<?php
session_start();
if ($_SESSION['email']=='') 
{
  header("Location: login.php");
}
 include ('conn.php');
$room_id=$_GET['resort_id'];

if (isset($_POST['submit'])) 
{
  $user=$_SESSION['name'];
  $email=$_SESSION['email'];
  $phone=$_SESSION['phone'];
  $resort_id=$_GET['resort_id'];
  $booking_no=mt_rand(100000000, 999999999);
  $start_date=$_POST['start_date'];
  $end_date= $_POST['end_date'];
  $number_guest=$_POST['number_guest'];
  $ex_phone=$_POST['ex_phone'];
  $sql=$con->query("SELECT * FROM tbl_booking where ('$start_date' BETWEEN date(start_date) and date(end_date) || '$end_date' BETWEEN date(start_date) and date(end_date) || date(start_date) BETWEEN '$start_date' and '$end_date') and resort_id='$resort_id'");
  $sql_count=mysqli_num_rows($sql);
  if ($sql_count==0) {
    $sql_insert=$con->query("INSERT INTO `tbl_booking`(`name`, `email`, `phone`, `resort_id`, `booking_no`, `start_date`, `end_date`, `number_guest`, `ex_phone`) VALUES ('$user','$email','$phone','$resort_id','$booking_no','$start_date','$end_date','$number_guest','$ex_phone')");
    if ($sql_insert) {
      echo "<script>
          alert('Booking Successfully.. !');
          
        </script>";
        header("Location: invoice.php?booking_no=$booking_no");
    }
    else
    {
      echo "<script>
          alert('Not Successfully.. !');
          document.location = 'index.php';
        </script>";
    }
  }
  else{
    echo "<script>
          alert('This resort all ready booked. Please Try to another resort.. !');
          document.location = 'room_view.php';
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


<?php
$sql=$con->query("SELECT * FROM `add_resort` WHERE `id`='$room_id'");  
$row=mysqli_fetch_assoc($sql);
?>
<div class="container">
  <h1 style="font-family: cursive;;font-size: 40px;margin-top:100px; color: white;background-color: orange; text-align: center;padding: 5px;">Booking Here</h1>
  
</div>
<div class="container">
  <div class="row">
    <div style="font-size: 20px;" class="col-md-12">
      <form method="post" action="">
      <div class="row">
        <div class="col">
         <span>Check-In Date: </span> <input type="date" class="form-control" name="start_date" placeholder="Check-In Date">
        </div>
        <div class="col">
          Check-Out Date: <input type="date" class="form-control" name="end_date" placeholder="Check-Out Date">
        </div>
        <div class="col mt-3">
          Select Number Of Guest
          <select class="form-control" name="number_guest">
            <option value="">Select Number Of Guest</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="col mt-3">
         Additional Phone Number: <input type="text" class="form-control" name="ex_phone" placeholder="Enter Additional Phone Number">
        </div>
        <div class="col-md-4 float-right mt-4">
          <input style="font-size: 20px;" class="btn btn-warning p-3 m-2" type="submit" name="submit" value="Book Now">
        </div>
      </div>
    </form>
    
    </div>
    
    <div style="font-size: 20px; margin-left: 70px;" class="col-md-12 mt-5">
      <div  class="col-md-5 m-2 float-left shadow p-3 mb-5 bg-white rounded">
        <img style="width: 450px; height: 350px;" src="Dashboard/admin/images/<?php echo $row['image']; ?>">
      </div>
      <div class="col-md-5 ml-5 float-left shadow p-3 mb-5 bg-white rounded">
        <h2 style="font-size: 30px;" class="text-center h1"><?php  echo $row['resort_name']; ?></h2><br>
        <p> Resort Category: <?php echo $row['troom']; ?></p>
        <p> Number of Room: <?php echo $row['number_room']; ?></p>
        <p> Bedding Type: <?php echo $row['bed']; ?></p>
        <p>Description : <?php echo $row['description']; ?></p>
        <p class="bg-warning p-2 text-center">BDT-<?php echo $row['price']." /=   per/night"; ?></p>
      </div>
    </div>
  </div>
</div>

<footer style="background-color: #404240; margin-top: 100px;" class="ftco-footer ">
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
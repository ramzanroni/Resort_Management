<?php
session_start();
error_reporting(0);
if ($_SESSION['email']=='') 
{
  header("Location: login.php");
}
include ('conn.php');
$booking_no=$_GET['booking_no'];

if (isset($_GET['order_id']) && isset($_GET['price'])) 
{
  $order_id=$_GET['order_id'];
  $price=$_GET['price'];

  $sql_up=$con->query("UPDATE `tbl_booking` SET `status`='payment',`price`='$price' WHERE `booking_no`='$order_id'");
  if ($sql_up) 
  {
   echo "<script>
   alert('Payment Successfully.. !');
   document.location = 'index.php';
   </script>";
 }
 else{
  echo "<script>
  alert('Some Thing is wrong.. !');
  document.location = 'index.php';
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
<div style="margin-top: 90px;" class="container text-center">
  <h1 style="font-family: cursive; font-size: 40px;color:orange; padding: 5px;"  > My Booking Information</h1><hr>
</div><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row shadow p-3 mb-5 bg-white rounded">

        <div class="col-md-5">
          <h1 style="font-size: 25px;font-family: cursive;">Booking Invoice</h1>
          <p style="font-size: 25px;font-family: cursive;" class="h2">Booking no: #<?php echo $booking_no; ?></p>
          <p style="font-size: 25px;font-family: cursive;" class="h2">Name: <?php echo $_SESSION['name']; ?></p>
        </div>
        <br>
        <table style="font-size: 20px;text-align: center;margin-top: 20px;" class="table  table-hover table-striped ">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Resort ID</th>
              <th scope="col">Name</th>
              <th scope="col">Number of Guest</th>
              <th scope="col">From Date</th>
              <th scope="col">To Date</th>
              <th scope="col">Number of Days</th>
              <th scope="col">Amount</th>
              <th scope="col">Amount With 5% vat</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql_booking="SELECT * FROM `tbl_booking` WHERE `booking_no`='$booking_no'";
            $results_sql=mysqli_query($con, $sql_booking);
            while ($results=mysqli_fetch_assoc($results_sql)) 
            {
              ?>
              <td><?php echo $results['resort_id']; ?></td>
              <td><?php echo $results['name']; ?></td>
              <td><?php echo $results['number_guest']; ?></td>
              <td><?php echo $results['start_date']; ?></td>
              <td><?php echo $results['end_date']; ?></td>
              <td>
                <?php  
                $c=0;
                $fdate=$results['start_date'];
                $edate=$results['end_date'];
                $datetime1 = date_create($fdate); 
                $datetime2 = date_create($edate); 
                $interval = date_diff($datetime1, $datetime2);
                $date= $interval->format('%a');
                echo $date;

                ?>
              </td>
              <td>
                <?php  
                $room_id=$results['resort_id'];
                $sqldata=$con->query("SELECT * FROM add_resort WHERE `id`='$room_id'");
                $res=mysqli_fetch_array($sqldata);
                $total_amount= $res['price']*$date;
                echo $total_amount;

                ?>/=

              </td>
              <td><?php   
              $amount_with_vat=($total_amount+((5*$total_amount)/100));
              echo $amount_with_vat;
              ?>/=</td>
            </tr>
            <tr>
            <p style="font-size: 25px;background-color: orange;padding: 5px;margin: 2px; margin-left: 370px;color: white;">Total Payable Amount: <?php echo $amount_with_vat; ?> /=</p>
            </tr>

            <?php
          }
          ?>
        </tbody>

      </table>

      <div class="col-md-7">
        <a style="font-size: 20px;" class="btn btn-warning m-2 p-2" href="invoice.php?order_id=<?php echo $booking_no; ?>&price=<?php echo $amount_with_vat; ?>">Pay Now</a>
        <a style="font-size: 20px;" class="btn btn-warning m-2 p-2" href="index.php">Pay later</a>
      </div>
    </div>
    <hr>

  </div>
</div>

</div>     




<footer style="background-color: #404240; margin-top: 50px;" class="ftco-footer ">
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
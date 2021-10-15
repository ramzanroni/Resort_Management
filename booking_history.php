<?php
session_start();
error_reporting(0);
if ($_SESSION['email']=='') 
{
  header("Location: login.php");
}
include ('conn.php');
$email=$_SESSION['email'];
if (isset($_GET['payment_id']) && isset($_GET['order_id'])) 
{
  $amount=$_GET['payment_id'];
  $booking_id=$_GET['order_id'];
  $sql=$con->query("UPDATE `tbl_booking` SET `price`='$amount', `status`='payment' WHERE `booking_no`='$booking_id'");
  if ($sql) 
  {
    echo "<script>
          alert('Payment Successfully.. !');
          document.location = 'booking_history.php';
        </script>";
  }
  else
  {
    echo "<script>
          alert('Some Thing is Wrong.. !');
          document.location = 'booking_history.php';
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
<div class="container" style="margin-top: 100px;" >
  <h1 style="color: orange;font-family: cursive;font-size: 40px;" class="text-center pt-3 pb-3">Booking History</h1><hr>
  <div class="row" >
    <?php
      $sql=$con->query("SELECT * FROM `tbl_booking` WHERE `email`='$email' ORDER BY id DESC");
      while ($results=mysqli_fetch_assoc($sql)) 
      {
         ?>
         <div class="col-md-12 shadow p-3 mb-5 bg-white rounded">
          <p style="font-size: 25px;" class="h1">Booking Number:  <?php echo "  #".$results['booking_no']; ?></p>
           <table style="font-size: 20px;text-align: center;margin-top: 20px;" class="table table-hover table-striped">
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
                  <tr>
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
                </tbody>
           </table>
           <div class="col-md-12">
           <?php  
            if($results['status']=='panding'){
              ?>
                <p style="font-size: 20px;background-color:#0ec3c9;margin-top: 10px;" class="btn p-2">Panding</p>
              <?php
            }
               if ($results['price']=='') 
              {
                ?>
                  <a style="font-size: 20px;" href="booking_history.php?payment_id=<?php echo $amount_with_vat; ?>&order_id=<?php echo $results['booking_no']; ?>" class="btn btn-warning p-2 mt-0">Pay Now</a>
                <?php
              }
              if ($results['status'] =='payment') {
                ?>
                  <p style="font-size: 20px;margin-top: 10px" class="btn btn-warning p-2">Payment Done</p>
                <?php
              }
              if ($results['status']== 'check_in') { ?>
                 <p class="btn btn-warning p-2">Check In</p>
                 <?php
              }
              if ($results['status']=='check_out'){
                ?>
                  <p class="btn btn-warning p-2">Check Out</p>
                <?php
              }

            

           ?>
         </div>
       </div>
         <?php
       }

    ?>
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
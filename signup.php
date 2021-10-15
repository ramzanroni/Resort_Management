<?php
session_start();
include_once 'conn.php';

if(isset($_POST['btn-login']))
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
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $finalpassword = $_POST['finalpassword'];
	if ($password ==  $finalpassword) {
		if ($first_name !="" && $last_name!="" && $street_address != "" && $district!=""  && $upazila!="" && $city!="" && $division !="" && $nationality !="" && $phoneno !=""  && $nid_no!="" && $email  !="" && $password !="" )
	{
		if ($password != $finalpassword) 
		{

			echo "<script>alert('Password Does Not Match.......!');</script>";
		}
		else
		{

			$sql=$con->query("INSERT INTO `signup`(`first_name`, `last_name`, `street_address`, `district`, `upazila`, `city`, `division`, `nationality`, `phoneno`, `nid_no`, `email`, `password`) VALUES ('$first_name','$last_name','$street_address','$district','$upazila','$city','$division','$nationality','$phoneno','$nid_no ','$email','$password ')");

			if($sql)
			{
				$_SESSION['username']=$first_name;
				$_SESSION['email']=$email;
				$_SESSION['phone']=$row['phoneno'];
				echo "<script>
					alert('Signup Successfully.. !');
					document.location = 'login.php';
				</script>";
			}
			else
			{
				echo "<script>
					alert('Something is worng.. !');
					document.location = 'index.php';
				</script>";
			}
		}
	}


	}
	else{
		echo "<script>
					alert('Password Does Not Match.. !');
					document.location = 'signup.php';
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

    <!-- <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
      </form> -->

    </header>
		<div style="margin-top: 80px;" class="container-fluid">
			<div class="row">

				<div class="col-md-1"></div>
				<div class="col-md-10 mt-5 mb-5 ">
					<form style="margin-left: 400px;" method="post" action="">
						<div class="row">
					<div style="margin-top: 50px;" class="shadow p-3 mb-5 bg-light rounded mt-4">
						<h2 style="font-family: cursive;font-size: 30px; width: 645px;" class="text-center bg-warning p-2 text-white">Sign Up</h2><br>

						<div style="width: 100%;" class="form-row">
							<div style="width: 100%;" class="col-md-5 ">
								<input style="width:120%;" type="text" class="form-control" placeholder="First name" name="first_name" required/>
							</div>
							<div class="col-md-5 ">
								<input style="width:120%; margin-left: 65px;" type="text" class="form-control" placeholder="Last name" name="last_name" required/>
							</div><br>
						</div><br>
						<div class="form-group">
							<input style="width: 645px;" class="form-control" type="text" placeholder="Street Address" name="street_address" required />
						</div>
						<div style="width: 100%;" class="form-row">
							<div class="col-md-5 ">
								<input style="width:120%;"  type="text" class="form-control" placeholder="District" name="district" required/>
							</div>
							<div  class="col-md-5">
								<input style="width: 120%;margin-left: 65px;" type="text" class="form-control" placeholder="Upazila" name="upazila" required/>
							</div>
						</div><br>
						<div style="width: 100%;" class="form-row">
							<div class="col-md-5 ">
								<input style="width:120%;"  type="text" class="form-control" placeholder="City" name="city"required/>
							</div>
							<div  class="col-md-5">
								<input style="width: 120%;margin-left: 65px;" type="text" class="form-control" placeholder="Division" name="division" required/>
							</div>
						</div><br>
						<div class="form-group">
							<input style="width: 645px;" class="form-control" type="text" placeholder="Nationality" name="nationality" required />
						</div>
						<div class="form-group">
							<input style="width: 645px;" class="form-control" type="number" placeholder="Phone No" name="phoneno" required />
						</div>
						<div class="form-group">
							<input style="width: 645px;" class="form-control" type="number" placeholder="NID No" name="nid_no" required />
						</div>

						<div class="form-group">
							<input style="width: 645px;" class="form-control" type="email" placeholder="Email address" name="email" required />
						</div>
						<div class="form-group">
							<input style="width: 645px;" class="form-control" type="password"placeholder="Password" name="password" required />
						</div>
						<div class="form-group">
							<input style="width: 645px;" class="form-control" type="password"placeholder="Confirm Password" name="finalpassword" required />
						</div><br>

						<div class="form-group">
							<button style="width:30%; margin-left:225px;margin-right: 225px;" class="form-control btn btn-success text-center" type="submit" name="btn-login">Sign up</button>
						</div>

					</div>
				</div>

				</form>
				</div>
				<div class="col-md-1"></div>

			</div>

		</div>




		<footer style="background-color: #404240; margin-top: 80px;" class="ftco-footer ">
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
	</html>
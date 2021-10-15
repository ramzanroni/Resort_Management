<?php
include_once 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resort-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->


        <a style="font-size: 35px;" class="navbar-brand ps-3" href="#"><span style="color: orange;">R</span>esort</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                   
                    <li><a class="dropdown-item" href="admin_logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <?php
            include_once 'sidebar.php';
            ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 style="margin-bottom: 30px;" class="mt-4">ADD FOOD</h1>
                    
                    <div class="row">
                        <div class="col-md-12">
                          <?php

                          if(isset($_POST['submit']))
                          {
                              $food_name=$_POST['food_name'];
                
                              $price=$_POST['price'];
                              $description=$_POST['description'];
                              $status='available';
                              $imgFile = $_FILES['image']['name'];
                              $tmp_dir = $_FILES['image']['tmp_name'];
                              $imgSize = $_FILES['image']['size'];


                              if(empty($imgFile))
                              {
                                $errMSG='error';
                                ?>
                                <div class="alert alert-danger" role="alert">
                                  Please Enter the Resort Image...!
                              </div>
                              <?php
                          }
                          else
                          {
                            $upload_dir = 'images/';
                            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
                            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
                            $userpic = rand(1000,1000000).".".$imgExt;
                            if(in_array($imgExt, $valid_extensions))
                            {           

                                if($imgSize < 9000000)              
                                {
                                  move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                              }
                              else
                              {
                                  $errMSG = "Sorry, your file is too large.";
                              }
                          }
                          else
                          {
                            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
                        }
                    }
                    $sql=$con->query("INSERT INTO `add_food`(`food_name`, `price`, `description`, `status`, `image`) VALUES ('$food_name','$price','$description','$status','$userpic')");
                    // $result=mysqli_query($con, $sql);
                    if ($sql) {
                        echo "<script>
                    alert('Resort Add Successfully.. !');
                    document.location = 'add_resort.php';
                </script>";
                    }else{
                         echo "<script>
                    alert('Something wrong.. !');
                    document.location = 'add_resort.php';
                </script>";
                    }


               //
                }
                
                ?>
                <!-- <p class="h2 text-center">Add A New Resort</p> -->
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>FOOD Name</label>
                        <input type="text" name="food_name" class="form-control">
                    </div>
                    
                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" name="price" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" name="description" rows="3" cols="50">
                          
                      </textarea>
                      <!-- <input type="text" name="description" class="form-control"> -->
                  </div>
                  
                  <div class="form-group">
                      <label>Food Image</label><br>
                      <input type="file" name="image"  accept="image/*">
                  </div><br>
                  <div>
                      <input type="submit" name="submit" value="Add Food" class="btn" style="background-color:orange;color: white; padding: 5px">
                  </div>
              </form>
          </div>
          
      </div>
  </div>
</main>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>

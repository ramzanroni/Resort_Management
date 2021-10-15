<?php
include_once 'conn.php';
session_start();
error_reporting(0);

if (isset($_GET['edit'])) 
{
    $id=$_GET['edit'];
    $sql=$con->query("SELECT * FROM add_resort WHERE id='$id'");
    /*$abc=$sql->num_rows;*/
    $result=mysqli_fetch_assoc($sql);
    $resort_name=$result['resort_name'];
}
if (isset($_POST['update'])) 
{
  $id=$_GET['edit'];
  $resort_name=$_POST['resort_name'];
  $troom=$_POST['troom'];
  $bed=$_POST['bed'];
  $number_room=$_POST['number_room'];
  $price=$_POST['price'];
  $description=$_POST['description'];
 /*$status='available';*/
 // $imgFile = $_FILES['image']['name'];
 // $tmp_dir = $_FILES['image']['tmp_name'];
 // $imgSize = $_FILES['image']['size'];

 

if ($resort_name !="" && $troom !="" && $bed !="" && $number_room !=""  && $price !="" && $description !="" )
{

    $result=$con->query("UPDATE `add_resort` SET `resort_name`='$resort_name',`troom`='$troom',`bed`='$bed',`number_room`='$number_room',`price`='$price',`description`='$description' WHERE `id`='$id'");
    if ($result ==true) 
    {
      echo "<script>
      alert('Update Successful...!');
      document.location = 'View_resort.php';
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
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Resort</title>
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

                    <li><a class="dropdown-item" href="#!">Logout</a></li>
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
                    <h1 style="margin-bottom: 30px;" class="mt-4">UPDATE A RESORT</h1>
                    
                    <div class="row">
                        <div class="col-md-12">

                            <!-- <p class="h2 text-center">Add A New Resort</p> -->
                            <form style="font-size: 20px;" method="post" enctype="multipart/form-data" action="">

                                <div class="form-group">
                                    <label>Resort Name</label>
                                    <input type="text" name="resort_name" class="form-control" value="<?php echo $result['resort_name']; ?>">
                                </div>
                                <div class="form-group">

                                    <label>Type Of Room *</label>
                                    <select name="troom"  class="form-control" id="troom" value="<?php echo $result[ 'troom']; ?>">
                                        <option value= "selected" <?=$result['troom'] == 'selected' ? ' selected="selected"' : '';?> >Select Room Type
                                        </option>
                                        <option value="Superior Room" <?=$result['troom'] == 'Superior Room' ? ' selected="selected"' : '';?>>SUPERIOR ROOM</option>
                                        <option value="Deluxe Room" <?=$result['troom'] == 'Deluxe Room' ? ' selected="selected"' : '';?>>DELUXE ROOM</option>
                                        <option value="Guest House" <?=$result['troom'] == 'Guest House' ? ' selected="selected"' : '';?>>GUEST HOUSE</option>
                                        <option value="Single Room" <?=$result['troom'] == 'Single Room' ? ' selected="selected"' : '';?>>SINGLE ROOM</option>
                                        <option value="Hall Room" <?=$result['troom'] == 'Hall Room' ? ' selected="selected"' : '';?>>Hall ROOM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Bedding Type</label>
                                    <select name="bed" class="form-control" id="bed" value="<?php echo $result[ 'bed']; ?>">
                                        <option value ="selected" <?=$result['bed'] == 'selected' ? ' selected="selected"' : '';?>>Select Bedding Type</option>
                                        <option value="Single" <?=$result['bed'] == 'Single' ? ' selected="selected"' : '';?>>Single</option>
                                        <option value="Double" <?=$result['bed'] == 'Double' ? ' selected="selected"' : '';?>>Double</option>
                                        <option value="Triple" <?=$result['bed'] == 'Triple' ? ' selected="selected"' : '';?>>Triple</option>
                                        <option value="Quad" <?=$result['bed'] == 'Quad' ? ' selected="selected"' : '';?>>Quad</option>


                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Numbers of Rooms</label>
                                    <input type="number" name="number_room" class="form-control" value="<?php echo $result['number_room']; ?>">
                                </div>
                                <div class="form-group">
                                  <label>Price</label>
                                  <input type="text" name="price" class="form-control" value="<?php echo $result['price']; ?>">
                              </div>
                              <div class="form-group">
                                  <label>Description</label>
                                  <textarea class="form-control" name="description" rows="3" cols="50"><?php echo $result['description']; ?>

                              </textarea>
                              <!-- <input type="text" name="description" class="form-control"> -->
                          </div>

                          <div class="form-group">
                              <label>Resort Image</label><br>
                              <p><img src="images/<?php echo $result['image']; ?>" height="150" width="200"></p>
                              <input type="file" name="image"  accept="image/">
                          </div>
                          <br>
                          <div class="form-group">
                              <input type="submit" name="update" value="Update Resort" class="btn" style="background-color:orange;color: white; padding: 5px;">
                          </div>

                      </form>
                  </div>

              </div>
          </div>
      </main>
  </div>
</div>
</body>
</html>


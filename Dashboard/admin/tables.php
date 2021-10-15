<?php
include ('conn.php');

$sql="SELECT * FROM `signup`";
$result=mysqli_query($con, $sql);
if(isset($_GET['delete_id']))
{
    $del_id= $_GET['delete_id'];
    $sql_del="DELETE FROM `signup` WHERE id='$del_id'";
    $result=mysqli_query($con, $sql_del);
    if($result){
    echo "<script>
                    alert('Delete Successfully.. !');
                    document.location = 'tables.php';
                </script>";
}
else{
   echo "<script>
                    alert('Something is wrong.. !');
                    document.location = 'tables.php';
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
        <title>Resort User</title>
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
                        <h1 style="margin-bottom: 30px" class="mt-4">Users</h1>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol> -->
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Users information
                            </div>
                            <div class="card-body">
                                <table style="font-size: 15px;" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Street Address</th>
                                            <th>District</th>
                                            <th>Upazila</th>
                                            <th>City</th>
                                            <th>Division</th>
                                            <th>Nationality</th>
                                            <th>Phone_No</th>
                                            <th>NID_No</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                           <!--  <th>Password</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Street Address</th>
                                            <th>District</th>
                                            <th>Upazila</th>
                                            <th>City</th>
                                            <th>Division</th>
                                            <th>Nationality</th>
                                            <th>Phone_No</th>
                                            <th>NID_No</th>
                                            <th>Email</th>
                                            <th>Action</th>

                                           <!--  <th>Password</th> -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            while($row=mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['first_name']; ?></td>
                                                <td><?php echo $row['last_name']; ?></td>
                                                <td><?php echo $row['street_address']; ?></td>
                                                <td><?php echo $row['district']; ?></td>
                                                <td><?php echo $row['upazila']; ?></td>
                                                <td><?php echo $row['city']; ?></td>
                                                <td><?php echo $row['division']; ?></td>
                                                <td><?php echo $row['nationality']; ?></td>
                                                <td><?php echo $row['phoneno']; ?></td>
                                                <td><?php echo $row['nid_no']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td style="text-align: center"><a class="btn btn-danger" href="tables.php?delete_id=<?php echo $row['id']; ?>"><i  class="fas fa-trash"></i></a></td>
                                            </tr>
                                            <?php
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

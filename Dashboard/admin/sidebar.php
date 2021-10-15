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
    <body>
        <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                            </a>
                            <a class="nav-link" href="add_resort.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus-circle"></i></div>
                                Add Resort
                            </a>
                            <a class="nav-link" href="View_resort.php">
                                <div class="sb-nav-link-icon"><i class="far fa-eye"></i></i></div>
                                View Resort
                            </a>
                            <a class="nav-link" href="new_booking.php">
                                <div class="sb-nav-link-icon"><i class="far fa-eye"></i></i></div>
                                View New Booking
                            </a>
                            <a class="nav-link" href="view_booking.php">
                                <div class="sb-nav-link-icon"><i class="far fa-eye"></i></i></div>
                                Check IN
                            </a>
                            <!-- <a class="nav-link" href="add_food.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus-circle"></i></div>
                                Add Food
                            </a>
                            <a class="nav-link" href="view_food.php">
                                <div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>
                                View Food
                            </a> -->
                            <a class="nav-link" href="review.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                                Review/Feedback
                            </a>
                            <a class="nav-link" href="message.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope-open-text"></i></div>
                                Message
                            </a>
                            <a class="nav-link" href="admin_logout.php.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Log Out
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer text-center">
                        <div class="small">Logged in as:</div>
                        <a style="font-size:20px;color: white" class="navbar-brand ps-3" href="#"><span style="color:orange;">R</span>esort</a>
                    </div>
                </nav>
            </div>
    </body>
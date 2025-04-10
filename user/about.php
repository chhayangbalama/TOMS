<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Us - TMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #fff;
            padding-top: 82px;
        }
        .profile-section {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-right: 15px;
        }
        .profile-name {
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin: 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container-fluid">
            <a href="userdash.php">
                <img src="img/logo.jpg" class="rounded-circle" alt="logo" style="height:65px;">
            </a>
            <a class="navbar-brand" href="userdash.php">TMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-2">
                    <li class="nav-item"><a class="nav-link" href="userdash.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="payment.html">Payment</a></li>
                    <li class="nav-item"><a class="nav-link" href="notice1.php">Notice</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">More</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="trafficrule.php">Traffic Rules</a></li>
                            <li><a class="dropdown-item" href="trafficsign.php">Traffic Signs</a></li>
                            <li><a class="dropdown-item" href="helpline.php">Traffic Helplines</a></li>
                            <li><a class="dropdown-item" href="drivingexam.php">Model Questions</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="complain.html">Complain</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="d-flex align-items-center">
                    <div class="profile-section">
                        <span class="profile-name">👤 <?php echo $_SESSION['fullname']; ?></span>
                    </div>
                    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="alert alert-primary text-center" role="alert">
        <b>ABOUT US</b>
    </div>

    <div class="container main-body shadow py-5 mb-5">
        <div class="col-md-12">
            <h4><b>About us</b></h4>
            <hr>
            <p>
            A Traffic Management System (TMS) is a website application that assists in getting into ecosystem of
                Traffic. TMS is designed to manage Payment System and E-Chit, Traffic rules and sign, Metro FM regarding
                Traffic and accidents, Notice, Traffic helplines to make direct call to Traffic Station, Traffic
                Awareness video. Which will make much more convenient for user and traffic.<br><br>

                The primary goal of TMS is to provide Payment system easy from E-Chit which will be nature friendly and
                no need to waste paper. Most of the user face problem with losing paper Chit from wallet or getting
                washed. So, TMS has solution to help user and Traffic. Payment features helps user to pay with given QR
                and easy pay from Banking such a E-sewa. Which erase delay system user used to face like filling deposit
                slip of Global IME. Which will save much more time
            </p>
        </div>
    </div>

    <div class="container main-body shadow my-3 py-4">
        <div class="col-md-12">
            <h4><b>Contact Information</b></h4>
            <hr>
            <p>
                Kathmandu Valley Traffic Police Office<br>
                Kathmandu, Nepal<br>
                Traffic Control: 103, +977-01-4219641<br>
                Email: vtpo@nepalpolice.gov.np
            </p>
        </div>
    </div>

    <!-- Footer -->
    <div class="d-flex flex-column flex-sm-row justify-content-center pt-2" style="background-color: aliceblue;">
        <p class="mb-4">© 2025 TMS, All rights reserved.</p>
        <ul class="list-unstyled d-flex mb-4">
            <li class="ms-3"><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
            <li class="ms-3"><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li class="ms-3"><a href="#"><i class="bi bi-youtube"></i></a></li>
        </ul>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
session_start();

// Check if user is logged in and name is set
$fullname = isset($_SESSION['user_fullname']) ? $_SESSION['user_fullname'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: rgb(255, 255, 255);
            padding-top: 82px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="ps-5 justify-content-center align-items-center container-fluid">
            <a href="trafficdash.php">
                <img src="img/logo.jpg" class="rounded-circle" alt="logo" style="height:65px;">
                <a class="navbar-brand" href="trafficdash.php">TMS</a>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-2">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="trafficdash.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="efine.php">E-chit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notice1.php">Notice</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="trafficrule.php">Traffic Rules</a></li>
                            <li><a class="dropdown-item" href="trafficsign.php">Traffic Signs</a></li>
                            <li><a class="dropdown-item" href="helpline.php">Traffic Helplines</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="d-flex align-items-center">
          <div class="profile-section">
            <!-- <img src="img/user.jpg" alt="Profile" class="profile-avatar"> -->
            <span class="profile-name">👮‍♂️ <?php echo $_SESSION['fullname']; ?></span>
          </div>
          <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>

            <script>
                document.getElementById("myButton").addEventListener("click", function () {
                    window.location.href = "../login.html";
                });
            </script>
        </div>
    </nav>

    <div class="alert alert-primary justify-content-center text-center" role="alert">
        <b>Helplines</b>
    </div>

    <div class="container main-body shadow py-3 mb-5">
        <div class="col-sm-12 mx-4">
            <h4><b>Helpline Numbers</b></h4>
            <hr>
            <p><b>Kathmandu:</b> <span class="text-primary">01-4219841</span></p>
            <p><b>Bhaktapur:</b> <span class="text-primary">+977 984334834</span></p>
            <p><b>Lalitpur:</b> <span class="text-primary">+977 985-1285601</span></p>
        </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-center pt-2 fixed-bottom"
        style="background-color: aliceblue;">
        <p class="mb-4">© 2025 TMS, All rights reserved.</p>
        <ul class="list-unstyled d-flex mb-4">
            <li class="ms-3"><a href="https://www.facebook.com/chhayangba.lama.5"><i class="bi bi-facebook"></i></a></li>
            <li class="ms-3"><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li class="ms-3"><a href="#"><i class="bi bi-youtube"></i></a></li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>

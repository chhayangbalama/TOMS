<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: login.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Traffic User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <style>
    body { padding-top: 81px; }
    .profile-section { display: flex; align-items: center; gap: 10px; margin-right: 15px; }
    .profile-avatar { width: 35px; height: 35px; border-radius: 50%; object-fit: cover; border: 2px solid #0d6efd; }
    .profile-name { font-size: 14px; font-weight: 500; color: #333; margin: 0; }
  </style>
</head>

<body>
  <!-- Navbar Start -->
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
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="userdash.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
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

        <!-- User Profile Section -->
        <div class="d-flex align-items-center">
          <div class="profile-section">
            <!-- <img src="img/user.jpg" alt="Profile" class="profile-avatar"> -->
            <span class="profile-name">👤 <?php echo $_SESSION['fullname']; ?></span>
          </div>
          <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <div class="alert alert-primary text-center">WELCOME TO TRAFFIC MANAGEMENT SYSTEM!</div>

  <div class="container-fluid">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <video class="img-fluid d-block w-100" autoplay loop muted style="width:100%; height:450px">
          <source src="img/video2.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>

  <section class="px-3 py-3 py-lg-5">
    <h2 class="visually-hidden">Features</h2>
    <div class="row gap-3 justify-content-center">
      <article class="card col-lg-3">
        <div class="card-body vstack">
          <a href="payment.html"><img class="card-img-top" src="img/payment.jpeg" alt="payment image">
            <h3 class="card-title fw-bold">Payment</h3></a>
          <p class="card-text">Pay your e-chit fine here.</p>
        </div>
      </article>
      <article class="card col-lg-3">
        <div class="card-body vstack">
          <a href="notice1.html"><img class="card-img-top" src="img/notice1.jpg" alt="notice image">
            <h3 class="card-title fw-bold">Notice</h3></a>
          <p class="card-text">Read the latest traffic notices.</p>
        </div>
      </article>
      <article class="card col-lg-3">
        <div class="card-body vstack">
          <a href="trafficsign.html"><img class="card-img-top" src="img/traffic.jpg" alt="traffic sign image">
            <h3 class="card-title fw-bold">Traffic Signs</h3></a>
          <p class="card-text">More than 100+ traffic signs available.</p>
        </div>
      </article>
    </div>
  </section>

  <div class="video text-center" style="margin-left: 50px;">
    <iframe class="mb-3" width="380" height="300" src="https://www.youtube.com/embed/re5eUZPadI4"></iframe>
    <iframe class="mb-3 mx-5" width="380" height="300" src="https://www.youtube.com/embed/dZ8gRSKqIcY"></iframe>
    <iframe class="mb-3" width="380" height="300" src="https://www.youtube.com/embed/TjNysHt8bZg"></iframe>
</div>


  <div class="d-flex flex-column flex-sm-row justify-content-center py-0 my-0 border-top">
    <p class="my-4">© 2025 TMS, All rights reserved.</p>
    <ul class="list-unstyled d-flex my-4">
      <li class="ms-3"><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
      <li class="ms-3"><a href="#"><i class="bi bi-instagram"></i></a></li>
      <li class="ms-3"><a href="#"><i class="bi bi-twitter"></i></a></li>
      <li class="ms-3"><a href="#"><i class="bi bi-youtube"></i></a></li>
    </ul>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

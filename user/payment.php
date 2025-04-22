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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
      <a href="userdash.php">
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
            <a class="nav-link" href="userdash.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="payment.php">Payment</a>
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
              <li><a class="dropdown-item" href="drivingexam.php">Model Question</a></li>
              <li><a class="dropdown-item" href="quiz.php">Start Quiz</a></li>
              <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="complain.html">Complain</a></li>
            </ul>
          </li>
        </ul>

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

  <head>
    <meta charset="UTF-8">
    <title>Traffic Fine Payment - Khalti</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="p-4">
<?php
if (isset($_SESSION['transaction_msg'])) {
    echo $_SESSION['transaction_msg'];
    unset($_SESSION['transaction_msg']);
}
if (isset($_SESSION['validate_msg'])) {
    echo $_SESSION['validate_msg'];
    unset($_SESSION['validate_msg']);
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<div class="container mt-5">
  <div class="card p-4 shadow-lg">
    <h3 class="text-center mb-4 text-primary"><i class="bi bi-cash-coin me-2"></i> Traffic Fine Payment</h3>

    <form action="payment-request.php" method="POST" class="row g-3">
      <div class="col-md-6">
        <label for="chit_number" class="form-label">Chit Number <i class="bi bi-receipt-cutoff"></i></label>
        <input type="text" class="form-control" id="chit_number" name="chit_number" placeholder="e.g. 000123" required>
      </div>

      <div class="col-md-6">
        <label for="amount" class="form-label">Fine Amount (Rs) <i class="bi bi-currency-rupee"></i></label>
        <input type="number" class="form-control" id="amount" name="amount" placeholder="e.g. 500" required>
      </div>

      <div class="col-md-6">
        <label for="name" class="form-label">Full Name <i class="bi bi-person-circle"></i></label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" required>
      </div>

      <div class="col-md-6">
        <label for="email" class="form-label">Email Address <i class="bi bi-envelope-fill"></i></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
      </div>

      <div class="col-md-6">
        <label for="phone" class="form-label">Phone Number <i class="bi bi-telephone-fill"></i></label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="98XXXXXXXX" required>
      </div>

      <div class="col-12 text-center mt-4">
        <button type="submit" name="submit" class="btn btn-success px-5">
          <i class="bi bi-wallet2 me-1"></i> Pay with Khalti
        </button>
      </div>
    </form>
  </div>
</div>

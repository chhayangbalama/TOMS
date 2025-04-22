<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.html"); // Redirect to login page if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Fine</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- Add Khalti CSS -->
  <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

  <style>
    body {
      padding-top: 81px;
    }

    .form-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
      text-align: center;
      margin-bottom: 30px;
      color: #0d6efd;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      font-weight: 500;
      color: #333;
    }

    .form-control {
      border-radius: 5px;
      border: 1px solid #ced4da;
      padding: 10px;
    }

    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    .btn-submit {
      background-color: #0d6efd;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-weight: 500;
    }

    .btn-submit:hover {
      background-color: #0b5ed7;
    }

    .required-field::after {
      content: " *";
      color: red;
    }

    .payment-options {
      margin-top: 20px;
      padding: 15px;
      border: 1px solid #dee2e6;
      border-radius: 5px;
      background-color: #f8f9fa;
    }

    .payment-title {
      font-size: 18px;
      font-weight: 500;
      margin-bottom: 15px;
      color: #333;
    }

    .khalti-button {
      background-color: #5D2E8E;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .khalti-button:hover {
      background-color: #4a2472;
    }

    .khalti-logo {
      height: 20px;
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
            <a class="nav-link" href="trafficdash.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="efine.php">E-Fine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notice1.php">Notice</a>
          </li>
                    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="trafficrule.php">Traffic Rules</a></li>
              <li><a class="dropdown-item" href="trafficsign.php">Traffic Signs</a></li>
              <li><a class="dropdown-item" href="helpline.php">Traffic Helplines</a></li>
            </ul>
          </li>
        </ul>

        <div class="d-flex align-items-center">
          <div class="profile-section">
            <!-- <img src="img/user.jpg" alt="Profile" class="profile-avatar"> -->
            <span class="profile-name">👮‍♂️<?php echo $_SESSION['fullname']; ?></span>
          </div>
          <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
      </div>
    </div>
  </nav>


  <div class="alert alert-primary justify-content-center text-center" role="alert">
    <b>E-Fine</b>
  </div>

  <div class="container mt-5">
    <div class="form-container">
      <h2 class="form-title">E-Fine Form</h2>
      <form action="create_pdf.php" method="POST" id="fineForm">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name" class="form-label required-field">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email" class="form-label required-field">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
          </div>
                </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="date" class="form-label required-field">Date</label>
              <input type="date" class="form-control" id="date" name="date" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="vehicle_number" class="form-label required-field">Vehicle Number</label>
              <input type="text" class="form-control" id="vehicle_number" name="vehicle_number" required>
            </div>
          </div>
                </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="license_number" class="form-label required-field">License Number</label>
              <input type="text" class="form-control" id="license_number" name="license_number" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="fine_box" class="form-label required-field">Fine Amount (NPR)</label>
              <input type="number" class="form-control" id="fine_box" name="fine_box" min="0" step="100" required>
            </div>
                </div>
                </div>

        <div class="form-group">
          <label for="fine_category" class="form-label required-field">Description of Offense</label>
          <textarea class="form-control" id="fine_category" name="fine_category" rows="3" required></textarea>
                </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="location" class="form-label required-field">Location</label>
              <input type="text" class="form-control" id="location" name="location" required>
                </div>
                </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="traffic_station" class="form-label required-field">Traffic Station</label>
              <input type="text" class="form-control" id="traffic_station" name="traffic_station" required>
                </div>
                </div>
                </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="police_name" class="form-label required-field">Police Name</label>
              <input type="text" class="form-control" id="police_name" name="police_name" required>
            </div>
                  </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="notice" class="form-label required-field">Class</label>
              <textarea class="form-control" id="notice" name="notice" rows="2"></textarea>
            </div>
          </div>
        </div>

        <div class="payment-options">
          <h3 class="payment-title">Payment Options</h3>
          <input type="hidden" id="chit_number" name="chit_number" value="<?php echo rand(100000, 999999); ?>">
          <button type="button" id="payment-button" class="khalti-button">
            <img src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.22.0.0.0/icons/khalti.png" alt="Khalti" class="khalti-logo">
            Pay with Khalti
          </button>
        </div>

        <div class="form-group mt-4">
          <button type="submit" class="btn btn-submit">Generate E-Fine</button>
        </div>
      </form>
    </div>
  </div>

  <div class="d-flex flex-column flex-sm-row justify-content-center pt-2" style="background-color: aliceblue;">
    <p class="mb-4">© 2025 TMS, All rights reserved.</p>
    <ul class="list-unstyled d-flex mb-4">

      <li class="ms-3"><a href="#"><i class="bi bi-facebook" width="100" height="100"></i><span
            class="visually-hidden">Facebook
            group</span></a></li>
      <li class="ms-3"><a href="#"><i class="bi bi-instagram"></i><span class="visually-hidden">Instagram
            page</span></a></li>
      <li class="ms-3"><a href="#"><i class="bi bi-twitter"></i><span class="visually-hidden">Twitter
            account</span></a></li>
      <li class="ms-3"><a href="#"><i class="bi bi-youtube"></i><span class="visually-hidden">Youtube
            channel</span></a></li>
    </ul>
  </div>
  <script>
    document.getElementById("myButton").addEventListener("click", function() {
      window.location.href = "login.html";
    });

    // Set today's date as the default value for the date field
    document.getElementById('date').valueAsDate = new Date();
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  
  <!-- Khalti Integration -->
  <script src="khalti-config.js"></script>
  <script>
    var checkout = new KhaltiCheckout(config);
    var btn = document.getElementById("payment-button");
    btn.onclick = function () {
        // Get the fine amount from the form
        var fineAmount = document.getElementById("fine_box").value;
        // Khalti takes amount in paisa
        var amount = fineAmount * 100;
        
        checkout.show({amount: amount});
    }
  </script>
</body>

</html>
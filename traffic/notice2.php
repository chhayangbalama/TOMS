<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: ../login.html");
    exit();
}
$fullname = $_SESSION['fullname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        background-color: rgb(255, 255, 255);
        padding-top: 82px;
    }
</style>

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
            <a class="nav-link" href="efine.php">E-chit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="notice1.php">Notice</a>
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

      <script>
        document.getElementById("myButton").addEventListener("click", function() {
          window.location.href = "../login.html";
        });
      </script>     

        </div>

    </nav>

    <div class="alert alert-primary justify-content-center text-center" role="alert">
        NOTICE
    </div>


    <div class="container main-body shadow my-3 py-4">
        <div class="col-md-12 col-sm-12 ">
            <h3><b>Metro traffic to manage street lights in the capital</b></h3>
            <h6>03/01/2025</h6>
            <img class=" justify-content-center" src="img/light.jpeg" style="height:200px">
            <hr>
            <p>Metropolitan Traffic Police Division is all set to manage street lights in Kathmandu valley. Organizing a
                press conference in the capital on Monday, newly appointed chief of MTPD Senior Superintendent of Police
                Bhim Prasad Dhakal said that he would give top priority to the management of street lights in Kathmandu
                valley in a bid to digitize traffic management. At the event, SSP Dhakal presented the concept of smart
                traffic police. “I am planning to manage more effectively by making traffic police personnel more
                responsible, disciplined and smart,” added Dhakal. According to him, strict implementation of traffic
                laws will be his main task with the view to systematizing traffic in the capital.</p>
        </div>
    </div>



    <div class="d-flex flex-column flex-sm-row justify-content-center pt-2 fixed-bottom"
        style="background-color: aliceblue;">
        <p class="mb-4">© 2025 TMS, All rights reserved.</p>
        <ul class="list-unstyled d-flex mb-4">

            <li class="ms-3"><a href="https://www.facebook.com/chhayangba.lama.5"><i class="bi bi-facebook" width="100" height="100"></i><span
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    header("Location: ../login.html");
    exit();
}
$fullname = $_SESSION['fullname'];
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Traffic Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 81px;
    }

    .video {
      padding-left: 150px;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
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
            <a class="nav-link active" href="trafficdash.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="efine.php">E-chit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="notice1.php">Notice</a>
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
    WELCOME TO TRAFFIC MANAGEMENT SYSTEM!
  </div>

  <div class="container-fluid">
    <div class="col-sm-12">

      <!-- Carousel -->
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://english.onlinekhabar.com/wp-content/uploads/2018/08/Traffic-Island-1.jpg"
              class="d-block w-100" style="height: 400px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://content.unops.org/photos/News-and-Stories/Features/_image1800x900/Nepal-Go_Pro-Police-John-Rae-_87A6164.jpg"
              class="d-block w-100" style="height: 400px;" alt="traffic police">
          </div>
          <div class="carousel-item">
            <img src="https://thehimalayantimes.com/uploads/imported_images/wp-content/uploads/2018/08/Traffic-jam.jpg"
              class="d-block w-100" style="height: 400px;" alt="traffic police">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Features Section -->
  <section class="px-3 py-3 py-lg-5">
    <h2 class="visually-hidden">Features</h2>
    <div class="gap-3 row gap-lg-5 justify-content-center">
      <article class="card col-lg-3">
        <div class="gap-2 card-body vstack">
          <a href="trafficsign.php">
            <img class="card-img-top" src="img/traffic.jpg" alt="Card image cap">
            <h3 class="card-title fw-bold">Traffic Signs</h3>
          </a>
          <p class="card-text">More than 100+ traffic signs available...</p>
        </div>
      </article>
      <article class="card col-lg-3">
        <div class="gap-2 card-body vstack">
          <a href="trafficrule.php">
            <img class="card-img-top" src="img/trafficrules.jpg" alt="Card image cap">
            <h3 class="card-title fw-bold">Traffic Rules</h3>
          </a>
          <p class="card-text">Read different rules of traffic</p>
        </div>
      </article>

      <article class="card col-lg-3">
        <div class="gap-2 card-body vstack">
          <a href="https://betelgeuse.dribbcast.com/proxy/trafficradio?mp=/stream">
            <img class="card-img-top" src="img/metrofm1.jpg" alt="Card image cap">
            <h3 class="card-title fw-bold">Metro FM</h3>
          </a>
          <p class="card-text">We will launch different new programs....</p>
        </div>
      </article>
    </div>
  </section>

  <!-- Videos Section -->
  <div class="video ml-0">
    <iframe class="mb-3" width="380" height="300" src="https://www.youtube.com/embed/re5eUZPadI4"
      style="border-color: rgb(33, 202, 67);"></iframe>

    <iframe class="mb-3 mx-5" width="380" height="300" src="https://www.youtube.com/embed/dZ8gRSKqIcY"></iframe>

    <iframe class="mb-3" width="380" height="300" src="https://www.youtube.com/embed/TjNysHt8bZg"></iframe>
  </div>

  <!-- Footer -->
  <div class="d-flex flex-column flex-sm-row justify-content-center py-0 my-0 border-top">
    <p class="my-4">© 2025 TMS, All rights reserved.</p>
    <ul class="list-unstyled d-flex my-4">
      <li class="ms-3"><a href="#"><i class="bi bi-facebook" width="100" height="100"></i><span
            class="visually-hidden">Facebook group</span></a></li>
      <li class="ms-3"><a href="#"><i class="bi bi-instagram"></i><span class="visually-hidden">Instagram page</span></a></li>
      <li class="ms-3"><a href="#"><i class="bi bi-twitter"></i><span class="visually-hidden">Twitter account</span></a></li>
      <li class="ms-3"><a href="#"><i class="bi bi-youtube"></i><span class="visually-hidden">YouTube channel</span></a></li>
    </ul>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>

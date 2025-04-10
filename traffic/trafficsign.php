<?php
session_start();
if (!isset($_SESSION['fullname'])) {
    // Redirect to login if session not set
    header("Location: ../login.html");
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
      <a href="trafficdash.php">
        <img src="img/logo.jpg" class="rounded-circle" alt="logo" style="height:65px;">
      </a>
      <a class="navbar-brand" href="trafficdash.php">TMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="trafficdash.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="payment.html">Payment</a></li>
          <li class="nav-item"><a class="nav-link" href="notice1.php">Notice</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">More</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="trafficrule.php">Traffic Rules</a></li>
              <li><a class="dropdown-item" href="trafficsign.php">Traffic Signs</a></li>
              <li><a class="dropdown-item" href="helpline.php">Traffic Helplines</a></li>
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
      <script>
        document.getElementById("myButton").addEventListener("click", function() {
          window.location.href = "../login.html";
        });
      </script>     

        </div>
    </nav>
    <div class="alert alert-primary justify-content-center text-center" role="alert">
        <b>Traffic Signs</b>
    </div>
    <div class="container">
        <h1></h1>
        <img class="image image-contain img-fluid " src="img/signs2.jpg" style="width: 1100px; height: 300px;" />
        <p></p>
    </div>
    <hr class="dropdown-divider">
    <div class="col-md-12 col-sm-12 border-right">
        <div class="container py-3">
            <h1 class="text-center content-title">Traffic Sign</h1>
            <hr class="mt-0">
            <div class="container">
                <br>
                <h4 class="font-weight-bold text-center py-0 my-0">Mandatory -Order and Regulation Sign (आदेश मुलक
                    चिन्ह)</h4>

                <div class="row px-5 py-5">
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/nowait.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">रोक्न निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-ms-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/noparking1.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0 mb-1">
                                <b class="text-center">पर्किङ्ग निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/noentry.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">प्रवेश निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/4.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">दाहिने मोड्न निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/5.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बायाँ मोड्न निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/6.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">यु टर्न गर्न निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/7.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">अधिकतम गति</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/8.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">सबारी चौडाही सिमा</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/9.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">उछिन्न निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/10.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">हर्न निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/11.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">रोक हेर र जाऊ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/12.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">गति सिमा समाप्त</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/13.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">सिधा मात्र जाउ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/14.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">आगाडी गएर बाया मोड</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/15.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">कुनै तिर बाट जाउ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/16.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">सानो गोल घुम्ती</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/17.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">सवारी भार सिमा</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/18.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बाया मोड </b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/19.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बाया च्याप</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/20.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">एक तर्फी सवारी</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/21.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">रोक र जन्देउ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/22.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">मूल सडक वा गोल घुम्ती मा आउने लाई पहिला जान देउ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/23.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">ट्रक निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/24.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">सबारी लम्बाई सिमा</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/25.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">सवारी उचाई सिमा</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/26.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">एक्सल भार सिमा</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/27.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">पैदल यात्री निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/28.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बेल गाडा निषेध</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/29.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">गति सिमा समाप्त</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/30.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">जाउ (अस्थाई चिन्ह )</b>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>

                <h4 class="font-weight-bold text-center py-0 my-0">Dangerous and Warning Signs(चेतनामुलक चिन्ह)</h4>

                <div class="row">
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/31.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">टी जक्शन</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/32.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">खतरा</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/33.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">आगाडी दुइ तर्फी बाटो सिधा</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/34.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">आगाडी दुइ तर्फी बाटो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/35.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">दाहिने मोड</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/36.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">दाहिने पुरा मोड</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/37.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">साँघुरो पुल</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/38.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बढी उकालो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/39.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">खतरनाक दबेको बाटो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/40.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">दुवै तिर बाट साँघुरिएको सडक</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/41.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">पहिरो झर्ने ठाउँ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/42.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">दाहिने तिरबाट साँघुरिएको बाटो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/43.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">दोहोरो मोड पहिले बायाँ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/44.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">वाई जंक्सन</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/45.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बायाँबाट सबारी आउन सक्छ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/46.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">दाहीनेबाट सबारी आउन सक्छ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/47.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">गोल घुम्ती</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/48.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">आगाडी उचायी सिमा</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/49.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">चौबाटो आगाडी सडक</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/50.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">चौबाटो आगाडी साखा सडक</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/51.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बढी ओरालो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/52.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">पाल्तु जनावर</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/53.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">कम उचाइमा डिलहरु</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/54.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">उठेको बाटो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/55.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">पैदल यात्रीले बाटो काट्ने ठाउँ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/56.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">दाहिने साखा सडक</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/57.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">एक पछि आर्को दोबाटोहरु</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/58.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">दोहोरो बाटोहरु समाप्त</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/59.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">ट्राफिक चिन्ह</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/60.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">जंङ्गली जनावर</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/61.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">अगाडी बाटोमा पैदल यात्री</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/62.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">नदीको किनारा</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/63.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">रेल गाढी गेट नभएको</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/64.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">गिट्टी उछिट्टिटन सक्ने</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/65.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बाटोमा काम हुदै</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/66.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">ज़ाच चौकी</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/67.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">केटाकेटीहरु</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/68.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बायाँतिर तिखो मोड</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/69.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">तिखो मोड (अस्थाई बाटो)</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/70.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">टी जंक्शन (दायाँ बायाँ मोड )</b>
                            </div>
                        </div>
                    </div>
                </div>


                <br><br>
                <hr>
                <h4 class="font-weight-bold text-center py-0 my-0">Information Signs (जानकारीमुलक चिन्ह )</h4>
                <div class="row">
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/71.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">पार्किंग ईस्थल</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/72.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">एक तर्फी बाटो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/73.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">वर्क शप</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/74.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">प्राथिमिक उपचार सिबिर</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/75.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">उछिने ठाउँ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/76.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">टेलिफोन</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/77.png" width="50%" class="responsive" alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बाटोको अन्त</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/78.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">पैदल यात्री को बाटो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/79.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">पेट्रोल पम्प</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/80.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बस बस्ने ठाउँ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/81.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">अस्पताल</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/82.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">जलपान ठाउँ</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/83.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">पैदल यात्री र साइकल को बाटो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/84.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">रेस्टुरा</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/85.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">पैदल यात्रीको बाटो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/86.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">साइकल को बाटो</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/87.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बस बिसौनी</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/88.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">बन भोज क्षेत्र</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/89.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">जेब्रा क्रस</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/90.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">अत्यन्त जरुरि भए मात्र राख्न</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/91.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">सडक छेउ का रेखाहरु</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 pt-4">
                        <div class="card text-dark" id="shadow">
                            <div class="card-body text-center py-0 my-0">
                                <img src="img/92.png" width="50%" class="responsive"
                                    alt="Nepal Traffic Sign">
                            </div>
                            <div class="card-footer text-center py-0 my-0">
                                <b class="text-center">सडक बीच का रेखाहरु</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-center pt-2" style="background-color: aliceblue;">
            <p class="mb-4">© 2025 TMS, All rights reserved.</p>
            <ul class="list-unstyled d-flex mb-4">

                <li class="ms-3"><a href="https://www.facebook.com/chhayangba.lama.5"><i
                            class="bi bi-facebook" width="100" height="100"></i><span class="visually-hidden">Facebook
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
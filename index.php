<?php
include 'connection.php';
session_start();

if(!empty($_SESSION['logged_in'])&&$_SESSION['logged_in']==true){
  $email = $_SESSION['user_email_address'];
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['userid'] = $row['id'];
}

// if($_SESSION['logged_in']==FALSE){
//   session_destroy();
// }
if (!empty($_SESSION['user_first_name'])) {
  $username = $_SESSION['user_first_name'];
}

// if (isset($_SESSION['user_first_name'])) {
//   $username = $_SESSION['user_first_name'];
//   echo $username;
//}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hometrieve</title>
  <meta content="We aim to achieve a convenient way for renting accommodation at best rates In Bangladesh." name="keywords">

  <!-- Favicons -->
  <link href="assets/image/logo1c.jpeg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS CDN Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/searchbar.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo"><img src="assets/image/logo1c.jpeg" alt="Hometrieve"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a class="nav-link scrollto active" href="#team"><span>Houses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="">Rent House</a></li>
              <li><a href="">Buy House</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#team"><span>Lands</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="">Buy Land</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#team"><span>Add property</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="add_houses.php">Add Houses</a></li>
              <li><a href="add_lands.php">Add Lands</a></li>
            </ul>
          </li>
          <li><a class="nav-link " href="contact_us.php">Contact</a></li>
          <li><a class="nav-link " href="signup.php">Register</a></li>

          <?php

          if (empty($_SESSION['logged_in'])) echo '<li><a class="nav-link scrollto" href="login.php">Login</a></li>';
          else {
            echo '<li class="dropdown"><span>Profile</span><i class="bi bi-chevron-down"></i>
            <ul style="text-align:center;">
                <li><span>Welcome</span></li>
                <li><span>' . $username . '</span></li>
                <li><a href="user_profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
          </li>';
          }
          ?>
          

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Carousel Section ======= -->
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="" data-slide-to="0" class="active"></li>
      <li data-target="" data-slide-to="1"></li>
      <li data-target="" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner align-items-center">
      <div class="carousel-item active">
        <img src="assets/image/index_c_1.jpg" alt="Los Angeles" width="100%" height="auto">
        <div class="carousel-caption">
          <h1 class="text-white display-6 font-weight-bold"><strong>Rent a house</strong></h1>
          <p class="text-white font-weight-bold">Get your desired accommodation!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/image/index_c_1.jpg" alt="Chicago" width="100%" height="auto">
        <div class="carousel-caption">
          <h1 class="text-white display-6 font-weight-bold">P</h1>
          <p class="text-white font-weight-bold">A</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/image/index_c_1.jpg" alt="New York" width="100%" height="auto">
        <div class="carousel-caption">
          <h1 class="text-white display-6 font-weight-bold">g</h1>
          <p class="text-white font-weight-bold"></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <!-- ======= End Carousel Section ======= -->

  <div class="parallax-window d-flex align-items-center" data-parallax="scroll" data-image-src="assets/image/hero-bg.jpg">
    <div class="overlay"></div>
    <section class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="search-bar">

        <form action="form-test.php" method="POST">
          <div class="row g-3">

            <div class="col-md-6">
              <label for="location" class="form-label">Location</label>
              <select name="location" class="form-select" id="location" aria-label="Select Location">
                <option disabled selected>Select Location</option>
                <option value="bashundhara">Bashundhara</option>
                <option value="banani">Banani</option>
                <option value="mirpur">Mirpur</option>
                <option value="uttara">Uttara</option>
                <option value="gulshan">Gulshan</option>
                <option value="mohakhali">Mohakhali</option>
                <option value="badda">Badda</option>
                <option value="khilgaon">Khilgaon</option>
                <option value="dhanmondi">Dhanmmondi</option>
              </select>
            </div>

            <div class="col-md-3">
              <label for="purpose" class="form-label">Purpose</label>
              <select name="purpose" class="form-select" id="purpose" aria-label="Purpose">
                <option disabled selected>What's your purpose?</option>
                <option value="buy" selected>Buy</option>
                <option value="rent">Rent</option>
              </select>
            </div>

            <div class="col-md-3">
              <label for="type" class="form-label">Type</label>
              <select name="type" class="form-select" id="type" aria-label="Type">
                <option disabled selected>Select type</option>
                <option value="apartment">Apartment</option>
                <option value="land">Land</option>
              </select>
            </div>

            <div class="col-md-3">
              <label for="area_size" class="form-label">Area size</label>
              <input name="area_size" type="number" class="form-control" id="area_size" placeholder="Area size (sqft)">
            </div>

            <div class="col-md-3">
              <label for="bed" class="form-label">Beds</label>
              <input name="bed" type="number" class="form-control" id="bed" placeholder="Beds">
            </div>

            <div class="col-md-3">
              <label for="bath" class="form-label">Baths</label>
              <input name="bath" type="number" class="form-control" id="bath" placeholder="Baths">
            </div>

            <div class="col-md-3">
              <label for="balcony" class="form-label">Balcony</label>
              <input name="balcony" type="number" class="form-control" id="balcony" placeholder="Balcony">
            </div>

          </div>

          <div class="row g-3 mt-3 d-flex justify-content-center align-items-center">
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">FIND</button>
            </div>
          </div>

        </form>
      </div>
    </section>
  </div>

  <!-- ======= Rent, Buy, Sell Section ======= -->
  <section>
    <div class="blog" data-aos="fade-up" data-aos-delay=100>
      <div class="container">
        <h1 class="text-center font-weight-bold text-dark text-capitalize pt-5">Check Out Our Services</h1>
        <div class="row mb-5">

          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card">
              <div class="card-img">
                <img src="assets/image/rent.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <h4 class="card-title">Rent</h4>
                <p class="card-text">
                  A reliable browsing experience to make easy for everyone to find desired houses for rent at any location in any time.
                </p>
              </div>
              <div class="card-footer">
                <div class="text-center">
                  <button class="btn bg-primary text-white text-left" onclick="window.location =''">Rent a house</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card">
              <div class="card-img">
                <img src="assets/image/buy.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <h4 class="card-title">Buy</h4>
                <p class="card-text">
                  Anyone get their desired house or land by one click. You can find your convinient place to buy houses and land.
                </p>
              </div>
              <div class="card-footer">
                <div class="text-center">
                  <button class="btn bg-primary text-white text-left" onclick="window.location =''">Buy house or land</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="card">
              <div class="card-img">
                <img src="assets/image/sell.jpg" class="img-fluid">
              </div>
              <div class="card-body">
                <h4 class="card-title">Sell</h4>
                <p class="card-text">
                  An user can become a seller and sell their lands and houses here at their own price. They can also post adds.
                </p>
              </div>
              <div class="card-footer">
                <div class="text-center">
                  <button class="btn bg-primary text-white text-left" onclick="window.location =''">Sell house or land</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- ======= End Rent, Buy, Sell Section Section ======= -->



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Home<span>trieve</span></h3>
            <p>
              We aim to achieve a <br> convenient way for<strong>
                renting accommodation at best rates <br></strong>
              In Bangladesh.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.acm.org/education/" target="_blank">Dummy text</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.acm.org/publications/digital-library/" target="_blank">Dummy text</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <br>
            <br>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="http://www.northsouth.edu/" target="_blank">Dummy text</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://ece.northsouth.edu/" target="_blank">Dummy text</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html" target="_blank">About US</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Get the latest updates from our<br>social profiles!</p>
            <div class="social-links mt-3">
              <a href="" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <a href="" target="_blank" class="github"><i class="bx bxl-github"></i></a>
              <a href="" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container py-2">
      <div class="credits">
        <p>Made with ❤️ by <a href="webmasters.php" target="_blank">WebMasters</a></p>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- JS CDN Files -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/parallax.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
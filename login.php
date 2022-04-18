<?php

include 'connection.php';
require_once('googleapi/config.php');

if (isset($_POST['log_in'])) {
  $dbemailcontact = strip_tags($_POST['emailcontact']);
  $dbpass = strip_tags($_POST['password']);

  $word = "@";
  if (strpos($dbemailcontact, $word) !== false) {
    $sql = "SELECT email, password FROM user";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while ($row = mysqli_fetch_assoc($result)) {
        $Email = $row["email"];
        $Pass = $row["password"];
        // Check if the username and the password they entered was correct
        if ($Email == $dbemailcontact && $Pass == $dbpass) {
          $sql = "SELECT id,first_name
                    FROM user
                    WHERE email='$dbemailcontact'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $dbid = $row["id"];
          $dbname = $row["first_name"];
          session_start();
          $_SESSION['userid'] = $dbid;
          $_SESSION['username'] = $dbname;

          $_SESSION['logged_in'] = true;
          header("Location: index.php");
        } else {
          // Display the alert box
          echo "<script>
                    alert('Invalid Email or Password!');
                    window.location.href='login.php';
                    </script>";
        }
      }
    }
  } else {
    $sql = "SELECT contact, password FROM user";
    $result = mysqli_query($conn, $sql);
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
      $Contact = $row["contact"];
      $Pass = $row["password"];
      // Check if the username and the password they entered was correct
      if ($Contact == $dbemailcontact && $Pass == $dbpass) {
        $sql = "SELECT id,first_name
                FROM user
                WHERE contact='$dbemailcontact'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $dbid = $row["id"];
          $dbname = $row["first_name"];
          session_start();
          $_SESSION['userid'] = $dbid;
          $_SESSION['username'] = $dbname;

          $_SESSION['logged_in'] = true;
        header("Location: index.php");
      } else {
        // Display the alert box
        echo "<script>
                alert('Invalid Email or Password!');
                window.location.href='login.php';
                </script>";
      }
    }
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hometrieve | Login</title>
  <meta content="We aim to achieve a convenient way for renting accommodation at best rates In Bangladesh." name="keywords">

  <!-- Favicons -->
  <link href="assets/image/logo1c.jpeg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo"><img src="assets/image/logo1c.jpeg" alt="Hometrieve"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#team"><span>Houses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="view_houses_rent.php">Rent House</a></li>
              <li><a href="view_houses_buy.php">Buy House</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href=""><span>Lands</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="view_lands.php">Buy Land</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#team"><span>Add Property</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="add_houses.php">Add Houses</a></li>
              <li><a href="add_lands.php">Add Lands</a></li>
            </ul>
          </li>
          <li><a  href="contact_us.php">Contact</a></li>
          

          <?php

          if (empty($_SESSION['logged_in'])) echo '<li><a class="nav-link scrollto active" href="login.php">Login</a></li>';
          else {
            echo '<li class="dropdown"><a href="#team"><span>Profile</span><i class="bi bi-chevron-down"></i></a>
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
  <div class="container">
    <div class="row card-holder">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center ">
        <h1 class="text-center text-dark text-capitalize pt-3">Login</h1>
        <hr class="w-25 text-center">
        <div class="card" data-aos="fade-up" data-aos-delay=100>
          <form id="login_form" method="POST" action="login.php">
            <div class="form-group mb-3">
              <label for="email">Email address/Contact No:</label>
              <input name="emailcontact" class="form-control" placeholder="Enter email or contact number" id="emailcontact" type="text" required="">
            </div>
            <div class="form-group mb-3">
              <label for="pwd">Password:</label>
              <input name="password" class="form-control" placeholder="Enter password" id="pwd" type="password" required="">
            </div>
            <div class="col-md-12 text-center">
              <button name="log_in" class="btn btn-primary w-50"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
              <hr>
              <button type="submit" class="btn btn-danger" onclick="window.location = 'signup.php';"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</button>
              <button type="button" onclick="window.location = '<?php echo $loginUrl; ?>'" class="btn btn-danger"><i class="fa fa-google"></i> Login With Google</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-3"></div>
    </div>
    </div>

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
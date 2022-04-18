<?php
include 'connection.php';
session_start();

if (!empty($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
  $userid= $_SESSION['userid'];
  $username = $_SESSION['username'];
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
  <script src="assets/js/anime.min.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo"><img src="assets/image/logo1c.jpeg" alt="Hometrieve"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a class="nav-link scrollto" href="#team"><span>Houses</span> <i class="bi bi-chevron-down"></i></a>
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
          <li><a class="nav-link scrollto" href="contact_us.php">Contact</a></li>
          

          <?php

          if (empty($_SESSION['logged_in'])) echo '<li><a class="nav-link scrollto" href="login.php">Login</a></li>';
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

  <div class="landing-section" style="box-shadow:0px 40px 180px #000000;">
    <div class="title-anime" >
      <svg id="anime" viewBox="0 0 1080 1080" width="100vw" height="200px" style="transform: scale(4);">
        <path fill="none" stroke="black" stroke-width="3" d="m247.5 594.4q-1-0.2-2.2-0.7-1.1-0.6-1.7-1.6 0-4.2-0.2-8.3-0.1-4.2-0.1-8.4 0-6.4 0.3-12.9 0.5-6.5 0.5-13-0.9 10.3-0.9 20.7 0 10.2-0.6 20.5-1.7-2.4-2.1-5.4-0.2-3.1-0.2-6l0.2-6 1.3-0.6q-0.3-3.4-0.3-7 0-4.2 0.3-8.1 0.4-4.1 0.8-8.3h-1l-1.2 18.8 0.6-18.8q-3.2 0-6.4 0.6-3.1 0.6-6.3 0.6-6.1 0-12.3-0.3-6-0.2-12.1-0.4 0 6.7-0.7 13.3-0.6 6.5-0.6 13.1 0 0.9 0.1 2.5 0.3 1.4 0.3 3.1 0 1.6-0.4 2.8-0.4 1.2-1.3 1.5l-0.9-0.2 0.2-12.5q-0.3 3.1-0.4 6.2-0.1 3.2-0.1 6.3-0.4-0.1-1.1-0.1-0.8 0-1.1 0.1 0.1 0.3 0.1 0.9 0 2.9-2.8 3.6-1.1-0.4-1.8-0.8-0.8-0.4-1.2-1-0.5-0.7-0.8-1.6-0.2-1-0.2-2.7v-2l-0.6 3.9q-1-0.9-1.2-2-0.2-1.1-0.2-2.3 0-3 0.2-5.9 0.2-3 0.2-6l1-0.6q-0.4-3.9-0.4-7.9 0-3.8 0.2-7.8 0.2-3.9 0.2-7.9 0-2.8-0.1-5.6-0.1-2.9-0.6-5.7h-0.7q0.2 4.8 0.2 9.6 0.1 4.8 0.1 9.6v15q0-12-0.7-24-0.6-12-0.6-24 0.6-5.7 1-9.9 0.4-4.2 1-9.3 1.2 0.1 2.7 0.4 1.5 0.2 1.5 1.9l-0.2 2h1.6q0.2-0.7 0.6-1.6 0.4-1.1 1-2 0.6-0.9 1.4-1.5 0.8-0.7 1.8-0.7 1.2 0 1.8 1.8 0.7 1.6 1 4.4 0.4 2.8 0.5 6.5 0.1 3.6 0.1 7.3 0 2-0.1 4 0 1.9 0 3.7 0 2.4 0 4.5 0.1 2.1 0.3 3.8h6.3l1 1.4q1.7-0.2 3.2-0.4 1.6-0.1 3.3-0.1 1.3 0 2.7 0.1 1.5 0 2.8 0 2.3 0 4.4-0.2 2.3-0.2 4.6-0.8v-0.8q-4.2 0.6-8.3 0.8-3.7 0-7.6 0 5.9-0.3 12-0.9 6.4-0.6 12.8-0.8 0-7 0.4-13.9 0.5-7 0.5-13.8l-0.1-2.6 3-0.2q0.5 0 0.7 0.6 0.4 0.5 0.6 1.2 0.3 0.6 0.4 1.3 0.1 0.6 0.1 0.9 0.4-0.4 0.8-1.1 0.5-0.7 1-1.5 0.6-0.7 1.1-1.2 0.5-0.6 0.7-0.6 2 0 3.2 0.8 1.2 0.7 1.8 2 0.8 1.2 0.9 2.8 0.2 1.5 0.2 3.1 0 1.2-0.1 2.4 0 1.1 0 2v15q0 11.7-1.3 23.3-1.3 11.5-1.3 23 0 0.9 0.2 3.2 0.4 2.1 0.4 4.3 0 1.7-0.4 2.9-0.4 1-1.3 1-0.9-4.4-1.1-9.1 0 4.6 0.4 9.1l-1.1-0.2q-0.3 1.7-1.1 3.2-0.7 1.6-2.5 2.2zm-55.3-30.7v4.3q0.3-4.3 0.3-8.8 0-3.1-0.1-6.1-0.1-2.7-0.4-5.6 0 3.9 0 7.9 0.2 4.1 0.2 8.3zm23-24.6h2.5q1.8 0 3.6-0.1 1.9-0.2 3.7-0.4h-2.4q-2.5 0-5 0.1-2.4 0.1-4.9 0.1 1.3 0.3 2.5 0.3zm-10.9-1v0.9h7.7q-0.4 0-0.8-0.2-1-0.1-2.5-0.2-1.4-0.1-2.7-0.2-1.2-0.2-1.7-0.3zm47.7 25.1q-0.2 4-0.2 7.9 0.2-3.8 0.5-7.9 0.3-4.2 0.8-8.3-0.7 4.1-1.1 8.3zm-47.8-15.8h7.3q-3.6-0.4-7.2-0.4zm91.2-30.6q0.1 0.6 1.3 0.6h0.2q0.8 0 1 0.1 6.2 1.9 12.4 5.7 6.2 3.6 11.1 8.7 5.1 5.1 8.1 11.5 3.1 6.5 3.1 14 0 6.4-2.5 12.4-2.6 6-7 10.5 4.6-4 7.2-9.9 2.8-6 2.8-12.8 0-7.7-3.3-14.3-3.2-6.7-8.3-12-5-5.3-11.2-9-6.2-3.8-12-5.9 4.5 0 9.2 2.1 4.8 2 9.1 5.4 4.3 3.2 7.9 7.5 3.8 4.2 6.3 8.7l-0.9 1.2q2.4 3.6 3.6 7.8 1.4 4.2 1.4 8.6 0 8.5-3.8 15-3.6 6.4-9.2 10.7-5.5 4.2-12.2 6.4-6.6 2.1-12.5 2.1-3.4 0-6.9-0.7-3.3-0.7-6.8-2.4v0.7q3.4 1.9 6.8 2.7 3.6 0.7 7.1 0.7 8.7 0 16.9-3.7 8.4-3.9 14.2-10.7-5.5 7.1-13.8 11-8.2 4-17 4-9.2 0-14.8-3.5-5.6-3.6-8.9-8.8-3.1-5.1-4.2-10.9-1.1-5.7-1.1-10.3 0-6.1 1.6-12 1.7-5.9 5-10.8 3.4-4.9 8.7-8.4 5.3-3.6 12.7-5l-3.5-0.9q-2.5-0.6-3.6-1.4-1.1-0.9-1.1-1.5 0-0.9 2.1-2 2.1-1.2 4.8-1.2zm-6.1 14l0.7 1.1q3.2-1.2 6.2-1.2 3 0 4.6 1 1.7 0.8 1.7 1.8 0 0.6-1.5 1.3-1.3 0.7-3.5 2-2 1.2-4.5 3.2-2.4 1.9-4.6 4.9-2 2.9-3.5 7.1-1.3 4.2-1.3 9.8 0 8.3 3.7 12.5 3.8 4.2 10.4 4.2 4.2 0 8.5-1.5 4.4-1.4 7.9-4 3.6-2.7 5.8-6.5 2.2-3.9 2.2-8.7 0-3.6-1.3-7.2-1.2-3.6-3.5-6.8-2.1-3.4-5.2-6.2-3-2.9-6.6-5-3.5-1.9-5.8-2.8-2.2-1.1-3.1-2.1-1 0.5-2.8 1.2-1.7 0.6-4.5 1.9zm9.2-5.4l-0.5 0.9q5.5 1.8 10.6 5.4 4.3 3.2 7.9 7.1-3.5-4.1-7.6-7.4-4.6-3.8-10.4-6zm22.8 41.8q-1.8 3.8-5 6.8 2.1-1.4 3.6-3.4 1.5-2.1 2.5-4.1 0.9-2.1 1.4-3.7 0.4-1.6 0.6-2.6-1.3 3.2-3.1 7zm8 10.3q-0.1 0.3-0.3 0.5-0.1 0.1-0.3 0.1-0.1 0 0.6-1.2 0.8-1.3 1.7-3 1.1-1.8 2.1-3.7 0.8-1.4 1.2-2.5-1.7 5.1-5 9.8zm6.8-19.4q0 1.9-0.3 3.8-0.2 1.8-0.8 3.4 0.8-3 0.8-6.7 0-2.8-0.5-5.4-0.3-2.3-0.9-4.5 0.6 2.2 1.1 4.3 0.6 2.4 0.6 5.1zm-38.9-31.9l0.8-1.8-1.1-0.5q-0.1 0.2-0.3 0.5-0.3 0.2-0.3 0.4 0 0.3 0.3 0.8 0.3 0.3 0.6 0.6zm20 13.4q-0.3-0.5-0.7-0.8 0.4 0.4 0.7 0.8zm17.1 28.1q0.1-0.3 0.1-0.5 0 0.2-0.1 0.5zm0.2-0.7q-0.1 0.1-0.1 0.2 0-0.1 0.1-0.2zm65.6 17.7l-0.8-1.4q0-4-0.6-8.1-0.5-4-0.5-7.9v-3.2q-0.6-4.7-1.4-10.9-0.9-6.4-2.2-12-1.3-5.7-3.2-9.6-1.9-4-4.8-4-4.2 0-8.7 4-4.4 3.8-7.4 11.2-1.4 4.2-2 8.9-0.5 4.7-0.9 9.9-0.3 5.1-0.7 10.6-0.2 5.4-1.1 11.3-0.2 0.6-0.5 1.5-0.1 0.8-0.2 1.4h-14.8v-9.7q-0.1-1.2-0.2-2.9-0.1-1.7-0.4-3.4-0.1-1.8-0.2-3.4-0.1-1.7-0.2-2.9 0-9.7-0.9-19.5-0.7-9.7-0.9-19.8l2.7-0.6q0.4 0 0.7 0.8 0.5 0.6 0.8 2.4 0.3 1.8 0.6 5.1 0.3 3.3 0.6 8.5 0.1 0 0.3-0.1 0.5-0.2 0.7-0.2 0-0.9-0.1-1.7 0-0.8 0-1.7 0-10.3 1.3-15.8 1.5-5.7 2.4-5.7 0.8 0 1.5 3.2 0.7 3.1 1.5 9.8 2.1-3.2 4.7-6.2 2.7-3 5.9-5.2 3.4-2.3 7.2-3.6 3.8-1.3 8.4-1.3 4 0 7 1.7 3 1.6 5.2 4.4 2.4 2.6 4 6.1 1.7 3.4 2.9 6.9 1.2 3.3 1.9 6.6 0.8 3.1 1.4 5.2 0 0.3 0.2 0.6 0.1 0.3 0.2 0.5 1.4-3.8 3.6-8.7 2.2-5.1 5.4-9.5 3.2-4.5 7.6-7.5 4.4-3.1 10.2-3.1 5.6 0 9.6 3 3.9 3 6.6 7.7 2.7 4.7 4.3 10.4 1.7 5.7 2.5 11.2 0.8 5.4 1.1 10 0.2 4.5 0.2 6.9 0 3.9-0.3 5.7-0.3 1.8-1.6 1.8-0.2-4.8-0.5-9.8-0.1-4.9-0.7-9.8-0.5-5-1.4-9.8-1-4.7-2.6-9.3 3 9.5 3.5 19 0.6 9.6 1 18.9-0.9-0.8-1.3-0.8-0.4 0-0.5 0.5v3.6q0 1.5 0 3.2 0.1 1.7 0.3 2.9-0.2 4.9-0.4 7.1-0.2 2-0.9 2.6-0.9 0-1.7-1.1-0.7-1-1.4-2.7-0.6-1.7-1.2-3.7-0.6-2.1-1.2-4v-3.2q0-5.3-0.1-11.1 0-5.7-0.5-11.1-0.4-5.6-1.3-10.5-0.9-4.9-2.4-8.6-1.5-3.9-3.9-6-2.2-2.2-5.6-2.2-2.8 0-5 1.5-1.4 0.8-2.7 2.1 1.3-1.2 2.8-2 2.3-1.5 4.9-1.5h0.5q3 0 5 2.4 2.2 2.3 3.5 6.2 1.4 3.8 2.2 8.7 0.7 4.9 1 10.2 0.5 5.3 0.6 10.6 0.2 5.1 0.3 9.5-0.7-3.4-1.3-8-0.5-4.6-1.1-9.7-0.5-5-1.3-9.9-0.8-5-2-8.8-1.2-4-3-6.4-1.8-2.4-4.4-2.4-1.1 0-1.9 0.3-0.9 0.1-2.2 1.2l-1.2-0.6q-4.1 3.6-6.8 9.6-2.8 6-4.7 12.9-1.9 6.9-3.2 14.1-1.4 7.2-2.6 13.3v4.6q2-9.5 3.5-18.6 1.7-9.3 4.8-17.9-2.4 7.4-3.7 15.3-1.3 8-3 16.2 0 0.9-0.4 2.3-0.3 1.5-1.2 4.3zm-0.4-3l0.9-4.4q-0.3-3.2-0.7-8.3-0.2-5-0.7-10.7-0.5-5.6-1.3-11.4-0.9-5.7-2.4-10.3-1.5-4.7-3.8-7.5-2.1-2.9-5.5-2.9-1.1 0-2.3 0.5-1.2 0.4-2.2 1 0.3-0.1 0.6-0.1h0.1q0 0.1-0.4 0.5 3.3-1.1 5.1-1.1 2.2 0.9 4 3.7 1.8 2.9 3 7 1.4 4 2.2 8.6 1 4.7 1.4 9 0.5 4.2 0.8 7.6 0.2 3.4 0.2 4.8 0.4 3.6 0.6 7.1 0.4 3.5 0.4 6.9zm11-36.7q0 0.1 0.2 1.1 0.3 0.8 0.4 1.1 0.4-1.2 1.6-3.9 1.2-2.7 2.6-5.7 1.4-3.1 2.8-5.8 0.4-1.1 0.8-1.9-0.4 0.7-1 1.6-1.3 2.4-2.8 5-1.6 2.5-2.9 4.9-1.3 2.4-1.7 3.6zm9.5-1.4q-2.4 6.1-4.2 12.9-1.8 6.8-3.3 14l0.3 1.9q1.5-8.7 3.6-17.4 1.9-7.7 4.9-14.5-0.1 0.3-0.2 0.6-0.6 1.2-1.1 2.5zm-18.7 22.3l-0.9-6q0.3 1.9 0.3 3.7 0.1 1.8 0.2 3.4l0.4 5.7 0.1-0.6q-0.1-1.6-0.1-3.2zm36-47.2h2.5q-2.2-0.6-4.1-0.6h-1.3q-0.9 0-0.9 0.2h0.2q1.9 0.4 3.6 0.4zm-14.4 25.6l-0.9 1.9q0.6-1.7 1.1-3.2 0.6-1.6 1-2.2 0 0.3-0.3 1-0.2 0.8-0.9 2.5zm25.2-20.5q-0.6-0.7-1.6-1.5-0.7-0.4-1.3-0.8 1.4 1 2.9 2.3zm-28.6 5q-0.2 0.3-0.4 0.7 0.3-0.3 0.4-0.7zm96.6 62.4q-4.6 1.6-7 1.8-2.4 0.1-4.2 0.3-6.7 0-12.1-2.6-5.4-2.5-9.2-6.8-3.9-4.3-6-10.1-2.1-5.9-2.1-12.5 0-3.8 0.8-7.9 0.7-4.2 2.1-8.1 1.5-4.1 3.7-7.6 2.2-3.5 5.2-6.2-3.1 2.5-5.3 6-2.3 3.4-3.8 7.5-1.6 4-2.3 8.3-0.7 4.2-0.7 8.2 0 5 1.5 10.8 1.7 5.6 5.3 10.5 3.6 4.8 9.3 8.1 5.7 3.2 13.9 3.2 3.8 0 8-1.1-4.5 3-10.2 3-4.5 0-8.6-1.3-4-1.4-7.5-3.8-3.3-2.6-6.1-5.9-2.7-3.4-4.7-7.2l1.1-1q-2-4.1-3-8.1-0.8-4.1-0.8-8.3 0-6.1 1.7-11.8 1.8-5.6 4.6-10.7l2.9-3.9q0.7-1.3 2.1-2.7 1.4-1.3 3.1-2.5 1.7-1.3 3.5-2.3 1.9-1 3.6-1.9 4.3-2.1 8.6-3.8 4.3-1.8 10.1-2.7l-0.5-0.3q-11 1.1-18.7 5.4-7.7 4.2-12.5 10.3-4.8 6.1-7 13.4-2.1 7.2-2.1 14.2 0 3.7 0.6 7.6 0.7 3.7 2 7.4-3-7.2-3-15.2 0-8 2.7-15.8 2.6-7.8 8.2-14.4 7.2-6.6 15.8-10 8.5-3.6 16.4-3.6 2.5 0 5.2 0.8 2.6 0.8 4.8 2.6 2.1 1.7 3.4 4.5 1.5 2.7 1.5 6.7 0 3.2-1.6 7.9-1.5 4.7-4.7 9.1-3 4.4-7.5 7.5-4.6 3-10.6 3h-3.9q-4.5-1-8.2-2.2-3.6-1.3-6.8-2-0.5 1.9-0.6 3.7 0 1.7 0 3.4 0 3.4 0.7 6.8 0.8 3.2 2.5 6 1.7 2.8 4.2 4.7 2.6 1.8 6.4 2.3 2.2 0.4 3.9 0.6 1.7 0 2.8 0.1 1.2 0 1.7 0.3 0.6 0.3 0.6 1.1-1.2 0.4-2.6 0.5-1.2 0.1-2.5 0.1-4.2 0-7.5-1.3-3.4-1.4-5.8-3.2 2.8 2.7 6.6 3.9 3.8 1.1 7.6 1.1 2 0 4.2-0.4-0.3 0.8-0.3 0.9 0 0.7 0.6 0.9 0.5-0.1 1.7-0.6 1.2-0.6 2.4-1 1.3-0.6 2.5-1 1.2-0.5 1.7-0.5 0.6 0 1.1 0.3 0.5 0.1 0.5 1.3 0 1.2-0.9 2.9-0.8 1.6-2.5 3.3zm-16.6-47.5l2.7 0.5q1.3 0.2 2.4 0.2 1.2 0 2.7-0.7 1.7-0.8 3.3-2.3 1.7-1.4 2.9-3.6 1.3-2.1 1.9-4.9l0.2-0.7q-1.7 0-5 0.8-3.4 0.9-7 2.3-3.6 1.3-6.7 3.2-3.1 1.8-4.3 4 1.8 0.4 3.5 0.7 1.8 0.3 3.4 0.5zm-11.4 7.1l5.9 1.8q0.3-0.3 0.3-0.7 0.1-0.5 0.1-0.8l-5.7-2zm2.6 29q-0.9-0.9-1.7-1.9-0.7-0.8-1.2-1.7 1.1 2.1 2.9 3.6zm95.1-50.7q-1.1 0-3 0.3-1.8 0.4-3.7 0.9-1.8 0.5-3.4 0.9-1.4 0.5-1.8 0.8 3.2-0.5 5.8-1.1 2.6-0.7 5.8-0.7-0.6 1-1.6 1.6-1 0.6-2.2 1-1 0.2-2.4 0.5-1.3 0.1-2.7 0.5l-0.9-1.1q-2.2 0.8-3.4 1.1-1.2 0.1-2.6 0.1-1.4 0-3 0-1.4-0.1-3.2-0.1 0 0.6-0.1 0.9 2.7 0 4.7 0 1.9-0.1 4.6-0.5-2.6 0.5-4.6 0.8-2 0.2-4.7 0.2-0.5 2.8-0.9 5.4-0.3 2.6-0.3 5.2 0 1.4 0.1 3.3 0.1 1.9 0.2 4 0.3 1.9 0.4 3.7 0.1 1.7 0.1 2.5v7.2q0.6 2.4 3.5 3.6 2.9 1.2 8.3 1.2h3.8q2.1 0 2.8 0.5 0.8 0.4 0.8 1.1 0 0.6-0.9 0.7-1 0-2 0-3.4 0-7.3-0.5-3.6-0.5-7.1-1.1 3.5 0.9 7.4 1.6 3.9 0.6 7.6 0.6h1.1q0.5 0 1.1-0.1 0 0.6 0 1.1 0.1 0.4 0.4 1l0.9-0.2q0.4-0.1 0.9-0.1 0.4-0.1 0.7-0.4 3.8 0.4 3.8 2.7 0 1.3-0.7 2.1-0.7 0.9-1.8 1.3-1.1 0.5-2.4 0.8-1.3 0.1-2.5 0.1-4.2 0-8.3-0.5-4-0.6-7.8-1.2 3.4 1.2 8.5 1.9 5.2 0.7 10.5 0.7-1.4 0.9-3.2 1.4-1.8 0.4-3.7 0.4l-8.6-1q-1.7-0.3-2.7-0.5-0.8-0.3-1.6-0.5-0.9-0.4-2-0.7-0.9-0.4-2.7-0.9v-1.3q-3.1-0.8-5.1-2.9-1.9-2-3-4.4-1-2.4-1.4-4.8-0.4-2.5-0.4-4.4 0-2.1 0-3.8 0.2-1.8 0.2-3.6 0-1.3-0.2-3.3 0-2.1-0.1-4.3-0.1-2.3-0.2-4.7 0-2.4 0-4.6 0-1.3 0-2.5 0.1-1.2 0.2-2.2h-1.2q-0.1 0.9-0.1 2v2.1q0 3.5 0.1 7 0.1 3.3 0.1 6.2 0.2 2.9 0.3 5.1 0.1 2 0.1 3v4.8 0.9q-0.4-3.2-0.7-9.2-0.4-7-0.4-15.4v-2.1q0-1.4 0-2.6 0.1-1.2 0.4-1.8l-4.1-0.2q-1.3-0.8-2.6-1.3-1.4-0.5-2.4-0.5v-2.4q0-0.7 0.1-1.2 0.2-0.6 1.2-0.6 0.2 0 1.2 0.2v-1.4q-1.3-0.7-2.2-1.9-0.8-1.3-0.8-2.7 0-3.1 4.4-3.1 1.7 0 3.5 0.3 1.8 0.2 3.7 0.3 0.5-2.6 0.9-4.7 0.3-2.1 0.7-4 0.3-2.1 0.8-4 0.5-2 1.2-4.2 1.1-2.4 1.7-5.2 0.6-2.8 0.8-5.6l2.6 0.1q0.6 0 0.9 0.4 0.5 0.3 0.5 1.7 0 1-0.4 2.8l1.5 0.4q0.9-3.2 2.3-5.3 1.4-2 2.7-2 2.1 0 2.5 5.1v2.2q0 3.1-0.4 5.9-0.4 2.6-1 5.3-0.6 2.6-1.2 5.4-0.6 2.7-1.1 6 2.7 0.3 5.2 0.3 1.2 0 2.4 0 1.2-0.1 2.4-0.1 1.2 0 2.5-1 1.3-0.9 2.4-0.9 1 0 1.4 0.6 0.5 0.6 0.5 1.3-2.1 0.6-4.3 1.3-2 0.6-4 1.2 2-0.2 4.1-0.8 2.2-0.7 4.6-1.3 0 0.6 0 1 0.1 0.5 0.3 1.1 0.3 0 0.6-0.1 0.8-0.2 0.9-0.2 1.2 0.6 1.5 1.5 0.4 0.9 0.4 1.9 0 0.9-0.2 1.6-0.3 0.6-0.3 1.1zm-31.8 44.3q-1.7-3.3-1.8-6.4-0.1-3.1-0.3-5.9l-1.1-18.2-0.4 2.1q0 8.1 0.5 14.7 0.6 6.5 1.7 10.1 0 1-0.1 1.4 0 0.4 0 0.6 0 0.2 0.2 0.6 0.4 0.4 1.3 1zm6.9-6.5q-0.3-1-0.3-2.1v-5.8q-0.1 1.2-0.2 2.4-0.1 1-0.1 2.2 0 3.2 0.3 4.8 0.4 1.5 1.5 2.4-0.6-0.7-0.9-1.5-0.1-1-0.3-2.4zm-11.8-1l0.1 0.9zm13.2 5q-0.1-0.1-0.2-0.1 0.1 0 0.2 0.1zm59.9 18.2l-3 1.2q-1.2 0.3-2.6 0.3h-3.5q-3.1 0-4.5 0.7-1.2 0.7-1.4 0.7l-0.5-2.1v-2.2l-0.6-11.3q-0.2-3.2-1.3-6.9-1.1-3.8-1.7-7.6-0.3-2.5-0.6-4.8l-0.5-4.7q-0.2-2.4-0.6-4.9-0.2-2.5-0.8-5.4 0-0.7 0-1.4 0.1-0.8 0.1-1.5 0-3.7-0.6-7.3-0.6-3.6-1.7-7.1 0.9-0.3 1.6-0.6 0.7-0.3 1.3-0.3 0.6 0 1.3 1.4 0.8 1.3 1.6 5.6 0.2 0 0.7-0.1 0.5-0.2 0.7-0.2-0.1-2.1-0.6-4.3-0.4-2.4-0.9-4.6-0.5-2.2-1-3.8-0.3-1.8-0.3-2.9 0-0.3 0-0.6 0.1-0.4 0.6-0.4 0.6 0 1.5 1.3 1 1.4 2.1 3.4 1 2 2 4.4 1.1 2.3 1.9 4.4 3.3-6.2 7.3-9.3 4.2-3.2 11-3.2 4.9 0 8 1.2 3.1 1.1 4.8 2.5 1.8 1.3 2.4 2.5l0.7 1.2q0 0.7-0.7 1-3.1-3-7.1-4.6-3.9-1.5-8.1-1.5-4.1 0-6.2 1-1.9 1-4 2.4 2.2-1.4 4.2-2.2 2-0.9 5.8-0.9 4.2 0 8.1 1.7 3.8 1.6 6.6 4.1-0.6 0.2-1.1 0.6-0.4 0.2-0.4 0.8 0.6 0 1.4 0.9 0.7 0.7 1.3 1.8 0.6 1 0.9 2.2 0.5 1.1 0.5 1.8 0 2.1-1.5 2.1-1.2 0-2.9-0.9-0.4-0.1-1.6-1.3-1.1-1.2-2.7-2.4-1.7-1.3-3.9-2.4-2.1-1.1-4.8-1.1-2.1 0-3.8 1-1.6 0.8-2.9 2.4-1.3 1.4-2.4 3.4l-1.6 2.8q1.8-3.2 4-5.8 2.4-3.2 6-3.2 3.1 0 5.8 1.5 2.6 1.3 4.3 3.3-2.1-0.8-4.8-1.6-2.8-0.9-5.3-0.9-1.3 0-2.3 0.6-0.9 0.6-1.7 1.6-0.6 0.8-1.2 1.9-0.4 1.1-1 2l-1.6 0.3q-2 3.5-3.4 8.1-1.2 4.6-1.2 9.6 0 3 0.3 5.4 0.3 2.4 0.9 5l1.5 3.7-0.3-3.5q-0.2-4.1-0.4-7.2-0.3-3.2-0.3-7.1 0.3-3.5 1-6.6 0.6-2.6 1.8-4.9-1.5 2.9-1.9 6.6-0.6 4.1-0.6 8.6 0 3.6 0.3 6.9 0.4 3.2 0.9 6.5 0.6 3.2 1.2 6.7 0.6 3.3 0.9 7.4l0.4 2.3zm-1.9-51.8l0.3-0.6zm35.2 45.4q0.5-3.3 0.8-7.8 0.5-4.5 0.9-9.1 0.3-4.5 0.7-8.9 0.3-4.4 0.7-7.6-0.6 3.2-1.1 7.4-0.5 4.2-0.9 8.6-0.5 4.5-1 8.9-0.5 4.3-0.8 7.8-1.8-1.2-1.8-3.2 0-2.4 0.1-4 0.1-1.7 0.3-3.8l1.4-1.2q-0.2-0.6-0.2-1.1v-1.2q0-2.8 0.6-6.2 0.6-3.6 1.4-7.2 0.8-3.8 1.4-7.1 0.6-3.5 0.6-6l-1.4-0.4q-0.3 2.9-0.8 6.6-0.4 3.6-1 7.6-0.5 3.8-1 7.7-0.2 2-0.5 3.8 0.3-3.4 0.6-7.2 0.6-5.5 1.2-10.9 0.7-5.5 1.3-10.8 0.6-5.3 1.2-9.7 0-1.8 0.9-3.9 0.9-2.1 1.3-4.4 0.7 0.2 1.2 0.2h0.8q1.2 0 1.6 0.6 0.4 0.5 0.4 1.5v0.6l1 0.3q1-1.8 2.3-2.9 1.3-1 2.7-1 2.8 0 2.8 6.1 0 3.2-0.7 6.9-0.6 3.6-0.6 7.1v1.6q0 3.8-0.8 8.4-0.9 4.4-1.9 9.1-1 4.6-1.8 8.9-0.9 4.3-0.9 7.9 0 0.8 0.1 1.8 0.2 1 0.2 1.8 0 1.8-0.8 2.3-0.6 0.3-1.5 0.3 0-1.5-0.1-3.8-0.2-2.3-0.2-4.1-0.2 1.3-0.2 3.6 0 2.3-0.2 4.3h-1.8v1.5q-1.1 1.9-2.9 1.9-0.9 0-1.9-0.5-1.1-0.5-1.7-1.1zm24.7-92.1q-2 1.2-3.7 3.1-1.7 1.9-3.5 3.7 1.1-0.7 1.9-1.5 0.9-0.9 1.7-1.7 1-0.9 1.9-1.7 1.1-0.8 2.4-1.6 0.4 0.5 0.6 0.9 0.4 0.3 0.4 0.7l-2.8 2.8q0-0.3-0.5-0.5-0.3-0.3-0.6-0.3-0.3 1.2-1.2 2-0.8 0.7-1.6 1.3-0.9 0.6-1.7 1.3-0.9 0.7-1.2 1.9v0.3q0 0.1 0.3 0.1l6-5.7-2.2 2.3q-1.7 1.7-3.6 3.5-1.8 1.7-3.5 3-1.6 1.3-1.9 1.3l-0.2-0.1q-0.8-0.2-1.8-0.2-0.8 0-1.8-0.2 0-0.9-0.3-2-0.3-1.1-0.3-1.7 0-0.6 0.6-0.6 0-0.3-0.4-1.1-0.4-0.8-0.9-1.8-0.5-1-0.9-2.1-0.4-1.2-0.4-2.4 0-1.2 1-2.3 1-1.2 2.4-2 1.4-0.9 2.7-1.5 1.3-0.6 1.9-0.8 0.5 0 0.4-0.5-0.1-0.6 0.4-0.6l2.1 0.7q-0.2 0.6-1.5 2.1-1.2 1.3-1.8 1.9 0.8-0.6 1.9-1.8 1.2-1.2 1.8-1.8 0.6 0.2 1.1 0.5 0.4 0.2 0.7 0.2l0.3-0.4q0.9 0 1.8 0.4 1.1 0.4 2 0.8 0.8 0.5 1.4 1.1 0.6 0.6 0.6 1zm-26.5 78.6q0.1-1.3 0.2-2.7-0.1 1.5-0.2 2.7zm81.5 21.9q-4.6 1.6-7 1.8-2.4 0.2-4.2 0.3-6.7 0-12.1-2.5-5.4-2.6-9.3-6.9-3.8-4.3-6-10.1-2-5.8-2-12.4 0-3.9 0.7-8 0.7-4.2 2.2-8.1 1.4-4.1 3.7-7.6 2.2-3.5 5.2-6.2-3.2 2.5-5.3 6-2.3 3.5-3.9 7.5-1.5 4-2.2 8.3-0.8 4.2-0.8 8.2 0 5 1.6 10.8 1.7 5.6 5.3 10.5 3.6 4.8 9.2 8.1 5.8 3.2 13.9 3.2 3.9 0 8.1-1.1-4.6 3-10.2 3-4.6 0-8.7-1.3-3.9-1.4-7.4-3.8-3.4-2.5-6.1-5.9-2.8-3.4-4.7-7.2l1.1-1q-2.1-4-3-8.1-0.9-4.1-0.9-8.3 0-6.1 1.7-11.8 1.8-5.6 4.7-10.6l2.9-4q0.7-1.3 2-2.6 1.5-1.4 3.1-2.6 1.7-1.3 3.5-2.2 1.9-1.1 3.6-2 4.3-2.1 8.7-3.8 4.3-1.8 10-2.6l-0.4-0.4q-11.1 1.1-18.8 5.4-7.6 4.2-12.4 10.3-4.8 6.1-7 13.5-2.2 7.2-2.2 14.1 0 3.7 0.6 7.6 0.8 3.7 2.1 7.4-3-7.2-3-15.2 0-7.9 2.6-15.7 2.7-7.8 8.3-14.4 7.2-6.6 15.7-10.1 8.5-3.6 16.5-3.6 2.5 0 5.1 0.8 2.7 0.9 4.8 2.7 2.2 1.6 3.5 4.4 1.4 2.8 1.4 6.7 0 3.3-1.5 7.9-1.6 4.7-4.7 9.2-3 4.3-7.6 7.4-4.5 3-10.5 3h-4q-4.4-1-8.1-2.2-3.6-1.3-6.9-2-0.5 1.9-0.6 3.7 0 1.7 0 3.4 0 3.5 0.7 6.8 0.9 3.3 2.6 6 1.6 2.8 4.2 4.7 2.6 1.8 6.3 2.3 2.3 0.5 4 0.6 1.7 0 2.7 0.1 1.2 0 1.7 0.4 0.6 0.2 0.6 1-1.2 0.4-2.5 0.5-1.2 0.1-2.5 0.1-4.2 0-7.6-1.3-3.3-1.4-5.7-3.2 2.7 2.7 6.6 3.9 3.8 1.1 7.5 1.1 2.1 0 4.2-0.3-0.2 0.7-0.2 0.8 0 0.7 0.6 1 0.5-0.2 1.7-0.6 1.2-0.6 2.4-1.1 1.3-0.6 2.5-1 1.2-0.5 1.7-0.5 0.6 0 1 0.3 0.5 0.1 0.5 1.3 0 1.2-0.8 2.9-0.9 1.7-2.5 3.3zm-16.6-47.5l2.6 0.5q1.4 0.2 2.4 0.2 1.2 0 2.8-0.7 1.7-0.8 3.2-2.3 1.7-1.4 2.9-3.6 1.3-2.1 1.9-4.9l0.3-0.7q-1.7 0-5.1 0.8-3.3 0.9-6.9 2.3-3.6 1.3-6.7 3.3-3.2 1.8-4.4 3.9 1.8 0.4 3.5 0.7 1.8 0.3 3.5 0.5zm-11.4 7.1l5.9 1.8q0.2-0.2 0.2-0.7 0.1-0.5 0.1-0.7l-5.6-2.1zm2.5 29.1q-0.8-1-1.7-2-0.7-0.8-1.2-1.6 1.1 2 2.9 3.6zm74.2 13.9l-10.1-4.6q-2.8-10.8-5.8-20.9-3-10.2-6.2-20.5-1.6-4.8-2.6-9.3-1.1-4.7-3.2-9.4 0.9-0.2 1.4-0.8 0.6-0.8 1.4-0.8 0.6 0 1.1 0.8 0.6 0.7 0.9 1.6 0.5 0.9 0.9 1.8 0.3 1 0.5 1.4l1.4-0.4q-0.5-1.9-0.8-3.7-0.3-1.9-0.3-3.9 0-0.7 0.1-2.1 0.3-1.6 1.5-1.6 1.8 0 3.9 3.4 2.2 3.2 4.2 8.4 2.2 5.1 4.2 11.4 2.1 6.1 3.8 11.9 1.6 5.7 2.8 10.3 1.4 4.5 1.8 6.5 3.2-4 5.6-8.3 2.4-4.3 4.6-8.7 2.4-4.4 5-8.6 2.6-4.3 6.1-8.2 0.8-0.9 2.5-3.1 1.8-2.1 3.7-4.3 2.1-2.3 4-4 1.9-1.6 3.1-1.6 0.6 0 1.1 0.8-4.6 4.6-9.1 9.1-4.5 4.6-7.8 10.3 3.4-5.5 7.9-9.9 4.5-4.6 9.3-8.8l1.1 1.5q0.7-1.1 2.7-2.4 1.9-1.4 3.2-1.4 1 0 1.4 0.6 0.5 0.6 0.5 1.6 0 0.8-0.2 2.2-0.3 1.3-0.7 1.9-0.6 0.8-1.5 1.4-3.9 3.6-7.5 6.7-3.5 3-6.6 7.5l0.8-0.9q3.2-3.8 6.5-6.8 3.3-3 7.5-5.8-2.2 3.9-5.2 6.6-2.9 2.7-5.9 6-1.5 1.7-2.5 3.8-1 1.9-2.6 3.4l-1-0.3q-2.3 4.9-4.8 10.1-2.4 5-5.3 9.9-2.9 4.8-6.5 9.1-3.5 4.4-7.9 7.6-0.4 0.7-1.6 1.3-1.1 0.5-1.7 0.9l-7.5-3.4q-0.9-2.8-1.9-5.9-1-3.1-2-5.9l-0.6 0.2 3.3 11.6q0.1 0.1 0.3 0.2 0.4 0.2 1.2 0.6 1 0.4 2.8 1.2 1.9 0.8 5.2 2.1 4.8-2.9 8.1-6.3 3.3-3.2 6.3-7.6-1.4 2.2-2.8 4.2-1.4 2-3.1 3.8-1.7 1.8-3.7 3.5-2.1 1.5-4.7 3zm6.7-9.3q5.8-6.4 9.8-13.6 4.2-7.2 7.5-14.8v-0.2q-2.1 3.6-4.1 7.4-1.9 3.7-4 7.4-2 3.6-4.3 7.2-2.3 3.5-4.9 6.6zm5.5-24.3q3.6-6.9 7.5-13.5-4.2 6.5-7.7 13.2-3.5 6.6-7.6 12.9 4.3-6 7.8-12.6zm16.6-11.9q-1.2 1.7-2.3 3.4-1 1.5-1.9 3.1 1.1-1.6 2.5-3 1.4-1.6 1.7-3.5zm-13.9 30.1q1.9-3.1 3.6-6.3 0.1-0.2 0.2-0.3-0.1 0.1-0.1 0.3-1.7 3.2-3.7 6.3zm4.4-7.8l1-1.8zm1.9-3.7q-0.5 1-1 1.9 0.5-0.9 1-1.9zm-2.1 3.8q-0.1 0.4-0.3 0.8 0.2-0.4 0.3-0.8zm-4.5 8.1q-0.3 0.2-0.4 0.5 0.1-0.3 0.4-0.5zm79.3 12.5q-4.6 1.5-7 1.8-2.4 0.1-4.2 0.2-6.7 0-12.1-2.5-5.4-2.5-9.2-6.9-3.9-4.3-6-10-2.1-5.9-2.1-12.5 0-3.9 0.8-7.9 0.7-4.2 2.1-8.2 1.5-4.1 3.7-7.6 2.2-3.4 5.2-6.2-3.1 2.5-5.3 6-2.3 3.5-3.8 7.6-1.6 3.9-2.3 8.2-0.7 4.2-0.7 8.2 0 5 1.5 10.8 1.7 5.6 5.3 10.6 3.6 4.8 9.3 8 5.7 3.2 13.9 3.2 3.8 0 8-1-4.5 3-10.2 3-4.5 0-8.6-1.4-4-1.4-7.5-3.8-3.3-2.5-6.1-5.9-2.7-3.3-4.7-7.2l1.1-0.9q-2-4.1-3-8.2-0.8-4.1-0.8-8.3 0-6.1 1.7-11.7 1.8-5.7 4.6-10.7l2.9-4q0.7-1.3 2.1-2.6 1.4-1.3 3.1-2.5 1.7-1.4 3.5-2.3 1.9-1.1 3.6-1.9 4.3-2.2 8.6-3.9 4.3-1.8 10.1-2.6l-0.5-0.4q-11 1.1-18.7 5.4-7.7 4.2-12.5 10.3-4.8 6.2-7 13.5-2.1 7.2-2.1 14.1 0 3.8 0.6 7.6 0.7 3.7 2 7.4-3-7.2-3-15.2 0-7.9 2.7-15.7 2.6-7.8 8.2-14.4 7.2-6.6 15.8-10.1 8.5-3.6 16.4-3.6 2.5 0 5.2 0.8 2.6 0.9 4.8 2.7 2.1 1.7 3.4 4.4 1.5 2.8 1.5 6.7 0 3.3-1.6 8-1.5 4.6-4.7 9.1-3 4.3-7.5 7.4-4.6 3-10.6 3h-3.9q-4.5-0.9-8.2-2.1-3.6-1.4-6.8-2.1-0.5 1.9-0.6 3.7 0 1.7 0 3.4 0 3.5 0.7 6.8 0.8 3.3 2.5 6 1.7 2.8 4.2 4.7 2.6 1.8 6.4 2.3 2.2 0.5 3.9 0.6 1.7 0 2.8 0.1 1.2 0 1.7 0.4 0.6 0.2 0.6 1.1-1.2 0.3-2.6 0.4-1.2 0.2-2.5 0.2-4.2 0-7.5-1.4-3.4-1.4-5.8-3.2 2.8 2.8 6.6 4 3.8 1 7.6 1 2 0 4.2-0.3-0.3 0.7-0.3 0.8 0 0.7 0.6 1 0.5-0.1 1.7-0.6 1.2-0.6 2.4-1.1 1.3-0.6 2.5-1 1.2-0.4 1.7-0.4 0.6 0 1.1 0.2 0.5 0.1 0.5 1.3 0 1.2-0.9 2.9-0.8 1.7-2.5 3.4zm-16.6-47.6l2.7 0.5q1.3 0.3 2.4 0.3 1.2 0 2.7-0.8 1.7-0.8 3.3-2.2 1.7-1.5 2.9-3.6 1.3-2.2 1.9-5l0.2-0.7q-1.7 0-5 0.9-3.4 0.8-7 2.2-3.6 1.4-6.7 3.3-3.1 1.8-4.3 3.9 1.8 0.4 3.5 0.8 1.8 0.2 3.4 0.4zm-11.4 7.1l5.9 1.8q0.3-0.2 0.3-0.7 0.1-0.5 0.1-0.7l-5.7-2.1zm2.6 29.1q-0.9-1-1.7-1.9-0.7-0.9-1.2-1.7 1.1 2 2.9 3.6z" />
      </svg>
    </div>
    <!-- <img src="assets/image/city-life-megalopolis-cityscape-scene-with-skyscrapers-road-illustration_18591-71533.jpg" alt=""> -->
  </div>

  <script>
    anime({
      targets: '.landing-section svg path',
      strokeDashoffset: [anime.setDashoffset, 0],
      easing: 'easeInOutSine',
      duration: 7000,
      delay: function(el, i) {
        return i * 250
      },
      direction: 'alternate',
      loop: true
    });
  </script>

  <!-- ======= Carousel Section ======= -->
  <!-- <div id="demo" class="carousel slide" data-ride="carousel">
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
  </div> -->
  <!-- ======= End Carousel Section ======= -->

  <div class="parallax-window d-flex align-items-center" data-parallax="scroll" data-image-src="assets/image/cityscape-and-urban-life-vector.jpg">
    <div class="overlay"></div>
    <section class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="search-bar">

        <form action="search.php" method="POST">
          <div class="row g-3">

            <div class="col-md-3">
              <label for="location" class="form-label">Location</label>
              <select name="location" class="form-select" id="location" aria-label="Select Location" required>
                <option value="" disabled selected>Select Location</option>
                <option value="Bashundhara">Bashundhara</option>
                <option value="Banani">Banani</option>
                <option value="Mirpur">Mirpur</option>
                <option value="Uttara">Uttara</option>
                <option value="Gulshan">Gulshan</option>
                <option value="Mohakhali">Mohakhali</option>
                <option value="Badda">Badda</option>
                <option value="Khilgaon">Khilgaon</option>
                <option value="Dhanmondi">Dhanmmondi</option>
              </select>
            </div>

            <div class="col-md-3">
              <label for="purpose" class="form-label">Purpose</label>
              <select name="purpose" class="form-select" id="purpose" aria-label="Purpose" required>
                <option value="" disabled selected>What's your purpose?</option>
                <option value="For Buy" selected>Buy</option>
                <option value="For Rent">Rent</option>
              </select>
            </div>

            <div class="col-md-3">
              <label for="type" class="form-label">Type</label>
              <select name="type" class="form-select" id="type" aria-label="Type" required>
                <option value="" disabled selected>Select type</option>
                <option value="Apartment">Apartment</option>
                <option value="Land">Land</option>
                <option value="Bachelor">Bachelor</option>
              </select>
            </div>
            
            <div class="col-md-3">
              <label for="type" class="form-label">Tier</label>
              <select name="tier" class="form-select" id="tier" aria-label="Tier" required>
                <option value="" disabled selected>Select tier</option>
                <option value="Platinum">Platinum</option>
                <option value="Gold">Gold</option>
                <option value="Diamond">Diamond</option>
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
    <div class="blog" >
      <div class="container">
        <h1 class="text-center font-weight-bold text-dark text-capitalize pt-5" data-aos="zoom-in" data-aos-delay=100>Check Out Our Services</h1>
        <div class="row mb-5">

          <div class="col-md-4 col-lg-4 col-sm-12" data-aos="fade-up" data-aos-delay=200>
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
                  <button class="btn bg-primary text-white text-left" onclick="window.location ='view_houses_rent.php'">Rent a house</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 col-sm-12" data-aos="fade-up" data-aos-delay=300>
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
                  <button class="btn bg-primary text-white text-left" onclick="window.location ='view_houses_buy.php'">Buy house or land</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 col-sm-12" data-aos="fade-up" data-aos-delay=500>
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
                  <button class="btn bg-primary text-white text-left" onclick="window.location ='view_lands.php'">Sell house or land</button>
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
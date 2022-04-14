<?php
include 'connection.php';
session_start();
$userid = $_SESSION['userid'];
$sql = "SELECT * FROM user WHERE id='$userid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$username=$row['first_name'];
$last_name = $row['last_name'];
$user_email=$row['email'];
$user_phone=$row['contact'];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/user_profile.css">

  <title>User | Profile</title>
  <style>
    .notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}
    body {
      
      background-image: url('assets/image/up_bg.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo"><img src="assets/image/logo1c.jpeg" alt="Hometrieve"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a class="nav-link scrollto active" href="#team"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="">Rent Home</a></li>
              <li><a href="">Buy Houses</a></li>
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
          <li><a class="nav-link scrollto" href="#">Contact</a></li>
          <li><a class="nav-link scrollto" href="#">Register</a></li>

          <?php

          if (empty($_SESSION['logged_in'])) echo '<li><a class="nav-link scrollto" href="login.php">Login</a></li>';
          else {
            echo '<li class="dropdown"><span><strong>Profile</strong></span><i class="bi bi-chevron-down"></i>
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
  <br><br><br><br>
  <div class="container">

    <h2><strong>Welcome <?php echo $username; ?>!</strong></h2>
    <a class="button1"  href="logout.php" role="button">Log Out</a>


    <div class="row ">

      <div class="col-md-5 col-lg-5 col-sm-12">
        <br>
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#about">About</a></li>
          <li><a data-toggle="tab" href="#timeline">Timeline</a></li>
        </ul>
        <div class="tab-content">
          <div id="about" class="tab-pane fade in active">
            <h3>About</h3>
            <br>
            <div class="row">
              <div class="col-md-4">
                <label>User ID</label>
              </div>
              <div class="col-md-6">
                <p><?php echo $userid; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Name</label>
              </div>
              <div class="col-md-6">
                <p><?php echo $username." ".$last_name; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Email</label>
              </div>
              <div class="col-md-6">
                <p><?php echo $user_email; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Phone</label>
              </div>
              <div class="col-md-6">
                <p><?php echo $user_phone; ?></p>
              </div>
            </div>
          </div>
          <div id="timeline" class="tab-pane fade">
            <h3>Timeline</h3>
            <br>
            <div class="row">
              <div class="col-md-4">
                <label>House Status</label>
              </div>
              <div class="col-md-6">
                <p>Active <a href="favourite_list.php">(View Details)</a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Land Status</label>
              </div>
              <div class="col-md-6">
                <p>Active <a href="favourite_list.php">(View Details)</a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Favorite List</label>
              </div>
              <div class="col-md-6">
                <p><a href="favourite_list.php">View</a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Compare List</label>
              </div>
              <div class="col-md-6">
                <p><a href="compare_list.php">View</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <br>
        <a href="view_inbox.php" class="notification"><span>Inbox</span><span class="badge"></span></a>
        <br><br>
        <a class="button1" href="donor_login.php" role="button">Edit Profile</a>
      </div>
      <div class="col-md-5 col-lg-5 col-sm-12">
        <div class="row pt-5">

          <button class="button2" role="button" onclick="window.location ='view_houses.php'"><i class="fa fa-search"></i> Search a house for rent now!</button>
        </div>
        <div class="row pt-5">
          <button class="button2" onclick="window.location ='add_houses.php'" role="button"><i class="fa fa-home"> Add House + </i> </button>
          <br>
          <button class="button2" onclick="window.location ='add_lands.php'" role="button"><i class="fa fa-tree"> Add Land + </i></button>

        </div>


      </div>

    </div>


  </div>
</body>

</html>
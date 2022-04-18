<?php
include 'connection.php';
session_start();
if($_SESSION['logged_in']==false){
  header('Location:login.php');
}

$userid = $_SESSION['userid'];

$sql = "SELECT * FROM user WHERE id='$userid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$username=$row['first_name'];
$last_name = $row['last_name'];
$user_email=$row['email'];
$user_phone=$row['contact'];

$sql = "SELECT COUNT(*) 
FROM contact_owner
WHERE onwer_id='$userid' AND status='Active'";
$result = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_assoc($result);
$dbbadge= $row1['COUNT(*)'];

$sql = "SELECT COUNT(*) 
FROM contact_owner
WHERE user_id='$userid' AND reply_status='Active'";
$result = mysqli_query($conn, $sql);
$row1 = mysqli_fetch_assoc($result);
$dbbadge1= $row1['COUNT(*)'];



?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  
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
    .badge{
    display: inline-block;
    min-width: 10px;
    padding: 5px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #f50707;
    border-radius: 10px;
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
          <li><a class="nav-link scrollto" href="contact_us.php">Contact</a></li>
          

          <?php

          if (empty($_SESSION['logged_in'])) echo '<li><a class="nav-link scrollto" href="login.php">Login</a></li>';
          else {
            echo '<li class="dropdown"><a class="nav-link scrollto active" href="#team"><span>Profile</span><i class="bi bi-chevron-down"></i></a>
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
                <label>Favourite List (House)</label>
              </div>
              <div class="col-md-6">
                <p><a href="favourite_list.php">View</a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Favourite List (Land)</label>
              </div>
              <div class="col-md-6">
                <p><a href="favourite_list.php">View</a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Compare List (House)</label>
              </div>
              <div class="col-md-6">
                <p><a href="compare_list_house.php">View</a></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Compare List (Land)</label>
              </div>
              <div class="col-md-6">
                <p><a href="compare_list_land.php">View</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <br>
        <a class="button1" href="edit_profile.php" role="button">Edit Profile</a>
        <br><br>
        <a class="button1" href="view_inbox.php"  ><span>Inbox  </span><span class="badge"><?php echo $dbbadge; ?></span></a>
        <br><br>
        <a class="button1" href="view_replies.php"  ><span>Replies  </span><span class="badge"><?php echo $dbbadge1; ?></span></a>
        
        
      </div>
      <div class="col-md-5 col-lg-5 col-sm-12">
        <div class="row pt-5">

          <button class="button2" role="button" onclick="window.location ='view_houses_rent.php'"><i class="fa fa-search"></i> Search a house for rent now!</button>
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
<?php
// Create database connection
include 'connection.php';
session_start();
if ($_SESSION['logged_in'] == false) {
  header('Location:login.php');
}

$userid = $_SESSION['userid'];
$username = $_SESSION['username'];


if (isset($_POST['name_edit'])) {
  $dbname = strip_tags($_POST['fname']);

  $sql = "UPDATE user
SET first_name='$dbname'
WHERE id='$userid' ";
  // execute query
  mysqli_query($conn, $sql);

  header("Location: edit_profile.php");
}
if (isset($_POST['lname_edit'])) {
  $dbname = strip_tags($_POST['lname']);

  $sql = "UPDATE user
SET last_name='$dbname'
WHERE id='$userid' ";
  // execute query
  mysqli_query($conn, $sql);

  header("Location: edit_profile.php");
}


if (isset($_POST['pass_edit'])) {
  $dbpass = strip_tags($_POST['pass']);
  $sql = "UPDATE user
  SET password='$dbpass'
  WHERE id='$userid' ";
  // execute query
  mysqli_query($conn, $sql);

  header("Location: edit_profile.php");
}



$result = mysqli_query($conn, "SELECT * FROM user WHERE id='$userid'");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Profile</title>
  <meta content="We aim to achieve a convenient way for renting accommodation at best rates In Bangladesh." name="keywords">

  <!-- Favicons -->
  <link href="assets/image/logo1c.jpeg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link href="css/style.css" rel="stylesheet">


  <!-- Bootstrap Grid System-->
  <link rel="stylesheet" href="CSS/bootstrap-grid.css">


  <style>
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
  <br>
  <button class="btn bg-primary text-white" onclick="window.location ='user_profile.php?'">Back To Profile</button>

  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <h1 class="text-center text-dark text-capitalize pt-5">Edit Profile</h1>
        <hr class="w-25 pt-5">
        <div class="container-fluid">
          <div id="content" class="row mb-5">
            <div class="col-md-12">
              <?php

              while ($row = mysqli_fetch_array($result)) {
                echo "<form method='POST' action='edit_profile.php' >";
                echo "<h5>Name: " . $row['first_name'] . "</h5>";
                echo "<input name='fname' class='form-control' placeholder='Enter New Name' type='text'>";
                echo "<br>";
                echo "<button type='submit' name='name_edit' class='btn btn-info'>Set Name</button>";
                echo "<br><br>";
                echo "<h5>Name: " . $row['last_name'] . "</h5>";
                echo "<input name='lname' class='form-control' placeholder='Enter New Name' type='text'>";
                echo "<br>";
                echo "<button type='submit' name='lname_edit' class='btn btn-info'>Set Name</button>";
                echo "<br><br>";
                echo "<h5>Password: " . $row['password'] . " </h4>";
                echo "<input name='pass' class='form-control' placeholder='Enter New Password' type='password'>";
                echo "<br>";
                echo "<button type='submit' name='pass_edit' class='btn btn-info'>Set Password</button>";
                echo "<br><br>";

                echo "</form>";
              }

              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
</body>

</html>
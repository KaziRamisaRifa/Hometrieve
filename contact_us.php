<?php
session_start();
if($_SESSION['logged_in']==true){
  $user_id  = $_SESSION['userid'];
  $username = $_SESSION['username'];
}

include 'connection.php';
  if (isset($_POST['contact_us'])) 
  {
      // Set variables to represent data from database
        $dbUname = strip_tags($_POST['name']);
        $dbEmail = strip_tags($_POST['email']);
        $dbSub = strip_tags($_POST['subject']);
        $dbMess = strip_tags($_POST['message']);
        $sql = "INSERT INTO contact_us (name, email, subject, message)
        VALUES ('$dbUname', '$dbEmail', '$dbSub', '$dbMess');";
        mysqli_query($conn, $sql);
        echo "<script>
        alert('Thank you For Your Response!');
        window.location.href='index.php';
        </script>";
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">
        
        <link href="assets/image/logo1c.jpeg" rel="icon">

          <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/contact_us.css">
        <link href="css/style.css" rel="stylesheet">
        <style>
    body
    {
      background-image: url('assets/image/fbbg.jpg');
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
          <li class="dropdown"><a href="#team"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="view_houses_rent.php">Rent Home</a></li>
              <li><a href="view_houses_buy.php">Buy Houses</a></li>
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
          <li><a class="nav-link scrollto active" href="contact_us.php">Contact</a></li>
          

          <?php

          if (empty($_SESSION['logged_in'])) echo '<li><a class="nav-link scrollto" href="login.php">Login</a></li>';
          else {
            echo '<li class="dropdown"><a href="#team"><span>Profile</span><i class="bi bi-chevron-down"></i></a>
            <ul style="text-align:center;">
                <li><span>Welcome</span></li>
                <li><span>' . $_SESSION['user_first_name'] . '</span></li>
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

        <section id="contact">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold text-dark text-capitalize">Contact Us</h2>
            <hr class="w-25">
            <div class="row" >
                <div class="col-lg-4 col-md-4 ml-auto">
                    <div class="card-deck">
                        <div class="card ">
                            <div class="text-center">
                                <i class="text-white fa fa-map-marker fa-3x"></i>
                                <p class="text-white" style="font-size:140%;">18/A, Banani, Dhaka-1213</p>
                                <i class="text-white fa fa-phone fa-3x"></i>
                                <p class="text-white" style="font-size:140%;">+8801953634598</p>
                                <i class=" text-white fa fa-envelope fa-3x"></i>
                                <p class="text-white" style="font-size:140%;">hometrieve@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mr-auto">
                    <form id="feed" class="p-5 grey-text " method="POST" action="contact_us.php">
                        <div class="md-form form-sm"> Name <i class="fa fa-user prefix"> </i>
                            <input type="text" name="name" id="form3" class="form-control form-control-sm" required="">
                        </div>
                        <br>
                        <div class="md-form form-sm"> Email <i class="fa fa-envelope prefix"></i>
                            <input type="email" name="email" id="form2" class="form-control form-control-sm" required="">

                        </div>
                        <br>
                        <div class="md-form form-sm"> Subject <i class="fa fa-pencil prefix"></i>
                            <input type="text" name="subject" id="form2" class="form-control form-control-sm" required="">

                        </div>
                        <br>
                        <div class="md-form form-sm"> Message <i class="fa fa-commenting prefix"></i>
                            <textarea type="text" name="message" id="form8" class="md-textarea form-control form-control-sm" rows="4" required=""></textarea>

                        </div>
                        <br>
                        <div class="text-center mt-4">
                            <button class="button-75" role="button" name="contact_us" form="feed"> <i class="fa fa-paper-plane-o ml-1"> Send</i></button>
                         </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>

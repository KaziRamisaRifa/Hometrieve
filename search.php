<?php
session_start();
include 'connection.php';

$location = '';
$purpose = '';
$type = '';
$userid = '';

if (!empty($_POST['location']) && !empty($_POST['purpose']) && !empty($_POST['type'])) {
  $_SESSION['search_location'] = $_POST['location'];
  $_SESSION['search_purpose'] = $_POST['purpose'];
  $_SESSION['search_type'] = $_POST['type'];
  $_SESSION['search_tier'] = $_POST['tier'];
} else {
  # code...
}
if(!empty($_SESSION['userid'])){
  $userid = $_SESSION['userid'];
}


if (isset($_POST['favourite'])) {
  $dbid = strip_tags($_POST['hid']);
  $sql = "INSERT INTO favorites(user_id,house_id)
          VALUES ('$userid','$dbid')";
  mysqli_query($conn, $sql);
  header("Location: search.php");
}

if (isset($_POST['unfavourite'])) {
  $dbid = strip_tags($_POST['hid']);
  $sql = "DELETE FROM favorites WHERE house_id= '$dbid' AND user_id='$userid' ";
  mysqli_query($conn, $sql);
  header("Location: search.php");
}

if (isset($_POST['compare'])) {
  $dbid = strip_tags($_POST['hid']);
  $sql = "INSERT INTO compare_list(user_id,house_id)
          VALUES ('$userid','$dbid')";
  mysqli_query($conn, $sql);
  header("Location: search.php");
}

if (isset($_POST['uncompare'])) {
  $dbid = strip_tags($_POST['hid']);
  $sql = "DELETE FROM compare_list WHERE house_id= '$dbid' AND user_id='$userid' ";
  mysqli_query($conn, $sql);
  header("Location: search.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <title>View Houses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
  <style>
    body {
      background-image: url('assets/image/ambulancesigncover.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    .list-group img {
      height: 170px;
      width: 200px
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
          <li class="dropdown"><a class="nav-link scrollto active" href="#team"><span>Houses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="view_houses_rent.php">Rent House</a></li>
              <li><a href="view_houses_buy.php">Buy House</a></li>
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
            echo '<li class="dropdown"><a href="#team"><span>Profile</span><i class="bi bi-chevron-down"></i></a>
            <ul style="text-align:center;">
                <li><span>Welcome</span></li>
                <li><span>' . $_SESSION['username'] . '</span></li>
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
    <div class="row mb-5">
      <div class="col-lg-8 mx-auto">
        <ul class="list-group shadow">
          <?php

          $location = $_SESSION['search_location'];
          $purpose = $_SESSION['search_purpose'];
          $type = $_SESSION['search_type'];
          $tier = $_SESSION['search_tier'];

          $sql = "SELECT * FROM houses WHERE location='$location' AND purpose='$purpose' AND type='$type';";
          $result = $conn->query($sql);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <li class="list-group-item">
              <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                <div class="media-body order-2 order-lg-1">
                  <h5><strong><?php echo $row['location']; ?> | <?php echo $row['area_size']; ?> sqft | <?php echo $row['purpose']; ?></strong></h5>
                  <p class="text-muted"><i class="fa fa-bed"> </i> <?php echo $row['beds']; ?> Beds | <i class="fa fa-bath"></i> <?php echo $row['baths']; ?> Baths | <i class="fa fa-trello"> </i> <?php echo $row['balcony']; ?> Balcony | <i class="fa fa-arrow-up"></i> <?php echo $row['floor_no']; ?> Floor No.</p>
                  <div class="d-flex align-items-center justify-content-between mt-1">
                    <h6><strong><i class="fa fa-money" aria-hidden="true"></i> <?php echo $row['price']; ?> BDT</strong></h6>
                    <?php
                    $dbid = $row['id'];
                    ?>
                    <p><a href="view_house_details.php?id=<?php echo $dbid ?>">View Details---></a></p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-1">
                    <h6><strong><i class="fa fa-heart" aria-hidden="true"></i> 4</strong></h6>
                  </div>
                  <form method="POST">
                    <input name="hid" type="hidden" value="<?php echo $row['id']; ?>">
                    <div class="row">
                      <?php
                      $h_id = $row['id'];
                      $sql = "SELECT house_id FROM favorites where user_id='$userid' AND house_id='$h_id'";
                      $result1 = mysqli_query($conn, $sql);
                      $row1 = mysqli_fetch_array($result1);
                      if ($row1 == NULL) {
                      ?>
                        <div class="col-md-6">
                          <button type="submit" name="favourite" class="btn btn-success btn-block"> Add to favourite </button>

                        </div>
                      <?php } else {
                      ?>
                        <div class="col-md-6">
                          <button type="submit" name="unfavourite" class="btn btn-success btn-block"><i class="fa fa-heart" aria-hidden="true"></i> Favourite </button>
                        </div>

                      <?php } ?>
                      <?php
                      $h_id = $row['id'];
                      $sql = "SELECT house_id FROM compare_list where user_id='$userid' AND house_id='$h_id'";
                      $result1 = mysqli_query($conn, $sql);
                      $row1 = mysqli_fetch_array($result1);
                      if ($row1 == NULL) {
                      ?>
                        <div class="col-md-6">
                          <button type="submit" name="compare" class="btn btn-danger btn-block"> Add to compare </button>
                        </div>
                      <?php } else {
                      ?>
                        <div class="col-md-6">
                          <button type="submit" name="uncompare" class="btn btn-danger btn-block"> <i class="fa fa-check-square-o" aria-hidden="true"></i> Compared already </button>
                        </div>
                      <?php } ?>
                    </div>
                  </form>
                </div>

                <?php
                $dbid = $row['id'];
                $sql = "SELECT image
                            FROM house_image
                            WHERE house_id='$dbid'";
                $result1 = mysqli_query($conn, $sql);
                $rows_img = mysqli_fetch_array($result1);
                if (!empty($rows_img)) {
                  $img_src = $rows_img['image'];
                }
                ?>

                <img src="assets/uploads/<?php echo $rows_img['image']; ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>

</body>

</html>
<?php
include 'connection.php';
session_start();
$userid = $_SESSION['userid'];

//$sql = "SELECT * FROM compare_list WHERE user_id='$userid'";
//$result = mysqli_query($conn, $sql);

$sql = "SELECT house_id FROM compare_list WHERE user_id='$userid' ORDER BY id DESC LIMIT 2 ";
$result = mysqli_query($conn, $sql);

    

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>View Houses</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body
        {
            background-image: url('assets/image/ambulancesigncover.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        img {
                 height: 170px;
                 width: 200px
            }
    </style>
   </head>
   
  

  
<body>
    <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a class="nav-link scrollto active" href="#team"><span>Houses</span> <i class="bi bi-chevron-down"></i></a>
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

          if (empty($_SESSION['logged_in'])) echo '<li><a href="login.php">Login</a></li>';
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
   <h1 class="text-center text-dark text-capitalize pt-5">Compare List</h1>
                <hr class="w-25 pt-3">
                

   <div class="container">
    <div class="row mb-5">

    <?php
               while($row = mysqli_fetch_assoc($result)){
                $house_id = $row['house_id'];
                $house_sql = "SELECT * FROM houses WHERE id='$house_id'";
                $house_result = mysqli_query($conn, $house_sql);
                while ($house = mysqli_fetch_assoc($house_result)) { 
                    
            ?>


        <div class="col-lg-6 col-lg-6 mx-auto">
        <div class="card-group">
            <div class="card bg-light">
                <div class="card-body text-center">
                
                <h6><i class="fa fa-user"></i> Owner Name: <?php echo $house['owner_name']; ?></h6>
                            <h6><i class="fa fa-envelope"></i> Owner Email: <?php echo $house['owner_email']; ?></h6>
                            <h6><i class="fa fa-phone"></i> Owner Contact No: <?php echo $house['owner_contact']; ?></h6>
                            <h6><i class="fa fa-check-square-o"></i> Purpose: <?php echo $house['purpose']; ?></h6>
                            <h6><i class="fa fa-home"></i> Type: <?php echo $house['type']; ?></h6>
                            <h6><i class="fa fa-map-marker"></i> Location: <?php echo $house['location']; ?></h6>
                            <h6><i class="fa fa-location-arrow"></i> Address: <?php echo $house['address']; ?></h6>
                            <h6><i class="fa fa-th-large"></i> Area Size: <?php echo $house['area_size']; ?> sqft</h6>
                            <h6><i class="fa fa-money"></i> Price: <?php echo $house['price']; ?> BDT</h6>
                            <h6><i class="fa fa-arrow-up"></i> Floor No: <?php echo $house['floor_no']; ?></h6>
                            <h6><i class="fa fa-bed"></i> Beds: <?php echo $house['beds']; ?></h6>
                            <h6><i class="fa fa-bath"></i> Baths: <?php echo $house['baths']; ?></h6>
                            <h6><i class="fa fa-trello"></i> Balcony: <?php echo $house['balcony']; ?></h6>
                            <h6><i class="fa fa-pencil"></i> Description: <?php echo $house['description']; ?></h6>
                            

                            <h6><i class="fa fa-picture-o"></i> Photos:</h6>
                            <?php
                            $dbid = $house['id'];
                            $sql = "SELECT image
                            FROM house_image
                            WHERE house_id='$dbid'";
                            $result1 = mysqli_query($conn,$sql);
                            $rows_img = mysqli_fetch_array($result1);
                            $img_src = $rows_img['image'];       
                        ?>
                        
                            <img src="assets/uploads/<?php echo $rows_img['image']; ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <button type="submit" onclick="window.location = 'contact_owner.php?id=<?php echo $dbid ?>';" class="btn btn-info btn-block"> Contact  </button>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        </div>
        <?php } }?>
    </div>
</div>

</body>
</html>
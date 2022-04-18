<?php
include 'connection.php';
session_start();
$userid = $_SESSION['userid'];

$sql = "SELECT * FROM favorites WHERE user_id='$userid'";
$result = mysqli_query($conn, $sql);

if (isset($_POST['unfavourite'])) 
    {
        $dbid = strip_tags($_POST['hid']);
        $sql = "DELETE FROM favorites WHERE house_id= '$dbid'";
        mysqli_query($conn, $sql);
        header("Location: favourite_list.php");
    }
    


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
   <h1 class="text-center text-dark text-capitalize pt-5">Favourite List</h1>
                <hr class="w-25 pt-3">
                

   <div class="container">
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto">
            <ul class="list-group shadow">
            <?php
            if(mysqli_num_rows($result)!= 0){
            while($row = mysqli_fetch_assoc($result)){
                $house_id = $row['house_id'];
                $land_id = $row['land_id'];
                $house_sql = "SELECT * FROM houses WHERE id='$house_id'";
                $land_sql = "SELECT * FROM lands WHERE id='$land_id'";
            
                $house_result = mysqli_query($conn, $house_sql);
                $land_result = mysqli_query($conn, $land_sql);
            
                
            
            
                while ($house = mysqli_fetch_assoc($house_result)) {
            ?>
                <li class="list-group-item">
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                            <h5><strong><?php echo $house['location']; ?> | <?php echo $house['area_size']; ?> sqft | <?php echo $house['purpose']; ?></strong></h5>
                            <p class="text-muted"><i class="fa fa-bed">  </i> <?php echo $house['beds']; ?> Beds | <i class="fa fa-bath"></i> <?php echo $house['baths']; ?> Baths | <i class="fa fa-trello">  </i> <?php echo $house['balcony']; ?> Balcony | <i class="fa fa-arrow-up"></i> <?php echo $house['floor_no']; ?> Floor No.</p>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6><strong><i class="fa fa-money" aria-hidden="true"></i> <?php echo $house['price']; ?> BDT</strong></h6>
                                <p><a href="favourite_list.php">View Details---></a></p>
                            </div>
                            <form method="POST">
                                <input name="hid" type="hidden" value="<?php echo $house['id']; ?>">
                                <div class="row">
                                                                     
                                        <div class="col-md-6">
                                            <button type="submit" name="unfavourite" class="btn btn-success btn-block">  Remove favourite </button>
                                        </div>             
                                    <div class="col-md-6">
                                        <button type="submit" name="compare" class="btn btn-danger btn-block"> Add to compare  </button>
                                    </div>
                                </div>
                             </form>
                        </div>
                        
                        <?php
                            $dbid = $house['id'];
                            $sql = "SELECT image
                            FROM house_image
                            WHERE house_id='$dbid'";
                            $result1 = mysqli_query($conn,$sql);
                            $rows_img = mysqli_fetch_array($result1);
                            if(!empty($rows_img)){
                                $img_src = $rows_img['image']; 
                            }     
                        ?>
                        
                            <img src="assets/uploads/<?php echo $rows_img['image']; ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2"> 
                    </div> 
                </li> 
            <?php }}

                }
            else{?>


            </ul>
            <h1 class="text-center text-dark text-capitalize pt-5">Empty!</h1>
            <?php } ?>
        </div>
    </div>
</div>



</body>
</html>
<?php
  // Create database connection
  include 'connection.php';

    $sql = "SELECT * FROM lands";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>View Lands</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
   <h1 class="text-center text-dark text-capitalize pt-5">Lands List</h1>
                <hr class="w-25 pt-3">
   <div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <ul class="list-group shadow">
            <?php
                while ($row = mysqli_fetch_array($result)) {
            ?>
                <li class="list-group-item">
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                            <h5><strong><?php echo $row['location']; ?> | <?php echo $row['area_size']; ?> sqft | For Sell</strong></h5>
                            <p class="text-muted"><i class="fa fa-location-arrow"></i> Address: <?php echo $row['address']; ?></p>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6><strong><i class="fa fa-money" aria-hidden="true"></i> <?php echo $row['price']; ?> BDT</strong></h6>
                                <p><a href="favourite_list.php">View Details---></a></p>
                            </div>
                        </div>
                        <img src="assets/image/signup_bg.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                    </div> 
                </li>
            <?php }?> 
            </ul>
        </div>
    </div>
</div>
  </body>
</html>
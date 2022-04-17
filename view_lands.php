<?php
  // Create database connection
  include 'connection.php';

    $sql = "SELECT * FROM lands";
    $result = mysqli_query($conn, $sql);

    if (isset($_POST['favourite'])) {
        $dbid = strip_tags($_POST['lid']);
        $sql = "INSERT INTO favorites(user_id,land_id)
              VALUES ('$userid','$dbid')";
        mysqli_query($conn, $sql);
        header("Location: view_lands.php");
      }
      
      if (isset($_POST['unfavourite'])) {
        $dbid = strip_tags($_POST['lid']);
        $sql = "DELETE FROM favorites WHERE land_id= '$dbid'";
        mysqli_query($conn, $sql);
        header("Location: view_lands.php");
      }
      
      if (isset($_POST['delete'])) {
        $dbid = strip_tags($_POST['hid']);
        $sql = "DELETE FROM approval_land WHERE id= '$dbid'";
        mysqli_query($conn, $sql);
        header("Location: view_houses.php");
      }

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
    <link href="css/style.css" rel="stylesheet"><style>
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
    <div class="row mb-5">
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
                                <?php
                                $dbid = $row['id'];
                                ?>
                                <p><a href="favourite_list.php?id=<?php echo $dbid ?>">View Details---></a></p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6><strong><i class="fa fa-heart" aria-hidden="true"></i> 4</strong></h6>
                            </div>
                            <form method="POST">
                                <input name="lid" type="hidden" value="<?php echo $row['id']; ?>">
                                <div class="row">
                                <?php
                                $l_id = $row['id'];
                                $sql = "SELECT land_id FROM favorites where user_id='$userid' AND land_id='$l_id'";
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
                                <div class="col-md-6">
                                    <button type="submit" name="compare" class="btn btn-danger btn-block"> Add to compare </button>
                                </div>
                                </div>
                            </form>
                        </div>
                        <?php
                            $dbid = $row['id'];
                            $sql = "SELECT image
                            FROM land_image
                            WHERE land_id='$dbid'";
                            $result1 = mysqli_query($conn,$sql);
                            $rows_img = mysqli_fetch_array($result1);
                            if (!empty($rows_img)) {
                                $img_src = $rows_img['image'];
                              }      
                        ?>
                        <img src="assets/uploads/<?php echo $rows_img['image']; ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                    </div> 
                </li>
            <?php }?> 
            </ul>
        </div>
    </div>
</div>
  </body>
</html>
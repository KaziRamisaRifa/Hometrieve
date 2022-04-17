<?php
// Create database connection
include 'connection.php';

$sql = "SELECT * FROM approval_land";
$result = mysqli_query($conn, $sql);



if (isset($_POST['approve'])) {
    $dbid = strip_tags($_POST['hid']);
    $sql = "INSERT INTO lands
        SELECT * FROM approval_land
        WHERE id= '$dbid'";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO land_image
        SELECT * FROM approval_land_image
        WHERE land_id= '$dbid'";
    mysqli_query($conn, $sql);

    $sql = "DELETE FROM approval_land WHERE id= '$dbid'";
    mysqli_query($conn, $sql);

    header("Location: land_approval_list.php");
}

if (isset($_POST['delete'])) {
    $dbid = strip_tags($_POST['hid']);

    $sql = "DELETE FROM approval_land WHERE id= '$dbid'";
    mysqli_query($conn, $sql);
    header("Location: land_approval_list.php");
}



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <title>Land Approval List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
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
    <h1 class="text-center text-dark text-capitalize pt-5">Lands Approval List</h1>
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
                                    <h5><strong><i class="fa fa-user"></i> <?php echo $row['owner_name']; ?> | <i class="fa fa-phone"></i> <?php echo $row['owner_contact']; ?></strong></h5>
                                    <p class="text-muted"><i class="fa fa-envelope"> </i> <?php echo $row['owner_email']; ?> <br> <i class="fa fa-location-arrow"> </i> <?php echo $row['address']; ?></p>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6><strong><i class="fa fa-money" aria-hidden="true"></i> <?php echo $row['price']; ?> BDT</strong></h6>
                                        <p><a href="view_land_details_admin.php?id=<?php echo $row['id']; ?>">View Details---></a></p>
                                    </div>
                                    <form method="POST">
                                        <input name="hid" type="hidden" value="<?php echo $row['id']; ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="submit" name="approve" class="btn btn-success btn-block"> Approve </button>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" name="delete" class="btn btn-danger btn-block"> Delete </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <?php
                                $dbid = $row['id'];
                                $sql = "SELECT image
                            FROM approval_land_image
                            WHERE land_id='$dbid'";
                                $result1 = mysqli_query($conn, $sql);
                                $rows_img = mysqli_fetch_array($result1);
                                $img_src = $rows_img['image'];
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
<?php
include 'connection.php';

//session_start();
//if($_SESSION['logged_in']==false){
 // header('Location:admin_login.php');
//}

$h_id =  $_GET['id'];
//$userid  = $_SESSION['userid'];

    $sql = "SELECT *
    FROM approval_house
    WHERE id='$h_id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result)


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>View Details</title>
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
                height: 220px;
                 width: 250px
            }
    </style>
   </head>
   
  

  
<body>
   <h1 class="text-center text-dark text-capitalize pt-5">Details House View</h1>
                <hr class="w-25 pt-3">
                

   <div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <ul class="list-group shadow">
                <li class="list-group-item">
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                        
                            <h6><i class="fa fa-user"></i> Owner Name: <?php echo $row['owner_name']; ?></h6>
                            <h6><i class="fa fa-envelope"></i> Owner Email: <?php echo $row['owner_email']; ?></h6>
                            <h6><i class="fa fa-phone"></i> Owner Contact No: <?php echo $row['owner_contact']; ?></h6>
                            <h6><i class="fa fa-check-square-o"></i> Purpose: <?php echo $row['purpose']; ?></h6>
                            <h6><i class="fa fa-home"></i> Type: <?php echo $row['type']; ?></h6>
                            <h6><i class="fa fa-map-marker"></i> Location: <?php echo $row['location']; ?></h6>
                            <h6><i class="fa fa-location-arrow"></i> Address: <?php echo $row['address']; ?></h6>
                            <h6><i class="fa fa-th-large"></i> Area Size: <?php echo $row['area_size']; ?> sqft</h6>
                            <h6><i class="fa fa-money"></i> Price: <?php echo $row['price']; ?> BDT</h6>
                            <h6><i class="fa fa-arrow-up"></i> Floor No: <?php echo $row['floor_no']; ?></h6>
                            <h6><i class="fa fa-bed"></i> Beds: <?php echo $row['beds']; ?></h6>
                            <h6><i class="fa fa-bath"></i> Baths: <?php echo $row['baths']; ?></h6>
                            <h6><i class="fa fa-trello"></i> Balcony: <?php echo $row['balcony']; ?></h6>
                            <h6><i class="fa fa-pencil"></i> Description: <?php echo $row['description']; ?></h6>
                            

                            <h6><i class="fa fa-picture-o"></i> Photos:</h6>
                        <?php
                        
                            $sql = "SELECT image
                            FROM approval_house_image
                            WHERE house_id='$h_id'";
                            $result1 = mysqli_query($conn,$sql);
                            while($rows_img = mysqli_fetch_array($result1))
                            {                               
                                $img_src = $rows_img['image'];       
                        ?>
                        
                            <img src="assets/uploads/<?php echo $rows_img['image']; ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        
                        <?php
                            }
                        ?>
                        </div>
                        
                    </div> 
                </li> 
            </ul>
        </div>
    </div>
</div>

</body>
</html>
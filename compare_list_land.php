<?php
include 'connection.php';
session_start();
$userid = $_SESSION['userid'];

//$sql = "SELECT * FROM compare_list WHERE user_id='$userid'";
//$result = mysqli_query($conn, $sql);

$sql = "SELECT land_id FROM compare_list WHERE user_id='$userid' ORDER BY id DESC LIMIT 2 ";
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
   <h1 class="text-center text-dark text-capitalize pt-5">Compare List</h1>
                <hr class="w-25 pt-3">
                

   <div class="container">
    <div class="row mb-5">

    <?php
               while($row = mysqli_fetch_assoc($result)){
                $land_id = $row['land_id'];
                
                $land_sql = "SELECT * FROM lands WHERE id='$land_id'";
            
                
                $land_result = mysqli_query($conn, $land_sql);
                while ($land = mysqli_fetch_assoc($land_result)) {
            
                
            
               
                    
            ?>


        <div class="col-lg-6 col-lg-6 mx-auto">
        <div class="card-group">
            <div class="card bg-light">
                <div class="card-body text-center">
                
                <h6><i class="fa fa-user"></i> Owner Name: <?php echo $land['owner_name']; ?></h6>
                            <h6><i class="fa fa-envelope"></i> Owner Email: <?php echo $land['owner_email']; ?></h6>
                            <h6><i class="fa fa-phone"></i> Owner Contact No: <?php echo $land['owner_contact']; ?></h6>
                            <h6><i class="fa fa-map-marker"></i> Location: <?php echo $land['location']; ?></h6>
                            <h6><i class="fa fa-location-arrow"></i> Address: <?php echo $land['address']; ?></h6>
                            <h6><i class="fa fa-th-large"></i> Area Size: <?php echo $land['area_size']; ?> sqft</h6>
                            <h6><i class="fa fa-money"></i> Price: <?php echo $house['price']; ?> BDT</h6>
                            <h6><i class="fa fa-pencil"></i> Description: <?php echo $house['description']; ?></h6>
                            

                            <h6><i class="fa fa-picture-o"></i> Photos:</h6>
                            <?php
                            $dbid = $land['id'];
                            $sql = "SELECT image
                            FROM land_image
                            WHERE land_id='$dbid'";
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
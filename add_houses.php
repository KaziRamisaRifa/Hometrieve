<?php
session_start();
if($_SESSION['logged_in']==false){
  header('Location:login.php');
}
$user_id  = $_SESSION['userid'];
$username = $_SESSION['username'];
include 'connection.php';

if (isset($_POST['add_house'])) 
{
    $dbname = strip_tags($_POST['ownername']);
    $dbemail = strip_tags($_POST['email']);
    $dbcontact = strip_tags($_POST['contact']);
    $dbpurpose = strip_tags($_POST['purpose']);
    $dbtype = strip_tags($_POST['type']);
    $dblocation = strip_tags($_POST['location']);
    $dbaddress = strip_tags($_POST['address']);
    $dbareasize = strip_tags($_POST['areasize']);
    $dbprice = strip_tags($_POST['price']);
    $dbfloor = strip_tags($_POST['floor']);
    $dbbeds = strip_tags($_POST['beds']);
    $dbbaths = strip_tags($_POST['baths']);
    $dbbalcony = strip_tags($_POST['balcony']);
    $dbdescription = strip_tags($_POST['description']);

    if($dbprice<=50000)
    {
      $dbtier='Platinum';
    }
    else if($dbprice>50000 && $$dbprice<=150000)
    {
      $dbtier='Gold';
    }
    else if($dbprice>150000)
    {
      $dbtier='Diamond';
    }

    $sql="INSERT INTO approval_house(user_id, owner_name, owner_email, owner_contact, purpose, type, location, address, area_size, price, floor_no,	beds,	baths, balcony,	description,tier)
    VALUES ('$user_id', '$dbname','$dbemail','$dbcontact','$dbpurpose', '$dbtype', '$dblocation','$dbaddress','$dbareasize','$dbprice','$dbfloor','$dbbeds','$dbbaths','$dbbalcony','$dbdescription','$dbtier')";

    if (mysqli_query($conn, $sql)) 
    {
      $last_id = mysqli_insert_id($conn);
    }


    $uploadFolder = 'assets/uploads/';
    foreach ($_FILES['imageFile']['tmp_name'] as $key => $image) 
    {
        $imageTmpName = $_FILES['imageFile']['tmp_name'][$key];
        $imageName = $_FILES['imageFile']['name'][$key];
        $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);
        // save to database
        $sql = "INSERT INTO approval_house_image(house_id,image) value ('$last_id','$imageName')";
        mysqli_query($conn, $sql);
    }
    header("Location: user_profile.php");
    
    
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>Add House</title>
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
          <li class="dropdown"><a class="nav-link scrollto active" href="#team"><span>Add Property</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="add_houses.php">Add Houses</a></li>
              <li><a href="add_lands.php">Add Lands</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact_us.php">Contact</a></li>
          

          <?php

          if (empty($_SESSION['logged_in'])) echo '<li><a class="nav-link scrollto" href="login.php">Login</a></li>';
          else {
            echo '<li class="dropdown"><a  href="#team"><span>Profile</span><i class="bi bi-chevron-down"></i></a>
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


     <article class="card-body mx-auto" style="max-width: 750px;">
     <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 800px;">
        <div class="container-fluid">
         <h2 class="text-center text-dark text-capitalize pt-4">Add House</h2>
         <p class="text-center text-dark">Fill up the form to add your house!</p>
         <form action="add_houses.php" id="addhouse" method="POST" enctype="multipart/form-data">
           <div class="row">
             <div class="col-md-12">
               <div class="form-group input-group">
                 <div class="input-group-prepend">
                   <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input name="ownername" class="form-control" placeholder="Owner Name" type="text" required="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                  </div>
                  <input name="email" class="form-control" placeholder="Owner Email Address" type="email" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"> </i> </span>
                  </div>
                  <input name="contact" class="form-control" placeholder="Owner Contact Number" type="text"  required="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-check-square-o"></i> </span>
                  </div>
                  <select name="purpose" class="form-control"  required="" >
                    <option value="" disabled selected> Select Purpose</option>
                    <option>For Rent</option>
                    <option>For Sell</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-home">  </i> </span>
                  </div>
                  <select name="type" class="form-control"  required="" >
                    <option value="" disabled selected> Select Type</option>
                    <option>Apartment</option>
                    <option>Bachelor</option>
                    <option>Colonial</option>
                    <option>Duplex</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
             <div class="col-md-12">
               <div class="form-group input-group">
                 <div class="input-group-prepend">
                   <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
                  </div>
                  <select name="location" class="form-control"  required="" >
                    <option value="" disabled selected> Select Location</option>
                    <option>Banani</option>
                    <option>Baridhara</option>
                    <option>Bashundhara</option>
                    <option>Dhanmondi</option>
                    <option>Gulshan</option>
                    <option>Jatrabari</option>
                    <option>Khilgaon</option>
                    <option>Khilkhet</option>
                    <option>Lalbag</option>
                    <option>Mirpur</option>
                    <option>Mohammadpur</option>
                    <option>Motijheel</option>
                    <option>Nawabganj</option>
                    <option>New market</option>
                    <option>Savar</option>
                    <option>Tejgaon</option>
                    <option>Uttara</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
             <div class="col-md-12">
               <div class="form-group input-group">
                 <div class="input-group-prepend">
                   <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
                  </div>
                  <input name="address" class="form-control" placeholder="House Address" type="text" required="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-th-large"></i> </span>
                  </div>
                  <input name="areasize" class="form-control" placeholder="Area Size" type="text" required="">
                  <div class="input-group-append">
                    <span class="input-group-text">sqft</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-money" aria-hidden="true"></i> </span>
                  </div>
                  <input name="price" class="form-control" placeholder="Price" type="text"  required="">
                  <div class="input-group-append">
                    <span class="input-group-text">BDT</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-arrow-up"></i> </span>
                  </div>
                  <input name="floor" class="form-control" placeholder="Floor No." type="text" required="">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-bed">  </i> </span>
                  </div>
                  <select name="beds" class="form-control"  required="" >
                    <option value="" disabled selected> Select Beds</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-bath"></i> </span>
                  </div>
                  <select name="baths" class="form-control"  required="" >
                    <option value="" disabled selected> Select Baths</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-trello">  </i> </span>
                  </div>
                  <select name="balcony" class="form-control"  required="" >
                    <option value="" disabled selected> Select Balconys</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
             <div class="col-md-12">
               <div class="form-group input-group">
                  <textarea class="form-control" rows="5" name="description" placeholder="Description"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
             <div class="col-md-12">
                <div class="form-group input-group">
                  <div class="input-group-prepend">
                   <span class="input-group-text"> <i class="fa fa-picture-o"></i> </span>
                  </div>
                  <div class="custom-file">
                    <input type="file" name="imageFile[]" class="custom-file-input" id="inputGroupFile01"  multiple>
                      <label class="custom-file-label" for="inputGroupFile01">Upload House Pictures</label>
                    </div>
                  </div>
                </div>
            </div>
            <div class="form-group">
              <button type="submit" name="add_house" form="addhouse" class="btn btn-primary btn-block"> Add House  </button>
            </div>
          </form>
        </div>
      </article>
    </div>
    </article>
  </body>
</html>
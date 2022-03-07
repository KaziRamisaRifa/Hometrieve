<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/user_profile.css">

    <title>User | Profile</title>
    <style>
body
{
  background-image: url('assets/image/up_bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
<br><br><br><br>
  <div class="container">
  
  <h2><strong>Welcome Ramisa Rifa!</strong></h2>
  <a class="button1" href="donor_login.php" role="button">Log Out</a>
  
  
  <div class="row ">
  
    <div class="col-md-5 col-lg-5 col-sm-12">
    <br>
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#about">About</a></li>
        <li><a data-toggle="tab" href="#timeline">Timeline</a></li>
      </ul>
      <div class="tab-content">
        <div id="about" class="tab-pane fade in active">
          <h3>About</h3>
          <br>
          <div class="row">
            <div class="col-md-4">
              <label>User ID</label>
            </div>
            <div class="col-md-6">
              <p>034</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Name</label>
            </div>
            <div class="col-md-6">
              <p>Ramisa Rifa</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Email</label>
            </div>
            <div class="col-md-6">
              <p>ramisa.rifa077@gmail.com</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Phone</label>
            </div>
            <div class="col-md-6">
              <p>01953637859</p>
            </div>
          </div>
        </div>
        <div id="timeline" class="tab-pane fade">
          <h3>Timeline</h3>
          <br>
          <div class="row">
            <div class="col-md-4">
              <label>House Status</label>
            </div>
            <div class="col-md-6">
              <p>Active <a href="favourite_list.php">(View Details)</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Land Status</label>
            </div>
            <div class="col-md-6">
              <p>Active <a href="favourite_list.php">(View Details)</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Favorite List</label>
            </div>
            <div class="col-md-6">
              <p><a href="favourite_list.php">View</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Compare List</label>
            </div>
            <div class="col-md-6">
              <p><a href="compare_list.php">View</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <br>
      <a class="button1" href="donor_login.php" role="button">Edit Profile</a>
    </div>
    <div class="col-md-5 col-lg-5 col-sm-12">
  <div class="row pt-5">
    
    <button class="button2" role="button" onclick="window.location =''"><i class="fa fa-search"></i> Search a house for rent now!</button>
</div>
<div class="row pt-5">
      <button class="button2" onclick="window.location ='add_houses.php'"  role="button"><i class="fa fa-home"> Add House +  </i>  </button>
      <br>
      <button class="button2" onclick="window.location ='add_lands.php'"  role="button"><i class="fa fa-tree"> Add Land + </i></button>
    
  </div>
  

</div>
  
</div>

  
</div>
</body>
</html>

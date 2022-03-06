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

    <title>User | Profile</title>
    <style>

</style>
</head>
<body>
  <div class="container">
  <div class="text-center">
  <h2><strong>Welcome Ramisa Rifa!</strong></h2>
  <a class="btn btn-primary" href="donor_login.php" role="button">Log Out</a>
  </div>  
  
  <div class="row ">
  <div class="w-50 mx-auto">
    <div class="col-md-10 col-lg-10 col-sm-12">
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
              <p>Active</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label>Land Status</label>
            </div>
            <div class="col-md-6">
              <p>Active</p>
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
      <a class="btn btn-primary" href="donor_login.php" role="button">Edit Profile</a>
    </div>
  </div>
</div>
<div class="row pt-5">
<div class="w-50 mx-auto">
<div class="text-center">
<button class="btn bg-primary text-white text-left" onclick="window.location =''"><i class="fa fa-search"></i> Search a house for rent now!</button>
</div>
</div>
</div>
<div class="row pt-5">
<div class="w-50 mx-auto">
    <div class="col-md-6 col-lg-6 col-sm-12 ml-auto">
      <div class="card">
        <div class="card-img">
          <img src="assets/image/buy.jpg" class="img-fluid">
        </div>
        <div class="card-body">
          <h4 class="card-title">House</h4>
          <p class="card-text">Anyone get their desired house or land by one click. You can find your convinient place to buy houses and land.</p>
        </div>
        <div class="card-footer">
          <div class="text-center">
            <button class="btn bg-primary text-white text-left" onclick="window.location ='add_houses.php'">Add House</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12 ml-auto">
      <div class="card">
        <div class="card-img">
          <img src="assets/image/buy.jpg" class="img-fluid">
        </div>
        <div class="card-body">
          <h4 class="card-title">Land</h4>
          <p class="card-text">Anyone get their desired house or land by one click. You can find your convinient place to buy houses and land.</p>
        </div>
        <div class="card-footer">
          <div class="text-center">
            <button class="btn bg-primary text-white text-left" onclick="window.location ='add_lands.php'">Add Land</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  
</div>
</body>
</html>

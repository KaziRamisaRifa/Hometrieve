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

     <article class="card-body mx-auto" style="max-width: 750px;">
     <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 800px;">
        <div class="container-fluid">
         <h2 class="text-center text-dark text-capitalize pt-4">Add House</h2>
         <p class="text-center text-dark">Fill up the form to add your house!</p>
         <form action="add_houses.php" id="signform" method="POST">
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
                    <span class="input-group-text"> <i class="fa fa-phone">  </i> </span>
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
                    <option>Duplex</option>
                    <option>Other</option>
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
                  <select name="type" class="form-control"  required="" >
                    <option value="" disabled selected> Select Location</option>
                    <option>Dhaka</option>
                    <option>Chittagong</option>
                    <option>Barishal</option>
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
                  <input name="area_size" class="form-control" placeholder="Area Size" type="text" required="">
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
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="inputGroupFile01">Upload House Pictures</label>
                    </div>
                  </div>
                </div>
            </div>
            <div class="form-group">
              <button type="submit" name="signup" form="signform" class="btn btn-primary btn-block"> Add House  </button>
            </div>
          </form>
        </div>
      </article>
    </div>
    </article>
  </body>
</html>
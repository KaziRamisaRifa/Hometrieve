<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Login</title>
<style>
body
{
  background-image: url('image/b.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
<div class="container-fluid ">
    <h1 class="text-center text-dark text-capitalize pt-5">Login</h1>
    <hr class="w-25 pt-4">
    <div class="w-25 mx-auto">
        <form id="login_form" method="POST" action="login.php">
            <div class="form-group">
                <srong><label for="email">Email address/Contact No:</label></srong>
                <input name="emailcontact" class="form-control" placeholder="Enter email or contact number" id="emailcontact" type="text" required="">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input name="password" class="form-control" placeholder="Enter password" id="pwd" type="password" required="">
            </div>
            
            <div class="col-md-12 text-center">
                <button name="log_in" class="btn btn-primary w-50"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
                <hr>
                <button type="submit" class="btn btn-danger" onclick="window.location = 'register.php';"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>
                <button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-danger"><i class="fa fa-google"></i> Login With Google</button>
            </div>
        </form>
    </div>  
</div>


</body>
</html>

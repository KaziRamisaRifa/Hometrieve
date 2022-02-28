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

    <title>Sign Up</title>
    <style>
body
{
  background-image: url('image/signup_bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    </head>
    <body>
            <article class="card-body mx-auto" style="max-width: 450px;">
            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
                <div class="container-fluid">
                    <h2 class="text-center text-dark text-capitalize pt-4">Sign Up</h2>
                    <p class="text-center text-dark">Get started with your free account</p>
                    <p>
                        <div class="text-center">
                            <button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-danger"><i class="fa fa-google"></i> Login With Google</button>
                        </div>
                    </p>
                    <hr class="w-75">
                    <p class="text-center text-dark">OR</p>
                    <form action="user_signup.php" id="signform" method="POST">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="fname" class="form-control" placeholder="First name" type="text" required="">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user-o"></i> </span>
                            </div>
                            <input name="lname" class="form-control" placeholder="Last name" type="text" required="">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Email address" type="email" required="">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <input name="contact" class="form-control" placeholder="Contact No." type="text" required="">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                                <input name="password"class="form-control" placeholder="Create password" type="password" required=" ">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="signup" form="signform" class="btn btn-primary btn-block"> Create Account  </button>
                        </div>
                        <p class="text-center text-primary"><a href="user_login.php">Have an account? Log In</a> </p>
                    </form>
                </div>
                </article>
            </article>
        </div>
    </body>
</html>

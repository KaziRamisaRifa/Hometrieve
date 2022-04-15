<?php

include 'connection.php';
require_once('googleapi/config.php');

if (isset($_POST['sign_up'])) {
    $dbfname = strip_tags($_POST['fname']);
    $dblname = strip_tags($_POST['lname']);
    $dbemail = strip_tags($_POST['email']);
    $dbcontact = strip_tags($_POST['contact']);
    $dbpass = strip_tags($_POST['password']);

    $sql = "SELECT email,contact FROM user";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $dbbemail = $row["email"];
            $dbbcontact = $row["contact"];
            // Check if the username they entered was correct
            if ($dbbemail == $dbemail) {
                echo "<script>
                alert('Same Email Exist! Try Another Email!');
                window.location.href='signup.php';
                </script>";
                exit();
            } else if ($dbbcontact == $dbcontact) {
                echo "<script>
                alert('Same Contact Number Exist! Try Another Contact Number!');
                window.location.href='signup.php';
                </script>";
                exit();
            }
        }
    }

    $sql = "INSERT INTO user(first_name, last_name, email, contact, password)
    VALUES ('$dbfname','$dblname','$dbemail','$dbcontact','$dbpass')";
    mysqli_query($conn, $sql);
    $sql = "SELECT id
    FROM user
    WHERE email='$dbemail'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $dbid = $row["id"];
    header("Location: user_profile.php?id=$dbid");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sign Up</title>
    <style>
        body {
            background-image: url('assets/image/signup_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <article class="card-body mx-auto" style="max-width: 450px;">
        <div class="card bg-light" data-aos="fade-left" data-aos-delay=100>
            <article class="card-body mx-auto" style="max-width: 400px;">
                <div class="container-fluid">
                    <h2 class="text-center text-dark text-capitalize pt-4">Sign Up</h2>
                    <p class="text-center text-dark">Get started with your free account</p>
                    <p>
                    <div class="text-center">
                        <button type="button" onclick="window.location = '<?php echo $loginUrl ?>';" class="btn btn-danger"><i class="fa fa-google"></i> Login With Google</button>
                    </div>
                    </p>
                    <hr class="w-75">
                    <p class="text-center text-dark">OR</p>
                    <form action="signup.php" id="signform" method="POST">
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
                            <input name="email" class="form-control" placeholder="Email address (if any)" type="email" required="">
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
                            <input name="password" class="form-control" placeholder="Create password" type="password" required=" ">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="sign_up" form="signform" class="btn btn-primary btn-block"> Create Account </button>
                        </div>
                        <p class="text-center text-primary"><a href="login.php">Have an account? Log In</a> </p>
                    </form>
                </div>
            </article>
    </article>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
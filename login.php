<?php

include 'connection.php';
require_once('googleapi/config.php');

if (isset($_POST['log_in'])) {
    $dbemailcontact = strip_tags($_POST['emailcontact']);
    $dbpass = strip_tags($_POST['password']);

    $word = "@";
    if (strpos($dbemailcontact, $word) !== false) {
        $sql = "SELECT email, password FROM user";
        $result = mysqli_query($conn, $sql);
        $sql = "SELECT email, password FROM user";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                $Email = $row["email"];
                $Pass = $row["password"];
                // Check if the username and the password they entered was correct
                if ($Email == $dbemailcontact && $Pass == $dbpass) {
                    $sql = "SELECT id
                    FROM user
                    WHERE email='$dbemailcontact'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $dbid = $row["id"];
                    session_start();
                    $_SESSION['userid'] = $dbid;
                    $_SESSION['user_email_address']=$Email;

                    $_SESSION['logged_in'] = true;
                    header("Location: index.php");
                } else {
                    // Display the alert box
                    echo "<script>
                    alert('Invalid Email or Password!');
                    window.location.href='login.php';
                    </script>";
                }
            }
        }
    } else {
        $sql = "SELECT contact, password FROM user";
        $result = mysqli_query($conn, $sql);
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $Contact = $row["contact"];
            $Pass = $row["password"];
            // Check if the username and the password they entered was correct
            if ($Contact == $dbemailcontact && $Pass == $dbpass) {
                $sql = "SELECT id
                FROM user
                WHERE contact='$dbemailcontact'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $dbid = $row["id"];
                session_start();
                $_SESSION['userid'] = $dbid;
                $_SESSION['logged_in'] = true;
                header("Location: index.php");
            } else {
                // Display the alert box
                echo "<script>
                alert('Invalid Email or Password!');
                window.location.href='login.php';
                </script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link href="assets/image/logo1c.jpeg" rel="icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo"><img src="assets/image/logo1c.jpeg" alt="Hometrieve"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a class="nav-link scrollto active" href="#team"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="">Rent Home</a></li>
              <li><a href="">Buy Houses</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#team"><span>Lands</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="">Buy Land</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#team"><span>Add property</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="add_houses.php">Add Houses</a></li>
              <li><a href="add_lands.php">Add Lands</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#">Contact</a></li>
          <li><a class="nav-link scrollto" href="#">Register</a></li>

          <?php

          if (empty($_SESSION['logged_in'])) echo '<li><a class="nav-link scrollto" href="login.php">Login</a></li>';
          else {
            echo '<li class="dropdown"><span>Profile</span><i class="bi bi-chevron-down"></i>
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
    <div class="container">
        <div class="row card-holder">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 class="text-center text-dark text-capitalize pt-3">Login</h1>
                <hr class="w-25 pt-3">
                <div class="card">
                    <form id="login_form" method="POST" action="login.php">
                        <div class="form-group">
                            <label for="email">Email address/Contact No:</label>
                            <input name="emailcontact" class="form-control" placeholder="Enter email or contact number" id="emailcontact" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input name="password" class="form-control" placeholder="Enter password" id="pwd" type="password" required="">
                        </div>
                        <div class="col-md-12 text-center">
                            <button name="log_in" class="btn btn-primary w-50"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
                            <hr>
                            <button type="submit" class="btn btn-danger" onclick="window.location = 'signup.php';"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</button>
                            <button type="button" onclick="window.location = '<?php echo $loginUrl; ?>'" class="btn btn-danger"><i class="fa fa-google"></i> Login With Google</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>

</html>
<?php

include 'connection.php';
session_start();
if($_SESSION['logged_in']==false){
  header('Location:admin_login.php');
}

$adminid = $_SESSION['adminid'];

$sql = "SELECT ((select count(*) from approval_house)+(select count(*) from approval_land))as num";

$result = mysqli_query($conn, $sql);
$pending = mysqli_fetch_assoc($result);

$sql = "SELECT ((select count(*) from houses)+(select count(*) from lands))as num";
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">


    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="css/dashboard.css">
    <style>
        body {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">Hometrieve</span>
                </div>
            </div>
        </header>
        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">

                    <li class="nav-link active">
                        <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx-timer icon'></i>
                            <span class="text nav-text">Approval</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="house_approval_list.php">Houses</a></li>
                            <li><a class="dropdown-item" href="land_approval_list.php">Lands</a></li>
                        </ul>
                    </li>

                    <li class="nav-link">
                        <a href="view _feedback.php">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">User Feedback</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">

        <div class="text">Admin Panel</div>

        <div class="row d-flex p-4">

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <i class="bi bi-stopwatch" style="color:orange;"></i>
                        <h5 class="card-title">Pending Approval</h5>
                        <p class="card-text"><span class="count"><?php echo $pending['num'] ?></span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <i class="bi bi-check2-circle" style="color:blue;"></i>
                        <h5 class="card-title">Total Approved</h5>
                        <p class="card-text"><span class="count"><?php echo $item['num'] ?></span></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <script>
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 2000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>


</body>

</html>
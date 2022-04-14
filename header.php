<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hometrieve</title>
    <meta content="We aim to achieve a convenient way for renting accommodation at best rates In Bangladesh." name="keywords">

    <!-- Favicons -->
    <link href="assets/image/logo1c.jpeg" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- CSS CDN Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Main CSS File -->
    <link href="./css/style.css" rel="stylesheet">
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
                    $logged_in = FALSE;

                    if (!isset($username)) echo '<li><a class="nav-link scrollto" href="login.php">Login</a></li>';
                    else echo '<li><a href="logout.php">' . $username . '</a></li>';
                    ?>
                    

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- <div id="preloader"></div> -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- JS CDN Files -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
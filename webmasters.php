<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Web Team - NSU ACM SC</title>
    <link rel="icon" href="assets/img/acm-logo.png" type="icon">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="assets/css/teams.css">

    <!-- =======================================================
  * Template Name: BizLand - v3.0.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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

    <main id="main" data-aos="fade-up">

        <!-- Team section -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Web <span>Masters</span></h3>
                </div>
                <!-- <div class="section-title mb-1">
          <h2>Sub Executive</h2>
        </div> -->
                <!-- <div class="section-title" data-aos="fade-up">
          <h3 style="text-align: center;">Webteam <span>Leads</span></h3>
        </div> -->

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/image/team/Khalid Bin Shafiq.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Khalid Bin Shafiq</h4>
                                <span>Developer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/image/team/Khalid Bin Shafiq.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Kazi Ramisa Rifa</h4>
                                <span>Developer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/image/team/Khalid Bin Shafiq.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sabiha Hossain</h4>
                                <span>Developer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="assets/image/team/Khalid Bin Shafiq.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Shabab Irtiza Ahammad</h4>
                                <span>Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Home<span>trieve</span></h3>
                        <p>
                            We aim to achieve a <br> convenient way for<strong>
                                renting accommodation at best rates <br></strong>
                            In Bangladesh.
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.acm.org/education/" target="_blank">Dummy text</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://www.acm.org/publications/digital-library/" target="_blank">Dummy text</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <br>
                        <br>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="http://www.northsouth.edu/" target="_blank">Dummy text</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="http://ece.northsouth.edu/" target="_blank">Dummy text</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="about.html" target="_blank">About US</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Get the latest updates from our<br>social profiles!</p>
                        <div class="social-links mt-3">
                            <a href="" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            <a href="" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                            <a href="" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-2">
            <div class="credits">
                <p>Made with ❤️ by <a href="webmasters.php" target="_blank">WebMasters</a></p>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- JS CDN Files -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
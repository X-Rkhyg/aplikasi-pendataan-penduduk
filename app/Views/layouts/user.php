<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/user" class="logo d-flex align-items-center">
                <img src="/assets/img/logo.png" alt="">
                <span>Aplikasi Pendataan Penduduk</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>Tambah Data</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/user/ldata">Tambah Data Kelahiran Sleman</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <?= $this->renderSection('content') ?>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="/user" class="logo d-flex align-items-center">
                            <img src="/assets/img/logo.png" alt="">
                            <span>Aplikasi Pendataan Penduduk</span>
                        </a>
                        <p>Dibuat oleh Raekhandi Yoga Gusmawan</p>
                        <p>Absen 17 / Kelas XII RPL</p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/profile.php?id=100080803441769" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/rkh.yg_/" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                            <a href="https://github.com/X-Rkhyg" class="github" target="_blank"><i class="bi bi-github"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="/user">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="/user/ldata">Tambah Data Kelahiran Sleman</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Jalan Pesona Raya<br>
                            Blok.M No.1<br>
                            Kauman, Batang<br><br>
                            <strong>Phone:</strong> +62 851 5833 8027<br>
                            <strong>Email:</strong> 12rkh21@gmai.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Aplikasi Pendataan Penduduk</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://www.instagram.com/rkh.yg_/">Rkhyg</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
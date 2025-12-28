<?php require "./header.php"?>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


       <!-- Topbar Start -->
  <?php include "./container_header.php"?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-4 px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-hospital fs-1 me-3"></i>Plasery</h1>
        </a>
        <div class="d-none d-lg-flex w-25">
            <a href="https://themewagon.com/themes/plasery" class="btn btn-light px-3">Download Now</a>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light py-3 py-lg-0 px-3">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="service.php" class="nav-item nav-link">Our Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="appointment.php" class="dropdown-item active">Appointment</a>
                        <a href="team.php" class="dropdown-item">Team Members</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        <a href="404.php" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
        <div class="d-none d-lg-block w-25 text-end">
            <a href="#" class="btn btn-light px-3">Make Appointment</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 mb-3">Appointment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-inline-flex justify-content-start bg-white px-4 py-2 mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-4">Make An Appointment</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.2s">
                    <div class="text-center">
                        <h3>Call Now and Get a <span class="text-primary">20%</span> Discount</h3>
                        <h2 class="mb-5">+0123456789</h2>
                    </div>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select class="form-select" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 2</option>
                                    <option value="3">Service 3</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select" style="height: 55px;">
                                    <option selected>Select Doctor</option>
                                    <option value="1">Doctor 1</option>
                                    <option value="2">Doctor 2</option>
                                    <option value="3">Doctor 3</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        placeholder="Appointment Time" data-target="#time1" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Instagram Start -->
    <!-- <div class="container-fluid position-relative instagram p-0 mt-5">
        <a href="#!"
            class="d-flex align-items-center justify-content-center position-absolute top-50 start-50 translate-middle bg-white"
            style="width: 100px; height: 100px; z-index: 1;">
            <i class="fab fa-instagram fa-2x text-primary"></i>
        </a>
        <div class="row g-0">
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid w-100" src="img/instagram-1.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.2s">
                <img class="img-fluid w-100" src="img/instagram-2.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid w-100" src="img/instagram-3.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.4s">
                <img class="img-fluid w-100" src="img/instagram-4.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.5s">
                <img class="img-fluid w-100" src="img/instagram-5.jpg" alt="">
            </div>
            <div class="col-4 col-md-2 wow fadeIn" data-wow-delay="0.6s">
                <img class="img-fluid w-100" src="img/instagram-6.jpg" alt="">
            </div>
        </div>
    </div> -->
    <!-- Instagram End -->


    <!-- Footer Start -->
      <?php include "./footer.php"?> 
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>